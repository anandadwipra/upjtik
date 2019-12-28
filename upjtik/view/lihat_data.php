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
		<th>Status</th>
		<th>Edit</th>
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
 	<td>'.$status.'</td>';
 	
echo 	"<td><a href='formedit.php?id=".$row['no']."'>Edit</a> | ";
echo 	"<a href='formhapus.php?id=".$row['no']."'>Hapus</a></td></tr>";
}  ?>
 	
 </table>
