<?php

  class DebugClass
  {
    
    public static function SaveQuery( $type, $sql)
    {
      global $_debug;

      $_debug[ $type][] = $sql;

    }

    public static function SaveError( $type, $error)
    {
      global $_error;

      $_error[ $type][] = $error;

    }

  }