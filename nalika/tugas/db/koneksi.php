<?php
$svname="localhost";
$db="db_upj";
$user="admin";
$pass="kadalkesit";

$mysqli=mysqli_connect($svname, $user, $pass, $db);
if (!$mysqli){
die("<br>Koneksi ke databases gagal. <br>" .mysqli_connect_error());
}
?>