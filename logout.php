<?php

session_start();
session_destroy();
header("location:main2.php?pesan=logout");

?>