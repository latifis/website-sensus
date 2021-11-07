<?php

include("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($db, "insert into login values('', '$username', '$password')");

    if ($query) {
	header("location:regisberhasil.php");
        } 
    else {
	echo "Proses input gagal!";
        }
?>