<?php
include 'inc/koneksi.php';
		$no = 1;
		
		$query = mysqli_query($koneksi,"select * from tarif");
		



		while ($data = mysqli_fetch_array($query)) {
	
		?>
		<tr>
			
			<td> <?php echo "daya = ". $data['Daya'] ; ?> </td>
		</br>
			<td> <?php echo"Tarif perkwh = ". $data['Tarifperkwh'] ; ?> </td>
</br>
			<td> <?php echo"total bayar =  ". $hasil=$data['Daya']*$data['Tarifperkwh']; ?> </td>
		
	</tr>
<?php
}
?>
