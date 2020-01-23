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

	<h1 class="page-header"> Data Pegawai </h1>
 
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
		$qjumlah = mysqli_query($koneksi,"select * from tb_kasir" );
		$jumlah =mysqli_num_rows($qjumlah);
		?>
		
					
					
	<a href=""class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-refresh"></span> refresh</a>

	</div>
</div>
</br>
<div class="panel panel-primary">
                        <div class="panel-heading">
                          Tabel Pegawai
                        </div>

                        <div class="panel-body">

 <div class="table-responsive">
       <table class="table table-hover data-table table-striped  tablesorter">

		<thead>
				<tr>
					<th> No </th>
					<th> Nama </th>
					<th> Alamat </th>
					<th> Telepon </th>
					<th> Username </th>
					<th> Status </th>
					

				</tr>

				</thead>
				<tbody>	
		<?php
		$no = 1;
				$query = mysqli_query($koneksi,"select * from tb_kasir where akses='kasir'");
		while ($data = mysqli_fetch_array($query)) {
	
		?>
		<tr>
			<td> <?php echo $no++; ?> </td>
			<td> <?php echo $data['nama'] ; ?> </td>
			<td> <?php echo $data['alamat'] ; ?> </td>
			<td> <?php echo $data['telepon'] ; ?> </td>
			<td> <?php echo $data['username'] ; ?> </td>
			<td> <?php echo $data['status'] ; ?> </td>
			
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
	