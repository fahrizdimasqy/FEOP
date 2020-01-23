<?php
include 'inc/koneksi.php';
if (isset ($_POST['login'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$query =mysql_query("select * from tb_kasir");
	$cek = mysql_num_rows($query);
	$data = mysql_fetch_array($query);
	//while ($data = mysql_fetch_array($query))
	//{
	if ($cek < 1 ) {
		?>
		<div class="alert alert-danger">
      Maaf Username Atau Password tidak Cocok
    </div>

	<?php
	}
  else {
    if($data['status']=="nonaktif") {
      echo "Anda di larang login karena username dan Password belum aktif";
    }
    else if($data['status']=="aktif") {
      echo "Anda Boleh login";
    }
   }
  }
?> 
