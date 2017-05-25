<?php

class ConfigClass 
{

    public static $items = array();

    public static function load( $filepath, $folder)
    {
       static::$items = include( dirname( dirname(__FILE__)).'/'.$folder.'/' . $filepath . '.php');
    }

    public static function get( $key = null, $folder = 'config')
    {
      $input = explode( '.', $key);
      $filepath = $input[0];
      unset($input[0]);
      $key = implode( '.', $input);

      static::load( $filepath, $folder);

      if ( !empty( $key))
      {
          return static::$items[$key];
      }

      return static::$items;
    }

}