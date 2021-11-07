<?php

include("connect.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM data WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: edit.php');
    } else {
        die("gagal menghapus...");
    }

?>