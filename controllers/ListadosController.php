<?php

  # Control para no reenviar el formulario mas de una vez
  if ( $_SESSION["form_token"] == $_POST['token'])
  {
    debug ( $_POST);

    $data = $_POST;
    $data['port'] = 3306;

    $_config = array(
        'description' => '',
        'driver'      => 'mysql',
        'host'        => $data['host'],
        'port'        => $data['port'],
        'database'    => $data['database'],
        'username'    => $data['username'],
        'password'    => $data['password'],
        'charset'     => 'charset=UTF8'
    );

    $conn = $PDO->Connect( $_config);

    $query['query'] = "Show tables";
    $tables = $PDO->Query( $query, $conn);

    debug ( $tables);

  }
  
  # Control para no reenviar el formulario mas de una vez
  //$_SESSION["form_token"] = md5(rand(0,10000000)).time();