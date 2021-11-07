<?php

include("connect.php");

    $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $pekerjaan = $_POST['pekerjaan'];
    $asal = $_POST['asal'];

    $sql = "UPDATE data SET nik='$nik', nama='$nama', umur='$umur', pekerjaan='$pekerjaan', asal='$asal' WHERE id=$id";
    $query = mysqli_query($db, $sql);
   
    if( $query ) {
        header('Location: edit.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }

?>