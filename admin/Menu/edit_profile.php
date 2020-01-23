<div class="panel panel-primary">
	<div class="panel-heading">
		Rubah Informasi Tentang Anda
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-8">
<form method="post">
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $profil['nama']; ?>">
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat"><?php echo $profil['alamat']; ?></textarea>
</div>

  <div class="form-group">
    <label>Telepon</label>
    <input type="number" class="form-control" name="telp" value="<?php echo $profil['telepon']; ?>">
  </div>

  	<!--<div class="form-group">
    <label>Akses User</label>
    <input type="text" readonly="readonly" class="form-control" name="username" value="Kasir">
  </div>
-->
  <button type="submit" class="btn btn-success" name="edit_profil">Simpan</button>
  <a class="btn btn-sm btn-danger" href="?menu=profile">Batal </a>

  	<?php
  	    if (isset($_POST['edit_profil'])) {
  		$nama = $_POST['nama'];
  		$alamat = $_POST['alamat'];
  		$telp = $_POST['telp'];
  		mysqli_query($koneksi, "UPDATE tb_kasir set nama='$nama', alamat='$alamat', telepon='$telp' WHERE id_kasir='$profil[id_kasir]'");
  		?>
  			<script type="text/javascript">
  				alert('perubahan berhasil disimpan');document.location.href="?menu=profile"; 
  	</script>
  	<?php
  	}
  	?>

</form> 
</div>
</div>
</div>
</div>
</div>
</div>
</div>