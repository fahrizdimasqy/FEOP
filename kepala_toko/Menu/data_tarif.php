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
	<h1 class="page-header">Data Tarif</h1>

		<ol class="breadcrumb">
			<li class="active">
				 <span class="glyphicon glyphicon-user">
           </span>
				<i>  Tarif </i>

			</li>
		</ol>
	<!--<div class="panel panel-primary">
			<div class="panel-heading">
				<h3> data pegawai </h3>
			</div>
			</div>
		-->
		<?php		
		$qjumlah = mysqli_query($koneksi,"select * from tarif");
		$jumlah =mysqli_num_rows($qjumlah);
		?>



	<a href=""class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-refresh"></span> refresh</a>
				 </td>
		
</div>
</div>
</br>
<div class="panel panel-primary">
                        <div class="panel-heading">
                          Tabel Tarif
                        </div>

                        <div class="panel-body">
 <div class="table-responsive">
       <table class="table table-hover data-table table-striped tablesorter">

		<thead>
				<tr>
					<th> No </th>
					<th> Kode Tarif </th>
					<th> Daya </th>
					<th> Tarif perkwh </th>
					<th> Opsi </th>
				</tr>

				</thead>
				<tbody>	
		<?php
		$no = 1;
				$query =  mysqli_query($koneksi,"select * from tarif");
			



		while ($data = mysqli_fetch_array($query)) {
	
		?>
		<tr>
			<td> <?php echo $no++; ?> </td>
			<td> <?php echo $data['kodetarif'] ; ?> </td>
			<td> <?php echo $data['Daya'] ; ?> </td>
			<td> <?php echo $data['Tarifperkwh'] ; ?> </td>
			 
			<td>
			<a onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_tarif&id_tarif=<?php echo $data['IDTarif']; ?>" title="Hapus"> <span class="glyphicon glyphicon-trash" aria-hidden="true"> </span> </a>
			<a title="Edit" href="?menu=edit_tarif&id_tarif=<?php echo $data['IDTarif']; ?>"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> </a>

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
	