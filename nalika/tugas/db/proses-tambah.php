<?php 

include 'koneksi.php';
	
	if (isset($_POST['submit'])){

	$pe_name = $_POST['pe_name'];

	$mt_tgl = $_POST['mt_tgl'];
		
	$identity = $_POST['identity'];

	$ssid = $_POST['ssid'];

	$ip = $_POST['ip'];

	$mt_name_ap = $_POST['mt_name_ap'];

	$stx = $_POST['stx'];

	$srx = $_POST['srx'];

	$ccq = $_POST['ccq'];

	$protocol = $_POST['protocol'];

	$band = $_POST['band'];

	$frequency = $_POST['frequency'];

	$mt_comment = $_POST['mt_comment'];

	$mt_tgl = $_POST['mt_tgl'];

	$query1= "INSERT into tbl_petugas set
			pe_name='".$pe_name."',
			mt_tgl='".$mt_tgl."'";

	$query2= "INSERT into tbl_mt set
			identity='".$identity."',
			ssid='".$ssid."',
			ip='".$ip."',
			mt_name_ap='".$mt_name_ap."',
			mt_comment='".$mt_comment."',
			mt_tgl='".$mt_tgl."'";

	$query3= "INSERT into tbl_mt_signal set
			stx='".$stx."',
			srx='".$srx."',
			ccq='".$ccq."',
			protocol='".$protocol."',
			band='".$band."',
			frequency='".$frequency."'";

if (mysqli_query($mysqli, $query1) && mysqli_query($mysqli, $query2) && mysqli_query($mysqli, $query3)) {
	echo "Data telah sukses dimasukkan ke dalam database. ";
	echo "<a href='tambah.php'>Kembali</a>";
}
else{
	echo "Error : "."<br>".$query1."<br>".$query2."<br>".$query3."<br><br>";
	echo mysqli_error($mysqli);
	echo "<a href='tambah.php'>Kembali</a>";

}


}		

 ?>