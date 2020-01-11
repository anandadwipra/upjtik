 <?php

include 'koneksidb.php';

// kalau tidak ada id di query string
if( !isset($_GET['no']) ){
    header('Location:lihat_data.php');
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

    <form action="simpan.php?act=edit_data_upjtik" method="POST">

       <table border="1px" > 
        <br><br><br><br>
        <tr rowspan="3">Form Lamaran Kerja :3 <br><br>  
            <td>Nama</td>
            <td> : </td>
        <td><input type="text" name="namaAP" value="<?php echo $data['namaAP'] ?>" ></td>
        </tr>
            <td>Identity</td>
            <td> : </td>
        <td><input type="text" name="Identity" value="<?php echo $data['Identity'] ?>" ></td>
        </tr>
            <td>SSID</td>
            <td> : </td>
        <td><input type="text" name="SSID" value="<?php echo $data['SSID'] ?>" ></td>
        </tr>
            <td>Stx</td>
            <td> : </td>
        <td><input type="text" name="Stx"value="<?php echo $data['Stx'] ?>" ></td>
        </tr>

        </tr>
            <td>Srx</td>
            <td> : </td>
        <td><input type="text" name="Srx"value="<?php echo $data['Srx'] ?>" ></td>
        </tr>
        
        </tr>
            <td>Petugas</td>
            <td> : </td>
        <td><input type="text" name="Petugas"value="<?php echo $data['Petugas'] ?>" ></td>
        </tr>

        </tr>
            <td>Tanggal</td>
            <td> : </td>
        <td><input type="date" name="Tanggal"value="<?php echo $data['Tanggal'] ?>" ></td>
        </tr>

        <td>Sewa</td>
            <td> : </td>
        <td><input type="date" name="Sewa"value="<?php echo $data['Sewa'] ?>" ></td>
        </tr>

        <tr>
        <td><input type="button" value="Lihat DB" onclick="window.location.href='tampil.php'" ></td>
        <td></td>           
        <td colspan="3"><input type="submit" value="Edit" name="simpan" ></td>
        </tr>

    </form>