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

    </style>
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
  

<!--jumbroton-->

<div id="home" class="jumbotron jumbotron-fluid scrollspy">
  <div class="container">
    <h1 class="display-4"><span> FOEP</br> </span> Online <span> eletrcial </span> Payment</h1>
    
    <a href="" class="btn btn-success tombol"> Welcome </a>
  </div>
</div>
<!--akhir jumbroton-->

<!-- awal container -->
<div id="about" class="container text-center about scrollspy">

<h2><b> About</b></h2>

<hr class="f1">

<div class="col-sm-4 text-center">
  <img class="img-circle" src="img/pegawai.png" alt="Generic placeholder image" width="220" height="220">
  <h2 >Pegawai</h2>
  <p > Pegawai di FEOP
    adalah orang orang yang profesional di bidang perangkat lunak termasuk
  pembuatan,pemeliharaan,manajemen kualitas dan organisasi pengembanganan perangkat lunak.</p>
  <p><a class="btn btn-primary" href="#" role="button">Selengkapnya&raquo;</a></p>
  </div><!-- /.col-lg-4 -->

  <div class="col-sm-4 text-center">
    <img class="img-circle" src="img/pelanggan.png" alt="Generic placeholder image" width="220" height="220">
    <h2>Pelanggan</h2>
    <p >Pelanggan adalah salah satu cabang ilmu mengenai seni dalam mengukur, berkomunikasi dan menginterpretasikan aktivitas keuangan.</p>
    <p><a class="btn btn-primary" href="#" role="button">Selengkapnya&raquo;</a></p>
  </div>
  <div class="col-sm-4 text-center">
    <img class="img-circle" src="img/tarif.png" alt="Generic placeholder image" width="220" height="220">
    <h2>Tarif</h2>
    <p>Teknik otomotif Sepeda Motor adalah salah satu cabang ilmu yang mempelajari tentang bagaimana merancang, membuat dan mengembangkan
    alat-alat transportasi darat yang menggunakan mesin, terutama sepeda motor. </p>
    <p><a class="btn btn-primary" href="#" role="button">Selengkapnya&raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    </div> <!-- akhir container -->
    <!-- Developer -->
    <section class="developer scrollspy" id="developer">
      <div class="developer f1">
        <div class="container-fluid text-center">
          <div class="container">
            <div class="row">
              
              <h2>Developer</h2>
              <hr>
              <img align="center" class="img-circle" src="img/fahriz.jpg" alt="Generic placeholder image" width="220" height="220">
              <h2 class="f1">Fahriz Dimasqy</h2>
              <p class="f1"> Web Programmer && Web Developer.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Developer -->
    
    <footer id="footer" class="scrollspy">
      <div class="container-fluid text-center">
        <div class="row">
          <div class="col-sm-18">
            <p>&copy Copryght 2019 | built by. <a href="https://instagram.com/fahriz_dimasqy" class="f2">Fahriz Dimasqy</a></p>
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="css/materialize/js/materialize.min.js"></script>
    <script>
    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll,{
    scrollOffset:50
    });
    </script>
<!--<div class="alert alert-info">
  <marquee> Selamat Datang </marquee>
</div> -->

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>