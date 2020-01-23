<!DOCTYPE html>
<html>
<head>
	
	<title>Dashboard</title>
</head>
<body>
	<h3 class="page-header">Dashboard<small> statistik website </small></h3>


			</li>
		</ol>
	<div class="panel panel-primary">

                        <div class="panel-heading">
                            <h4 align="center"> Selamat Datang Admin </h4>


 <h2 align="center"> FOEP (Online Electrical Payment) </h2>
 </div>
  </br>
 	<div class="row">
 	<div class="col-md-4">
 		<?php		
		$qjumlah = mysqli_query($koneksi,"select * from tb_kasir where akses='kasir' " );
		$jumlah =mysqli_num_rows($qjumlah);
		?>
 		<div class="panel panel-info">
 			<div class="panel-heading"> Data Pegawai </div>
 				<div class="panel-body">
 					<center>
 						<h3><?php echo $jumlah; ?></h3>
 					</center>
 						
 				</div>
 			</div>
 		</div>
 		<?php		
		$qjumlah = mysqli_query($koneksi,"select * from pelanggan" );
		$jumlah =mysqli_num_rows($qjumlah);
		?>
 		<div class="col-md-4">
 		<div class="panel panel-info">
 			<div class="panel-heading"> Data Pelanggan</div>
 				<div class="panel-body">
 					<center>
 						<h3> <?php echo $jumlah; ?></h3> </h3>
 					</center>
 						
 				</div>
 			</div>
 		</div>
 		<?php		
		$qjumlah = mysqli_query($koneksi,"select * from tarif" );
		$jumlah =mysqli_num_rows($qjumlah);
		?>
 		<div class="col-md-4">
 		<div class="panel panel-info">
 			<div class="panel-heading"> Data 
 			Pembayaran </div>
 				<div class="panel-body">

 					<center>
 						
 					<h3> <?php echo $jumlah; ?></h3>
 					</center>
 						
 				</div>
 			</div>
 		</div>
 		<?php		
		$qjumlah = mysqli_query($koneksi,"select * from tarif" );
		$jumlah =mysqli_num_rows($qjumlah);
		?>
 		<div class="col-md-4">
 		<div class="panel panel-info">
 			<div class="panel-heading"> Data Tarif </div>
 				<div class="panel-body">
 					<center>
 						<h3> <?php echo $jumlah; ?></h3>
 					</center>
 						
 				</div>
 			</div>
 		</div>
 				
</body>
</html>