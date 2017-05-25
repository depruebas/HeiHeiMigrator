<?php

  require_once "../bootstrap.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once "includes/headers_metas.php"; ?>

</head>

<body>

    <?php include_once "includes/navbar.php"; ?>

    <form name=form1 action=/migration.php method="post">
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-8">
              <h3>Selecciona las tablas a migrar</h3>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Tabla</th>
                    <th>Reg.</th>
                  </tr>
                </thead>
                <tbody>
                <?php

                  foreach ( $tables as $table) 
                  {
                    echo '<tr>
                        <td><input type=checkbox name=chk_'.$table['TABLE_NAME'].' id=chk_'.$table['TABLE_NAME'].'></td>
                        <td>'.$table['TABLE_NAME'].'</td>
                        <td>'.$table['TABLE_ROWS'].'</td>
                        </tr>';
                  }

                ?>
                  
                </tbody>
              </table>
              <br>
              <input type="Submit" class="btn btn-primary" name="Enviar" id="Enviar" value=" Migrar ">
              </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include_once "includes/footer.php"; ?>


</body>

</html>

<?php 

  $tables = null;
  $conn = null;
  unset( $tables);
  unset( $conn);

  require_once "../footer.php"; 

?>
