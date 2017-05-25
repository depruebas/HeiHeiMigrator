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

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                

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
