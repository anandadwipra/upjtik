<?php 

include 'koneksidb.php';
	
	$NamaAP = $_POST['NamaAP'];
		
	$Identity = $_POST['Identity'];

	$SSID = $_POST['SSID'];

	$Stx = $_POST['Stx'];

	$Srx = $_POST['Srx'];

	$Petugas = $_POST['Petugas'];

	$Tanggal = $_POST['Tanggal'];

	$Sewa = $_POST['Sewa'];


switch ($_GET['act']) {
	case "tambah_data_upjtik":


mysqli_query($mysqli, "INSERT into upjtik set
			NamaAP='".$NamaAP."',
			Identity='".$Identity."',
			SSID='".$SSID."',
			Stx='".$Stx."',
			Srx='".$Srx."',
			Petugas='".$Petugas."',
			Tanggal='".$Tanggal."',
			Sewa='".$Sewa."'");
header("location:index.php?view=lihat_data_upjtik");
		break;
	
	case "edit_data_upjtik":


mysqli_query($mysqli, "INSERT into upjtik set
			NamaAP='".$NamaAP."',
			Identity='".$Identity."',
			SSID='".$SSID."',
			Stx='".$Stx."',
			Srx='".$Srx."',
			Petugas='".$Petugas."',
			Tanggal='".$Tanggal."',
			Sewa='".$Sewa."'");
header("location:index.php?view=lihat_data_upjtik");
		break;

	default:
		// code...
		break;
}

 ?>