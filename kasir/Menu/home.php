<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	
  <h4 align="center"> Cek Tagihan dan Bayar Listrik </h4>
<div class="col-xs-4 col-md-12">
</div>
</br>
<?php		
		$qjumlah = mysqli_query($koneksi,"select * from Pelanggan " );
		$jumlah =mysqli_num_rows($qjumlah);
		?>
	<span class="glyphicon glyphicon-flash">
            </span>
    <form method="post">
			<div class="input-group">	
				<input name="inputan" type="text" class="form-control" placeholder="Cari Pegawai..">
				 <span class="input-group-btn">
					<input name="cari" class="btn btn-default" value="Cari" type="submit">
					</span>
				</div>
			</form>
		</div>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->


</body>
</html>