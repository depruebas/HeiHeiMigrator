<?php


  $PDO = null;
  unset( $PDO);

  
  if ( ConfigClass::get("config.debug", "config")) 
  {
    echo '
      <div class="container-fluid logs"> 
        <div class="row">
          <div class="col-lg-12">
    ';

    echo '<b>SQL:</b><br>';
    debug ( $_debug);

    echo '<b>ERRORES</b>:<br>';
    debug ( $_error);

    echo '
      </div></div></div>
    ';
  }


 