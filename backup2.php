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
  </head>

  <body>
</br>
    <div class="container">
      <div class="header clearfix">
        <nav>

          <ul class="nav nav-pills">
          <?php
          @$menu = $_GET['menu'];
          ?>

    <li <?php if ($menu=="") {echo "class='active' "; } ?> role="presentation">
          <a href="index.php">Home</a></li>
            <li <?php if ($menu=="about") {echo "class='active' "; } ?> role="presentation">
             
                  <a href="?menu=about">About</a> </li>

                <li  <?php if ($menu=="contact") {echo "class='active' "; } ?> role="presentation">
                  <a href="?menu=contact">Contact</a></li>

                  <li class="nav nav-pills pull-right"> <a class="btn btn-info" href="login.php">Signup</a> </li>

                  <li class="nav nav-pills pull-right"> <a class="btn btn-success" href="login.php">Login</a> </li>

              </ul>
            </nav>
          </br>
        <h3 class="text-muted">Electrical Online Payment</h3>
      <hr>
  </div>
    


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

              default:
            include"menu/home.php";
            break;
    }
?>