<?php

include("connect.php");

    $id = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM data WHERE id='$id'");
    $data = mysqli_fetch_array($query);
    
    $id1 = $data['id'];
    $nik1 = $data['nik'];
    $nama1 = $data['nama'];
    $umur1 = $data['umur'];
    $pekerjaan1 = $data['pekerjaan'];
    $asal1 = $data['asal'];


    if (empty($nik1) and empty($nama1) and empty($umur1) and empty($pekerjaan1) and empty($asal1) and '$id'== '$id1') {

        $id = $_POST['id'];
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $pekerjaan = $_POST['pekerjaan'];
        $asal = $_POST['asal'];

        $query = mysqli_query($db, "insert into data values('', '$nik', '$nama', '$umur', '$pekerjaan', '$asal')");

        if ($query) {
            header("location:inputberhasil.php");
        } 
        else {
             echo "Proses input gagal!";
        }
    }
    else {
        header("location: dataisi.php");
    }

    

    
?>