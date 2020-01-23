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
    <title>Welcome</title>
    <!-- Bootstrap core CSS -->
    
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="dist/js/js/jquery.js">
    </script>
    <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="css/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="dist/js/js/jquery.min.js"></script>
    <!-- Custom styles for this template -->
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style type="text/css">
    html {
    position: relative;
    }
    body {
    margin-top: 50px;
    background-color: #ffffff;
    margin-bottom: 100px;
    }
    section{
    min-height: 300px;
    }
    hr{
    width: 250px;
    border-top: 3px solid #999;
    }
    .navbar-inverse {
    background-color: #4682B4;
    border-color: #009090;
    }
    .navbar-inverse .navbar-brand {
    color: #ffffff;
    }
    .navbar-inverse .navbar-brand:hover,
    .navbar-inverse .navbar-brand:focus {
    color: #FFFFFF;
    }
    .navbar-inverse .navbar-text {
    color: #ffffff;
    }
    .navbar-inverse .navbar-nav > li > a {
    color: #ffffff;
    }
    .navbar-inverse .navbar-nav > li > a:hover,
    .navbar-inverse .navbar-nav > li > a:focus {
    color: #000000;
    }
    .navbar-inverse .navbar-nav > .active > a,
    .navbar-inverse .navbar-nav > .active > a:hover,
    .navbar-inverse .navbar-nav > .active > a:focus {
    color: #ffffff;
    background-color: #009090;
    }
    .font1{
    color:white;
    }
    
    #logo{
    width: 40px;
    margin-top: 5px;
    margin-right: 10px;
    }
    .jumbotron{
    background-image: url(img/pln.jpg);
    background-size: cover;
    height:600px;
    text-align: center;
    }
    .jumbotron .display-4{
    color: white;
    margin-top: 150px;
    font-weight: 200;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 10);
    font-size: 62px;
    margin-bottom: 40px;
    }
    .jumbotron .display-4 span{
    font-weight: 700;
    }
    /*agar tombolnya lancip */
    .tombol {
    text-transform: uppercase;
    border-radius: 40px;
    }
    .alert{
    margin-top: 50px;
    margin-bottom: 0px;
    }
    .developer{
    background: #222;
    min-height: 510px;
    }
    .about{
    margin-top: 50px;
    min-height: 579px;
    }
    .f1
    {
    color: white ;
    }
    .f2
    {
    color: #ffffff;
    }
    footer{
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100px;
    background: #4682B4;
    padding-top: 50px;
    }
    footer p{
    color: #000000;
    }
    .collapsed{
      border-color:#ffffff;
    }
    .navbar-toggle{
      border-color:#ffffff;
    }
    .outline{
      border-color: #ffffff;
    }
      .navbar-toggle .collapsed{
      border-color:#ffffff;
}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed outline" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          
          <img id="logo" class="img-reponsive" align="left" alt="Responsive image" src="img/logo.png " >
          <a class="navbar-brand" href="index.php">Aplikasi Pembayaran Listrik Online </a>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#developer">Developer</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
          </ul>
          
          
        </form>
      </div>
    </div>
  </nav>
  
</div>
<!--<div class="alert alert-info">
  <marquee> Selamat Datang </marquee>
</div> -->

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<?php
error_reporting(0);
switch ($_GET['menu']) {


case 'about':
include "menu/about.php";
break;


case 'contact':
include "menu/contact.php";
break;

default :
include 'menu/home2.php';
break;
}
?>