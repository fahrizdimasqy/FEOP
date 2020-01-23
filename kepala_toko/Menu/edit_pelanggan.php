<?php
$id = $_GET['id_pelanggan'];
$query = mysqli_query($koneksi, "select * from pelanggan where IDPelanggan='$id'");
$data = mysqli_fetch_array($query);
?>
<div class="panel panel-primary">
  <div class="panel-heading">
    Edit Pelanggan
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-8">
<form method="post">

  <div class="form-group">
    <label>No Meter</label>
    <input type="text" class="form-control" name="meter" placeholder="No Meter" value="<?php echo $data['Nometer'];?>">
  </div>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama"value="<?php echo $data['Nama'];?>">
  </div>

  <div class="form-group">
    <label>Alamat </label>
    <textarea class="form-control" name="alamat" placeholder="alamat"><?php echo $data['Alamat'];?></textarea>
</div>

  <div class="form-group">
    <label>Kode Tarif</label>
    <input class="form-control" name="kode" placeholder="Kodetarif" type="text"value="<?php echo $data['Kodetarif'];?>">
  </div>
    <!--<div class="form-group">
    <label>Akses User</label>
    <input type="text" readonly="readonly" class="form-control" name="username" value="Kasir">
  </div>
-->
  <button name="simpan" type="submit"  class="btn btn-success">Edit </button>
  <a class="btn btn-danger" href="?menu=data_pelanggan">Kembali</a>

  <?php
    $no = 1;
    if (isset($_POST ['simpan'])) {
      $meter = $_POST['meter'];
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $kode = $_POST['kode'];
    
      $query="UPDATE pelanggan set Nometer='$meter', Nama='$nama',Alamat='$alamat',Kodetarif='$kode' where IDPelanggan='$id' ";
        mysqli_query ($koneksi,$query);
        ?>
        <script type="text/javascript">
          alert('berhasil Diedit');
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