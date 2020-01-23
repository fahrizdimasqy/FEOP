<?php
$id = $_GET['id_tarif'];
$query = mysqli_query($koneksi, "select * from tarif where IDTarif='$id'");
$data = mysqli_fetch_array($query);
?>
<div class="panel panel-primary">
  <div class="panel-heading">
    Tarif
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-8">
<form method="post">

  <div class="form-group">
    <label>Kode Tarif</label>
    <input type="text" class="form-control" name="kode" placeholder="kode">
  </div>


  <div class="form-group">
    <label>Daya</label>
    <input type="text" class="form-control" name="daya" placeholder="daya">
  </div>

  <div class="form-group">
    <label>Tarif perkwh </label>
    <textarea class="form-control" placeholder="Alamat "name="tarifk"></textarea>
</div>
    <!--<div class="form-group">
    <label>Akses User</label>
    <input type="text" readonly="readonly" class="form-control" name="username" value="Kasir">
  </div>
-->
  <button name="simpan" type="submit"  class="btn btn-success">Simpan</button>
  <a class="btn btn-danger" href="?menu=data_tarif">Kembali</a>

  <?php
    $no = 1;
    if (isset($_POST ['simpan'])) {
      $kode = $_POST['kode'];
      $daya = $_POST['daya'];
      $tarifk = $_POST['tarifk'];
      $query="INSERT into tarif (kodetarif,Daya,Tarifperkwh) values('$kode','$daya','$tarifk')";
        mysqli_query($koneksi,$query);
        ?>
        <script type="text/javascript">
          alert('berhasil menambah tarif');
          document.location.href="?menu=data_tarif";
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