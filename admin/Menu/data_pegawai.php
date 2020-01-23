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
		$qjumlah = mysqli_query($koneksi,"select * from tb_kasir");
		$jumlah =mysqli_num_rows($qjumlah);
		?>
		<a class="btn btn-sm btn-primary" href="?menu=tambah_pegawai"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>

		<button class="btn btn-sm btn-default">Jumlah Data <span class="badge"><?php echo $jumlah; ?></span></button>
					
					
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
					<th> Akses </th>
					<th> Opsi </th>

				</tr>

				</thead>
				<tbody>	
		<?php
		$no = 1;
				$query = mysqli_query($koneksi,"select * from tb_kasir");
		while ($data = mysqli_fetch_array($query)) {
	
		?>
		<tr>
			<td> <?php echo $no++; ?> </td>
			<td> <?php echo $data['nama'] ; ?> </td>
			<td> <?php echo $data['alamat'] ; ?> </td>
			<td> <?php echo $data['telepon'] ; ?> </td>
			<td> <?php echo $data['username'] ; ?> </td>
			<td> <?php echo $data['status'] ; ?> </td>
			<td> <?php echo $data['akses'] ; ?> </td>
			<td>
			<a  class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin menghapusnya?')" href="?menu=hapus_pegawai&id_pegawai=<?php echo $data['id_kasir']; ?>" title="Hapus">  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</a>

			
			<a  class="btn btn-sm btn-warning" title="Edit" href="?menu=edit_pegawai&id_pegawai=<?php echo $data['id_kasir']; ?>"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> Edit </a>

		</td>
		</tr>
		
		<?php
		}
		?>
		</tbody>
		</table>
	</div>
</div>
</div>		
</div>
<?php		
		$qjumlah = mysqli_query($koneksi,"select * from tb_kasir WHERE akses='admin' " );
		$jumlahadmin =mysqli_num_rows($qjumlah);
		?>
		<?php		
		$qjumlah = mysqli_query($koneksi,"select * from tb_kasir WHERE akses='kasir' " );
		$jumlahkasir =mysqli_num_rows($qjumlah);
		?>
		<?php		
		$qjumlah = mysqli_query($koneksi,"select * from tb_kasir WHERE akses='kepaka_toko' " );
		$jumlahkepala =mysqli_num_rows($qjumlah);
		?>

 		
		  <div class="container-fluid">
		  <div class="col-md-3"></div>
      <div class="row col-md-8">
		            <canvas id="myChart"></canvas>
    
	</div>
	</div>
	<!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          //labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          labels: ["Total admin", "Total kasir", "Total kepala toko"],
		  datasets: [{
            //data:  [<?php echo "15339, 21345, 18483, 24003, 23489, 24092, 12034";?>],
            data:  [<?php echo "$jumlahadmin, $jumlahkasir, $jumlahkepala";?>],
			lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>

	</body>		
	</html>
	