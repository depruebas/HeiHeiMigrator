<?php


  $PDO = null;
  unset( $PDO);

  session_destroy();
  
  if ( ConfigClass::get("config.debug", "config")) 
  {
    echo '
      <div class="container-fluid logs"> 
        <div class="row">
          <div class="col-lg-12">
    ';

    debug ( $_debug);
    debug ( $_error);

    echo '
      </div></div></div>
    ';
  }


 