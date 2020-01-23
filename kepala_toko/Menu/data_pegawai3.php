<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		

		<div class="row">
		<div class="col-xs-12 col-md-12">

		<!--	<h3> data pegawai </h3>-->
	<h1 class="page-header">Data Pegawai</h1>
 <div class="alert alert-info">
 <marquee> Maaf Username Atau Password tidak Cocok
</marquee>
    </div>
		<ol class="breadcrumb">
			<li class="active">
				 <span class="glyphicon glyphicon-user">
           </span>
				<i> Pegawai </i>

			</li>
		</ol>
		
	<!--<div class="panel panel-primary">
			<div class="panel-heading">
				<h3> data pegawai </h3>
			</div>
			</div>
		-->
		<?php		
		$qjumlah = mysqli_query($koneksi,"select * from tb_kasir where akses='kasir' " );
		$jumlah =mysqli_num_rows($qjumlah);
		?>
		<a class="btn btn-sm btn-primary" href="?menu=tambah_pelanggan"> Tambah Data</a>
					</button>
					
	<a href=""class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-refresh"></span> refresh</a>

	</div>
</div>
</br>

 <div class="table-responsive">
       <table class="table table-hover data-table table-striped tablesorter">

		<thead>
				<tr>
					<th> No </th>
					<th> Nama </th>
					<th> Alamat </th>
					<th> Telepon </th>
					<th> Username </th>
					<th> Status </th>
					<th> Opsi </th>
				</tr>

				</thead>
				<tbody>	
		<?php
		$no = 1;
		$inputan = $_POST['inputan'];
		if ($_POST['cari']){
			if($inputan==""){
				$query = mysqli_query($koneksi,"select * from tb_kasir where akses='kasir'");
			}
			else if ($inputan!="") {
				$query = mysqli_query($koneksi,"select * from tb_kasir where nama like '%$inputan%' ");
			}
		}
		else{
		$query = mysqli_query($koneksi,"select * from tb_kasir where akses='kasir'");
		}
		$cek = mysqli_num_rows($query);

		if($cek < 1 ){
			?>
			<tr>
				<td colspan="7">
					data yang anda cari tidak tersedia
					<a href="" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-refresh"></span></a>
				 </td>
			</tr>
			<?php
		}
		else{



		while ($data = mysqli_fetch_array($query)) {
	
		?>
		<tr>
			<td> <?php echo $no++; ?> </td>
			<td> <?php echo $data['nama'] ; ?> </td>
			<td> <?php echo $data['alamat'] ; ?> </td>
			<td> <?php echo $data['telepon'] ; ?> </td>
			<td> <?php echo $data['username'] ; ?> </td>
			<td> <?php echo $data['status'] ; ?> </td>
			<td>
			<a onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_pegawai&id_pegawai=<?php echo $data['id_kasir']; ?>" title="Hapus"> <span class="glyphicon glyphicon-trash" aria-hidden="true"> </span> </a>
			<a title="Edit" href="?menu=edit_pegawai&id_pegawai=<?php echo $data['id_kasir']; ?>"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> </a>

		</td>
		</tr>
		
		<?php
		}}
		?>
		</tbody>
		</table>
	</body>		
	</html>
	