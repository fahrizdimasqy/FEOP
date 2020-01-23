<style>
html {
		position: relative;
}
body {
    margin-top: 50px;
    background-color: #ffffff;
    margin-bottom: 100px;
} 

section{
	min-height: 600px;
}


/*
*{ mengatur badge jadi kotak jika tidak di aktifkan 
    akan jadi bulat badge nya
    border-radius: 0 !important;
}
*/
/*
untuk mengatur header atau margin top
di bagian layar pc/laptop
*/
@media(min-width:768px) {
    body {
        margin-top: 80px;
    }
}
.developer{
	background: #222;
	height: : 800px;

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
.f1
{
	color: white ;
}

.f2
{
	color: #ffffff;
}

#garis_4{
	border-style: double;
	border-width: 1px;
	border-color:green;
}
</style>
<body>

<div class="row">

	<div class="alert alert-info">
 
 <marquee> Selamat Datang Di Online Electrical Payment
</marquee>
    </div>
</div>
</div>


<div class="row">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/pln2.jpg" alt="first slide">
      <div class="carousel-caption">
        
      </div>
    </div>

    <div class="item">
      <img src="img/gambar1.jpg" alt="second slide">
      <div class="carousel-caption">
        
      </div>
    </div>

    <div class="item">
      <img src="img/pln.jpg" alt="second slide">
      <div class="carousel-caption">
        
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
</div> <!-- div row -->
 
<div class="container-fluid">

    <div class="container">
        <hr class="f1">
        <h3 class> About <small> FOEP</small></h3>
        <hr class="f1">

<div class="col-lg-4 text-center">
<img align="center" class="img-circle" src="img/pegawai.png" alt="Generic placeholder image" width="220" height="220">

          <h2 >Pegawai</h2>
          <p > Pegawai di FEOP
             adalah orang orang yang profesional di bidang perangkat lunak termasuk
             pembuatan,pemeliharaan,manajemen kualitas dan organisasi pengembanganan perangkat lunak.</p>
          <p><a class="btn btn-primary" href="#" role="button">Selengkapnya&raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
          <img class="img-circle" src="img/pelanggan.png" alt="Generic placeholder image" width="220" height="220">
          <h2>Pelanggan</h2>
          <p >Pelanggan adalah salah satu cabang ilmu mengenai seni dalam mengukur, berkomunikasi dan menginterpretasikan aktivitas keuangan.</p>
          <p><a class="btn btn-primary" href="#" role="button">Selengkapnya&raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 text-center">
          <img class="img-circle" src="img/tarif.png" alt="Generic placeholder image" width="220" height="220">
          <h2>Tarif</h2>
          <p>Teknik otomotif Sepeda Motor adalah salah satu cabang ilmu yang mempelajari tentang bagaimana merancang, membuat dan mengembangkan
             alat-alat transportasi darat yang menggunakan mesin, terutama sepeda motor. </p>
          <p><a class="btn btn-primary" href="#" role="button">Selengkapnya&raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
</div>
</div>


<div class="row">
	<div class="developer">
<div class="container-fluid">

    <div class="container">
        <hr>
        <h3 class="f1 text-center"> Developer <small class="f1"> FOEP</small></h3>
        <hr>

<div class="col-sm-12 text-center">
<img align="center" class="img-circle" src="img/fahriz.jpg" alt="Generic placeholder image" width="240" height="240">

          <h2 class="f1">Fahriz Dimasqy</h2>
          <p class="f1"> Web Programmer && Web Developer.</p>
        </div><!-- /.col-lg-4 -->
       
</div>

</div>

</div>
</div> <!-- row -->


<!--footer -->

<footer>
		<div class="container-fluid text-center">
			<div class="container-marketing">
		<div class="row">
		<div class="col-sm-18">
				<p>Copryght 2017 | built by. <a href="https://instagram.com/fahriz_dimasqy" class="f2">Fahriz Dimasqy</a></p>
		</div>
		</div>
		</div>

</footer>

<!--akhir footer -->