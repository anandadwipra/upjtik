<?php
	include 'koneksi.php';
	$query = mysqli_query($mysqli, "SELECT * from tbl_pelanggan, tbl_mt, tbl_mt_signal, tbl_petugas");
while ($row=mysqli_fetch_array($query)) {

	// foreach ($rows as $row) {
	
	// 	var_dump($row);
	// 	echo $row[1];
	// }
?>
 

 <table border="1px">
 	<tr>
 		<th>ID</th>
		<th>Nama Pelanggan</th>
		<th>Status</th>
		<th>Identity</th>
		<th>SSID</th>
		<th>STX SRX</th>
		<th>Tanggal</th>
		<th>Setting</th>
 	</tr>

 	<tr>
	<td><?php echo $row['mt_id'] ?></td>
 	<td><?php echo $row['p_name'] ?></td>
 	<td></td>
 	<td><?php echo $row['identity'] ?></td>
 	<td><?php echo $row['ssid'] ?></td>
 	<td><?php echo $row['stx'].$row['srx'] ?></td>
	<td><?php echo $row['mt_tgl'] ?></td>
 	
<td><a href='edit_data.php?no="<?php echo $row['mt_id'] ?>"'>Edit</a> | 
<a href='formhapus.php?no="<?php echo $row['mt_id'] ?>"'>Hapus</a></td></tr>

</table>
<?php
}

?> 