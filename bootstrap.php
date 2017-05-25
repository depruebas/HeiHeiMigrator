<?php
  
  define ( 'FILE_LOG', "/log_");
  define ( 'RUTA_LOGS', dirname(__file__) . "/logs/");

  # Variables globales para losg y trazas
  global $_debug;
  global $_error;

  # Librerias generales de la aplicacion
  require_once  dirname( __FILE__) . "/libraries/utils.php";
  require_once  dirname( __FILE__) . "/libraries/DebugClass.php";
  require_once  dirname( __FILE__) . "/libraries/ConfigClass.php";
  require_once  dirname( __FILE__) . "/libraries/CustomErrorLogClass.php";
  require_once  dirname( __FILE__) . "/libraries/SQLDataClass.php";

  # Inicializamos la base de datos 
  $PDO = new SQLDataClass();

  # Inicializamos session
  session_start();

  # Cargamos el controlador por defecto si existe
  $page = explode ( "." , $_SERVER['SCRIPT_NAME']);

  $file = dirname( __FILE__) . "/controllers/" . ucfirst( substr( $page[0], 1, strlen( $page[0]))) . "Controller.php";

  if ( file_exists( $file))
  {
    require_once  $file;
  }
