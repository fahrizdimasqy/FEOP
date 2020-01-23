<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="row">
		<!--<h3>ini halaman profile</h3> -->
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3>Profile Admin</h3>
				</div>
				<div class="panel-body">
					<table class="table" cellpadding="8" cellspacing="8">
				<tr>
					<th> Nama </th>	<td>:</td><td><?php echo $profil['nama']; ?> </td>
					</tr>

					<tr>
						<th> Alamat </th>	<td>:</td><td> <?php echo $profil['alamat']; ?></td>
							</tr>

							<tr>
								<th> Telpon </th>	<td>:</td><td> <?php echo $profil['telepon']; ?></td>
							</tr>
					</table>

					<a class="btn btn-sm btn-primary" href="?menu=edit_profile"> Edit Data Saya</a>
				</div>
			</div>
		</div>
			<div class="col-md-6">
				<div class="panel panel-info">
				<div class="panel-heading">
					<h3>Edit Username Atau Password</h3>
				</div>
				<div class="panel-body">
					<fieldset>
							<legend>
								Edit Username
							</legend>
<form class="form" method="post">
	<div class="input-group">
  	<span class="input-group-addon" id="		basic-addon1">User saat ini</span>
  	<input type="text" readonly class="form-control" value="<?php echo $profil['username'];?>" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
	</div>
		</br>
		<div class="input-group">
  	<span class="input-group-addon" id="		basic-addon1">User Baru</span>
  	<input type="text" name="userbaru" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
	</div>
		</br>
		<div class="input-group">
  	<span class="input-group-addon" id="" d="		basic-addon1">Password</span>
  	<input type="password" name="pass" class="form-control" placeholder="Password Anda Saat Ini" aria-describedby="basic-addon1">
	</div>
		</br>
	<input type="submit" name="edit_user" value="Simpan" class="btn btn-success">
		</form>
		<!-- fungsi edit user-->
	<?php
		if (isset($_POST['edit_user'])) {
			# code...
		$userbaru = $_POST['userbaru'];
		$pass = $_POST['pass'];
		if (md5($pass)==$profil['password']) {
			mysqli_query($koneksi, "UPDATE tb_kasir SET username='$userbaru' WHERE id_kasir='$profil[id_kasir] '");
			?>
			<script type="text/javascript">
				alert('Username berhasil dirubah! silahkan login kembali');
					document.location.href="../inc/keluar.php";
			</script>
			<?php
				}else{
					echo "Password Anda Salah!";
				}
			}
		?>
		</fieldset>
			</br>
			<fieldset>
				<legend>
				Edit Password
				  </legend>
<form class="form" method="post">
	<div class="input-group">
  	<span class="input-group-addon" id="		basic-addon1">Password Baru</span>
  	<input type="password" name="pass1" class="form-control" placeholder="Password Baru" aria-describedby="basic-addon1">
	</div>

		</br>

		<div class="input-group">
  	<span class="input-group-addon" id="		basic-addon1">Ketik Ulang Password Baru</span>
  	<input type="password" name="pass2" class="form-control" placeholder="Ketik Ulang Password" aria-describedby="basic-addon1">
	</div>
	
		</br>
	
		<div class="input-group">
  	<span class="input-group-addon" id="		basic-addon1">Password Anda Saat Ini</span>
  	<input type="password" name="pass_awal" class="form-control" placeholder="Password Saat ini" aria-describedby="basic-addon1">
	</div>
		</br>
	<input type="submit" name="edit_password" value="Simpan" class="btn btn-success">
		</form>
		<?php
		if (isset($_POST['edit_password'])) {
			# code...
		$pass1 = md5($_POST['pass1']);
		$pass2 = md5($_POST['pass2']);
		$pass = $_POST['pass_awal'];
		if ($pass1 != $pass2) {
			# code...
			echo "pasword konfirmasi tidak cocok";
		}
		else{
			if (md5($pass)==$profil['password']){
			mysqli_query($koneksi, "UPDATE tb_kasir SET password='$pass1' WHERE id_kasir='$profil[id_kasir] '");
			?>
			<script type="text/javascript">
				alert('Password berhasil dirubah! silahkan login kembali');
					document.location.href="../inc/keluar.php";
			</script>
			<?php
				}else{
					echo "Password Anda Salah!";
				}
				}
				}
			
		?>
		
		</fieldset>

		</div>
	</div>
</body>		
</html>