<?php
include "inc/koneksi.php";
session_start();
if(@$_SESSION['userweb'] != "") {
  if($_SESSION['level']="admin") {
    header('location:admin/index.php');
  }
  else if ($_SESSION['level'] ="kasir") {
     header('location:kasir/index.php');
     
  }else if ($_SESSION['level'] ="kepala_toko") {
     header('location:kepala_toko/index.php');
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
    <link rel="icon" href="../../favicon.ico">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles fgor this template -->
    <link href="css/signin.css" rel="stylesheet">

    <link href="css/style7.css" rel="stylesheet">

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

<div class="container">

    <form class="form-signin" method="post">


        <div class="form-group">
            <div class="text-center text-header">
               <img src="css/fahriz.png" style="width:60px;" alt="logo">
                <h1>Login Administrator</h1>
                <h2>Online Payment Electrical</h2>
                <h2>FOEP</h2>
              </div>
          
        <hr>
        <div class="form-group">

            <label for="input-username" class="input-label dinamic-label">Username</label>
            <input type="text" id="input-username" name="username" class="form-control input-field" placeholder="Username" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
        <!-- script coustom data tidak boleh kosong -->
        <!--<form role="form" class="form-horizontal" action="simpanuser.php" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="username">Username</label>
                            <div class="col-sm-8">
                            <input type="text" name="username" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div> -->
        <div class="form-group">

            <label for="input-password">Password</label>
            <input type="password" placeholder="Password" name="password" id="input-password" class="form-control" required>
        </div>
        <button class="btn btn-primary btn-block" type="submit" name="login">Sign in</button>

    </form>
<div class="text-center forget">
                   </br>
                      <p align="right">Back To <a href="index.php">Home</a></p>
                </div>


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
      ?>
      <script type="text/javascript">
        alert('berhasil login');
          document.location.href="admin/index.php";
        </script>;
      <?php
    }
    else if($data['akses']=="kasir") {
      ?>
      <script> 
        alert("login berhasil");
        document.location.href="kasir/index.php";
      </script>
      <?php
     }else if($data['akses']=="kepala_toko"){
      ?>
      <script> 
        alert("login berhasil");
        document.location.href="kepala_toko/index.php";
      </script>
      <?php
     }else if ($data['akses']=="user"){
      ?>
      <script type="text/javascript">
        alert("login berhasil user");
        document.location.href="user/index.php";
      </script>
      <?php
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
