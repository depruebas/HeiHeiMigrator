<?php

  debug ( $_POST);

  $data = $_POST;
  unset( $data['Enviar']);

  foreach ( $data as $key => $value) 
  {
    $heiTables = str_replace( "chk_", "", $key);

    debug ( $heiTables);

    $conn = $PDO->Connect( $_SESSION["database"]);

    $query['query'] = "DESCRIBE ".$heiTables;
    $describe_table = $PDO->Query( $query, $conn);

    debug ( $describe_table);
  }


  

