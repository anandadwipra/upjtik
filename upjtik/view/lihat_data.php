<?php 

include 'koneksidb.php';
$query = mysqli_query($mysqli, "SELECT * from upjtik");
 ?>

 <table border="1">
 	<tr>
 		<th>No</th>
		<th>Nama AP</th>
		<th>Identity</th>
		<th>SSID</th>
		<th> TX / RX </th>
		<th>Petugas</th>
		<th>Tanggal</th>
		<th>Sewa</th>
		<th>Edit</th>
		<th>Status</th>
 	</tr>
 <?php 
while ($row=mysqli_fetch_array($query)) {
	$total= $row['Stx'];

	if ($total <= 60) {
	    	$status = '<font style="color:green">Diharapkan</font>';
	    } else {
	    	$status = '<font style="color:red">Tidak Diharapkan</font>';
	    }

	echo '
<tr>
	<td>'.$row['no'].'</td>
 	<td>'.$row['NamaAP'].'</td>
 	<td>'.$row['Identity'].'</td>
 	<td>'.$row['SSID'].'</td>
 	<td>'.$row['Stx'].'  /  '.$row['Srx'].'</td>
 	<td>'.$row['Petugas'].'</td>
	<td>'.$row['Tanggal'].'</td>
	<td>'.$row['Sewa'].'</td>
 	<td>'.$status.'</td>';
 	
echo 	"<td><a href='edit_data.php?no=".$row['no']."'>Edit</a> | ";
echo 	"<a href='formhapus.php?no=".$row['no']."'>Hapus</a></td></tr>";
}  ?>
 	
 </table>
