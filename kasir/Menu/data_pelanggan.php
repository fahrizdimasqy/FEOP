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
	<h1 class="page-header">Data Pelanggan</h1>

		<ol class="breadcrumb">
			<li class="active">
				 <span class="glyphicon glyphicon-user">
           </span>
				<i> Pelanggan </i>

			</li>
		</ol>
		
	<!--<div class="panel panel-primary">
			<div class="panel-heading">
				<h3> data pegawai </h3>
			</div>
			</div>
		-->
		<?php		
		$qjumlah = mysqli_query($koneksi,"select * from Pelanggan " );
		$jumlah =mysqli_num_rows($qjumlah);
		?>
		<a class="btn btn-sm btn-primary" href="?menu=tambah_pelanggan"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
					</button>
					
	<a href=""class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-refresh"></span> refresh</a>

	</div>
</div>
</br>
<div class="panel panel-primary">
                        <div class="panel-heading">
                          Tabel Pelanggan
                        </div>

                        <div class="panel-body">
 <div class="table-responsive">
       <table class="table table-hover data-table table-striped tablesorter">

		<thead>
				<tr>

					<th> No</th>
					<th> No Meter</th>
					<th> Nama </th>
					<th> Alamat </th>
					<th> Opsi </th>
				</tr>

				</thead>
				<tbody>	
		<?php
		$no = 1;
		
		$query = mysqli_query($koneksi,"select * from pelanggan");
			



		while ($data = mysqli_fetch_array($query)) {
	
		?>
		<tr>
			<td> <?php echo $no++; ?> </td>
			<td> <?php echo $data['Nometer'] ; ?> </td>
			<td> <?php echo $data['Nama'] ; ?> </td>
			<td> <?php echo $data['Alamat'] ; ?> </td>
			</td>
			<td>
			<a onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_pelanggan&id_pelanggan=<?php echo $data['IDPelanggan']; ?>" title="Hapus"> <span class="glyphicon glyphicon-trash" aria-hidden="true"> </span> </a>
			<a title="Edit" href="?menu=edit_pelanggan&id_pelanggan=<?php echo $data['IDPelanggan']; ?>"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> </a>

		</td>
		</tr>
		
		<?php
		}
		?>
		</tbody>
		</table>
	</div>
</div>
	</body>		
	</html>
	