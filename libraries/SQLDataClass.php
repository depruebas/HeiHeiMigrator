<?php

  class SQLDataClass
  {
    
    private $driver = null;

    function __construct()
    {
    }

    public function Connect( $config)
    {
      $this->driver = $config['driver'];

      if ( ConfigClass::get("config.debug", "config")) DebugClass::SaveQuery( 'connection', $config);

      $connection = $config['driver'] . ":host=" . $config['host'] . ";port=" . $config['port'] . ";dbname=" . $config['database'] .";".$config['charset'];
      try 
      {
        return ( new PDO( $connection, $config['username'], $config['password'] ));

      } 
      catch ( PDOException $e) 
      {
          print "Error!!: " . $e->getMessage() . "<br/>";
          die();
      }

    }

    public function Query( $data, $conn) 
    {

      $stmt = $conn->prepare( $data['query']);
      $stmt->execute();
      $rows = $stmt->fetchAll( PDO::FETCH_ASSOC);
      $stmt->closeCursor();


      if ( ConfigClass::get("config.debug", "config")) DebugClass::SaveQuery( $this->driver, $data['query']);

     
      return ( $rows);

    }

    public function QueryWithParams( $data, $conn) 
    {

      $stmt = $conn->prepare( $data['query']);
      $stmt->execute( $data['params']);
      $rows = $stmt->fetchAll( PDO::FETCH_ASSOC);
      $stmt->closeCursor();

      if ( ConfigClass::get("config.debug", "config")) DebugClass::SaveQuery( $this->driver, $data['query']);

      return ( $rows);

    }

  }
