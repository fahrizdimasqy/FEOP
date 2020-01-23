<!DOCTYPE html>
<html>
	<head>
		
		<title>Dashboard</title>
	</head>
	<body>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
				Dashboard <small>Statistik Website</small>
				</h1>
				
				<div class="alert alert-info">
					<?php
					include "../inc/koneksi.php";
					session_start();
					if ($_SESSION['userweb']=="") {
					header('location:../index.php');
					}
					$qprofil = mysqli_query($koneksi,"Select * from tb_kasir WHERE id_kasir='$_SESSION[userweb]'");
					$profil = mysqli_fetch_array($qprofil);
					?>
					<marquee> Selamat Datang <?php echo $profil['nama']; ?>
					</marquee>
				</div>
				<ol class="breadcrumb">
					<li class="active">
						<span class="glyphicon glyphicon-dashboard"> </span>
						<i> Pegawai </i>
					</li>
				</ol>
			</li>
		</ol>
	</div>
</div>
<div class="panel panel-red">
	<div class="panel-heading">
		Dashboard
	</div>
	<div class="panel-body">
		
		<div class="col-lg-3 col-md-6">
			<?php
			$qjumlah = mysqli_query($koneksi,"select * from tb_kasir");
			$jumlah =mysqli_num_rows($qjumlah);
			?>
			
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-user fa-5x"> </i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><?php echo $jumlah; ?></div>
							<div> total pegawai </div>
						</div>
					</div>
				</div>
				
				<a href="?menu=data_pegawai">
					<div class="panel-footer">
						<span class="pull-left"> View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i> </span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<?php
			$qjumlah = mysqli_query($koneksi,"select * from pelanggan " );
			$jumlah =mysqli_num_rows($qjumlah);
			?>
			
			<div class="panel panel-yellow">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-users fa-5x"> </i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><?php echo $jumlah; ?></div>
							<div> total pelanggan </div>
						</div>
					</div>
					
				</div>
				
				<a href="?menu=data_pelanggan">
					<div class="panel-footer">
						<span class="pull-left"> View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i> </span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<?php
			$qjumlah = mysqli_query($koneksi,"select * from tarif " );
			$jumlah =mysqli_num_rows($qjumlah);
			?>
			
			<div class="panel panel-green">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-money-check fa-5x"> </i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><?php echo $jumlah; ?></div>
							<div> total tarif </div>
						</div>
					</div>
				</div>
				
				<a href="?menu=data_tarif">
					<div class="panel-footer">
						<span class="pull-left"> View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i> </span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		
		<div class="col-lg-3 col-md-6">
			<?php
			$qjumlah = mysqli_query($koneksi,"select * from tarif " );
			$jumlah =mysqli_num_rows($qjumlah);
			?>
			
			<div class="panel panel-red">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-money-check-alt fa-5x"> </i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><?php echo $jumlah; ?></div>
							<div> total pembayaran </div>
						</div>
					</div>
				</div>
				
				<a href="?menu=data_tarif">
					<div class="panel-footer">
						<span class="pull-left"> View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i> </span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="col-md-16">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Profile User</h3>
		</div>
		<div class="panel-body">
			<table class="table" cellpadding="8" cellspacing="8">
				<tr>
					<th> Nama </th>	<td>:</td><td><?php echo $profil['nama']; ?> </td>
				</tr>
				<tr>
					<th> Alamat </th>	<td>:</td><td> <?php echo $profil['alamat']; ?></td>
				</tr>
				<tr>
					<th> Telpon </th>	<td>:</td><td> <?php echo $profil['telepon']; ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
</div>

</body>
</html>