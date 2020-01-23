<?php
include "inc/koneksi.php";
session_start();
if(@$_SESSION['userweb'] != "") {
  if($_SESSION['level']="admin") {
    header('location:admin/index.php');
  }
  else if ($_SESSION['level'] ="kasir") {
     header('location:kasir/index.php');
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    
    <link rel="icon" href="../../favicon.ico">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles fgor this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <div class="col-md-4 col-md-offset-4">
  <div class="panel panel-primary">
  <div class="panel-heading">
    <img src="fz.png" height="120" width="80" align="right">
    <h2><b> Login Administrator </b></h2>
    <h4> Aplikasi FOEP </h4>
    <h5> (Online Electrical Payment) </h5>
        </div>
    <div class="panel-body">
      <div class="alert alert-info">
        masukan username dan pasword yang benar!!
        </div>
        <form class="form" method="post">
        <div class="input-group">
          <span class="input-group-addon">Username: 
            <input type="text" name="username" class="form-control" placeholder="masukan username">
          </span>
        </div>
      </br>
        <div class="input-group">
          <span class="input-group-addon">Password: 
            <input type="Password" name="password" class="form-control" placeholder="masukan password">
          </span>
        </div>
      </br>
      <input type="submit" class="btn btn-primary col-md-12" name="login" value="Login">
    </br>
    </form>
  <?php
  if (isset ($_POST['login'])){
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $query =mysqli_query($koneksi,"select * from tb_kasir WHERE username='$user' AND password=md5('$pass')");
  $cek = mysqli_num_rows($query);
  $data = mysqli_fetch_array($query);
  if ($cek < 1 ) {
    ?>
  </br>
    <div class="alert alert-danger">
      Maaf Username Atau Password tidak Cocok
    </div>
  <?php
  }
  else {
    if($data['status']=="nonaktif") {
      ?>
    </br>
     <div class="alert alert-danger">
      Maaf Akun Anda belum aktif
    </div>
    <?php
    }
    else if ($data['status']=="aktif"){
      $_SESSION['userweb']=$data['id_kasir'];
      $_SESSION['level']=$data['akses'];
    if ($data['akses']=="admin") {
      
      header('location:admin/index.php');
      # code...
    }
    else if($data['akses']=="kasir") {
     header('location:kasir/index.php');
     }
    }
   }
  }
?> 
      </div>
    </div>
  </div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
