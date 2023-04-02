<?php
include "include/connect.php";
session_start();
if(isset($_SESSION["name"])){
 header("Location: index.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
    <!-- <script src="/bootstrap/dist/js/jquery.js"></script>
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script> -->
        <link href="bootstrap-4.6.1/dist/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap-4.6.1/dist/js/jquery.js"></script>
        <script src="bootstrap-4.6.1/dist/js/bootstrap.bundle.js"></script>
        <link rel="stylesheet" href="fontawesome-free/css/all.css">

  </head>
        <body class="container col-12">

   <div class="container col-4">
      <div class="card card-login mx-auto mt-5">

        <div class="card-header alert alert-dark">Admin Login</div>
        <div class="card-body col-12">
          <center>
            <!-- <h2><i>Prayosha Admin</i></h2> -->
          <img src="images/logo.jpg" alt="..." width="70%" style="margin-bottom:-20px;position:relative; top:-30px">
      </center>
          <form method="POST" action="login1.php">
            <div class="form-group">
              <div>
                <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="user" required="required" autofocus="autofocus">
              </div>
            </div>
            <div class="form-group">
              <div>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required="required">
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>

<!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kQ2J4" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
<?php
}
?>