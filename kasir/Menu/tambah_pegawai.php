<div class="panel panel-primary">
	<div class="panel-heading">
		Tambah Pegawai
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-8">
<form method="post">
  <div class="form-group">
    <label>Nama Pegawai</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama pegawai">
  </div>

  <div class="form-group">
    <label>Alamat Pegawai</label>
    <textarea class="form-control" placeholder="Alamat Pegawai (Kasir)"name="alamat"></textarea>
</div>

  <div class="form-group">
    <label>Telepon</label>
    <input class="form-control" name="telpon" placeholder="Nomer Telpon" type="text">
  </div>

 
  	<div class="form-group">
    <label>Status User</label>
    <select name="status" class="form-control" name="status" placeholder="Status User">
    <option class="form-control">Aktif</option>
    	<option class="form-control">Tidak Aktif</option>
    </select>
  </div>

  	<div class="form-group">
    <label>User Untuk Pegawai</label>
    <input type="text" class="form-control" name="username" placeholder="Username">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
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
      $username = $_POST['username'];
      $password = $_POST['password'];
      $akses = "kasir";
      # code...
      $query="INSERT into tb_kasir (nama,alamat,telepon,status,username,password, akses) values('$nama','$alamat','$telpon','$status','$username','$password','$akses') ";
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