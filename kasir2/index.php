<?php
  include "../inc/koneksi.php";
  session_start();
  if ($_SESSION['userweb']=="") {
    header('location:../index.php');
  }
  $qprofil = mysqli_query($koneksi,"Select * from tb_kasir WHERE id_kasir='$_SESSION[userweb]'");
  $profil = mysqli_fetch_array($qprofil);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="" me="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>kasir</title>

    < <!-- Bootstrap core CSS -->
<link href="../dist/css/jquery.dataTables.min.css" rel="stylesheet">

    
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
    <!--<link href="../css/sb-admin.css" rel="stylesheet">
-->
     <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

      
      <link href="../css/sb-admin.css" rel="stylesheet">
 

    <link href="../css/fontawesome-free-5.6.3-web/css/all.css" rel="stylesheet">

    

    
    <!-- Custom styles for this template -->
    <link href="../css/dashboard2.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Kasir - FOEP (<?php echo $profil['nama'] ; ?>) </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Dashboard</a></li>
          <li><a href="?menu=profile">Profile</a></li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php
          @$menu = $_GET['menu'];
          ?>

          <ul class="nav nav-sidebar">
            <li <?php if ($menu=="") {echo "class='active' "; } ?> ><a href="index.php"><span class="glyphicon glyphicon-home"> </span> Home </a></li>
            <li <?php if ($menu=="data_pegawai") {echo "class='active' "; } ?> ><a href="?menu=data_pegawai "> Data Pegawai </a></li>
            <li <?php if ($menu=="data_penjualan") {echo "class='active' "; } ?>><a href="?menu=data_penjualan"> Data / Laporan Penjualan </a></li>
          </ul>

            <ul class="nav nav-sidebar">
            <li class="active"><a onclick="return confirm('anda akan keluar ?')" href="../inc/keluar.php">
             <span class="glyphicon glyphicon-log-out"></span>
             Keluar
             <span class="sr-only">(current)</span></a></li>
        </ul>
        </div>

        

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          
           <?php
            error_reporting(0);
            switch ($_GET['menu']) {
           
            case 'data_pegawai':
              include "menu/data_pegawai.php";
              break;

            case 'tambah_pegawai':
                 include "menu/tambah_pegawai.php";
                 break;   

            case 'data_penjualan':
            include "menu/data_penjualan.php";
            break;

            case 'input_penjualan':
            include "menu/input_penjualan.php";
            break;

            case 'data_distributor':
            include "menu/data_distributor.php";
            break;

            case 'tambah_distributor':
                 include "menu/tambah_distributor.php";
                 break;  

          case 'data_pemasukan':
                 include "menu/data_pemasukan.php";
                 break; 

                 case 'profile':
                 include "menu/profile.php";
                 break;

                 case 'edit_profile':
                 include "menu/edit_profile.php";
                 break;           
               
            default:
            include"menu/dashboard.php";
            break;
            }
          ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../dist/js/js/jquery.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="../dist/js/js/jquery.dataTables.min.js"></script>

    <script src="../dist/tinymce/tinymce.min.js"></script>

    <script src="../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../assets/js/vendor/holder.min.js"></script>
    <script src="../dist/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: ".editor"
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {

        $(".data-table").DataTable({

            "language": {
                "emptyTable": "Tidak ada data"
            }   
        });
    });
</script>    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>

       <!-- Custom-->
    <script src="../asset/js/Custom.js"></script>   

    <script src="../asset/js/dataTables/jquery.dataTables.js"></script>
    <script src="../asset/js/dataTables/dataTables.bootstrap.js"></script>
    
    <script src="../asset/js/Custom.js"></script>   
  </body>
</html>

