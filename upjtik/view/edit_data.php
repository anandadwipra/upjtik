<?php

include("koneksidb.php");

// kalau tidak ada id di query string
if( !isset($_GET['no']) ){
    header('Location: lihat_data.php');
}

//ambil id dari query string
$no = $_GET['no'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM form WHERE no=$no";
$query = mysqli_query($mysqli, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Lamaran Kerja</title>
</head>

<body>
    <form action="simpan.php?act=
    edit_data_upjtik" method="POST">

       <table border="0px" > 
        <br><br><br><br>
        <tr rowspan="3">Form Lamaran Kerja :3 <br><br>  
            <td>Nomor</td>
        <td> : </td>
        <td><input type="text" name="no" value="<?php echo $data['no'] ?>" ></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> : </td>
        <td><input type="text" name="name" value="<?php echo $data['name'] ?>" ></td>
        </tr>
            <td>Kota</td>
            <td> : </td>
        <td><input type="text" name="kota" value="<?php echo $data['kota'] ?>" ></td>
        </tr>
            <td>Provinsi</td>
            <td> : </td>
        <td><input type="text" name="provinsi" value="<?php echo $data['provinsi'] ?>" ></td>
        </tr>
            <td>Negara</td>
            <td> : </td>
        <td><input type="text" name="negara"value="<?php echo $data['negara'] ?>" ></td>
        </tr>

        <tr>
        <td><input type="hidden" name="id" value="<?php echo $data['id'] ?>" /></td>
        </tr>

        <tr>
        <td><input type="button" value="Lihat DB" onclick="window.location.href='tampil.php'" /></td>
        <td></td>           
        <td colspan="3"><input type="submit" value="Edit" name="simpan" ></td>
        </tr>

    </form>

    </body>
</html>