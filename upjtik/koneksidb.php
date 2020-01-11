<?php
$svname="localhost";
$db="db_upjtik";
$user="admin";
$pass="kadalkesit";

$mysqli=mysqli_connect($svname, $user, $pass, $db);
if (!$mysqli){
die("<br>Koneksi ke databases gagal. <br>" .mysqli_connect_error());
}
echo "<br>Koneksi ke databases berhasil. <br>";
echo date("l, d-M-Y")."<br><br>";

?>