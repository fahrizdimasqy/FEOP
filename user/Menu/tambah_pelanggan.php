<?php
$id = $_GET['id_pelanggan'];
$query = mysqli_query($koneksi, "select * from pelanggan where IDPelanggan='$id'");
$data = mysqli_fetch_array($query);
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		Pelanggan
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-8">
<form method="post">

  <div class="form-group">
    <label>No meter</label>
    <input type="text" class="form-control" name="meter" placeholder="No Meter" value="<?php echo $data['Kodetarif'] ?>">
  </div>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama">
  </div>

  <div class="form-group">
    <label>Alamat </label>
    <textarea class="form-control" placeholder="Alamat "name="alamat"></textarea>
</div>

  <div class="form-group">
    <label>Kode Tarif</label>
    <input class="form-control" name="kode" placeholder="Kodetarif" type="text" value="<?php echo $data['Kodetarif'] ?>">

  </div>
  	<!--<div class="form-group">
    <label>Akses User</label>
    <input type="text" readonly="readonly" class="form-control" name="username" value="Kasir">
  </div>
-->
  <button name="simpan" type="submit"  class="btn btn-success">Simpan</button>
  <a class="btn btn-danger" href="?menu=data_pelanggan">Kembali</a>

  <?php
  	$no = 1;
    if (isset($_POST ['simpan'])) {
      $meter = $_POST['meter'];
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $kode = $_POST['kode'];
    
      $query="INSERT into pelanggan (Nometer,Nama,Alamat,Kodetarif) values('$meter','$nama','$alamat','$kode') ";
        mysqli_query($koneksi,$query);
        ?>
        <script type="text/javascript">
          alert('berhasil menambah pelanggan');
          document.location.href="?menu=data_pelanggan";
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