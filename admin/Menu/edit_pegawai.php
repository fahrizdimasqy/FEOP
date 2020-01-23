<body>
<?php
$id = $_GET['id_pegawai'];
$query = mysqli_query($koneksi, "select * from tb_kasir where id_kasir='$id' ");
$data = mysqli_fetch_array($query);
?>

<div class="panel panel-primary">
	<div class="panel-heading">
		Edit Pegawai
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-8">
<form method="post">
  <div class="form-group">
    <label>Nama Pegawai</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama pegawai" value="<?php echo $data['nama'];?>">
  </div>

  <div class="form-group">
    <label>Alamat Pegawai</label>
    <textarea name="alamat" class="form-control"><?php echo $data['alamat'];?></textarea>
</div>

  <div class="form-group">
    <label>Telepon</label>
    <input class="form-control" name="telpon" placeholder="Nomer Telpon" type="text" value="<?php echo $data['telepon'];?>">
  </div>

 
  	<div class="form-group">
    <label for="exampleInputEmail1">Status User</label>
    <select name="status" class="form-control">   
    <option <?php if ($data['status']=="aktif"){echo "selected";} ?> class="form-control">aktif</option>
    <option <?php if ($data['status']=="nonaktif"){echo "selected";} ?> class="form-control">nonaktif</option>
    </select>
  </div>


<div class="form-group">
    <label for="exampleInputEmail1">Status User</label>
    <select name="akses" class="form-control">   
    <option <?php if ($data['akses']=="admin"){echo "selected";} ?> class="form-control">admin</option>
    <option <?php if ($data['akses']=="kasir"){echo "selected";} ?> class="form-control">kasir</option>
    <option <?php if ($data['akses']=="kepala_toko"){echo "selected";} ?> class="form-control">kepala_toko</option>
    </select>
  </div>

  	
  	<!--<div class="form-group">
    <label>Akses User</label>
    <input type="text" readonly="readonly" class="form-control" name="username" value="Kasir">
  </div>
-->
  <button name="simpan" type="submit"  class="btn btn-success">Simpan</button>
  <a class="btn btn-danger" href="?menu=data_pegawai">Kembali</a>

  <?php
    if (isset($_POST ['simpan'])) {
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $telpon = $_POST['telpon'];
      $status = $_POST['status'];
      $akses = $_POST['akses'];
      # code...
      $query="UPDATE tb_kasir set nama='$nama',alamat='$alamat',telepon='$telpon',status='$status', akses='$akses' where id_kasir='$id' ";
        mysqli_query($koneksi,$query);
        ?>
        <script type="text/javascript">
          alert('berhasil disimpan');
          document.location.href="?menu=data_pegawai";
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
</body>