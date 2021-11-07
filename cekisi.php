<?php
	include "config.php";

	$id_login = $_POST['id.login'];
	$id_data = $_POST['id.data'];

	$query = mysqli_query($sambungan, "SELECT * FROM data WHERE id ='$id_data' && '$id_data' ='$id_login'") or die(mysqli_error($sambungan));

	$cek = mysqli_num_rows($query);

	if($cek > 0){
		
		$nik=$_POST['nik'];
		$nama=$_POST['nama'];
		$umur=$_POST['umur'];
		$pekerjaan=$_POST['pekerjaan'];
		$asal=$_POST['asal'];

		if(!empty($nik)){
			header("Location:inputdata.php?pesan=gagal");
		}
		else if (!empty($nama)){
			header("Location:inputdata.php?pesan=gagal");
		}
		else if (!empty($umur)){
			header("Location:inputdata.php?pesan=gagal");
		}
		else if (!empty($pekerjaan)){
			header("Location:inputdata.php?pesan=gagal");
		}
		else if (!empty($asal)){
			header("Location:inputdata.php?pesan=gagal");
		}
		else{
			header("Location:inputberhasil.php")
		}
	}
?>

