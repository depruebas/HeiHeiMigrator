<?php

  require_once "../bootstrap.php";

  $lang = ConfigClass::get("lang_spanish.form_login", "languages");

  # Control para no reenviar el formulario mas de una vez
  $_SESSION["form_token"] = md5(rand(0,10000000)).time();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once "includes/headers_metas.php"; ?>

</head>

<body>
    
  <div class="container">
   <div class="row">
      <div class="col-md-12 text-center">
        <h3 class="panel-titulo-gr"><?php echo $lang['titulo']; ?></h3>
      </div>
    </div>

  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

    <?php

      if ( $error == "1") {

    ?>

    <br><br>
    <div class="alert alert-danger" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
       <?php echo $lang['text_error']; ?>
    </div>
    <br><br>
    <?php
      }
    ?>  
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $lang['titulo1']; ?></h3>
        </div>
        <div class="panel-body">
          <form name=form1 action="/listados.php?a=login" method="post">
          <input type="hidden" name="token" value="<?php echo $_SESSION["form_token"]; ?>">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" placeholder="<?php echo $lang['database']; ?>" name="database" id="database" type="text" autofocus>
                </div>
                 <div class="form-group">
                    <input class="form-control" placeholder="<?php echo $lang['host']; ?>" name="host" id="host" type="text" autofocus>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="<?php echo $lang['username']; ?>" name="username" id="username" type="text" autofocus>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="<?php echo $lang['password']; ?>" name="password" id="password" type="password" value="">
                </div>
                <div class="checkbox">
                    <label class="checkbox_input">
                       
                    </label>
                </div>
                <!-- Change this to a button or input when using this as a form -->
                <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                <input type="Submit" name="Enviar" id="Enviar" class="btn btn-lg btn-primary btn-block" value=" <?php echo $lang['enviar']; ?> ">
            </fieldset>
          </form>
          
        </div>
      </div>

      

    </div>
    <div class="col-md-3"></div>
  </div>

</div>


    <?php include_once "includes/footer.php"; ?>


</body>

</html>

<?php require_once "../footer.php"; ?>