<?php
  session_start();
  $username = $_SESSION['username'];
  if (empty($_SESSION['username'])) {
  header("location:main2.php?pesan=belum_login");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="icon" href="img/icon.jpg">
    <title> Sensus Online | Registration </title>
  </head>
  <body background="img/wal12.jpg" style="background-size: 100%; background-repeat: no-repeat;">
    
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><h4 align="center"> S E N S U S . O N L I N E </h4></th>
    </tr>
  </thead>
    </table><br>

  <center>
    <table class="tabelku">
      <tr>
        <img src="img/tqb.gif" width="250pt" height="250pt">
      </tr>
    </table>
  </center><br>

  <center>
    <table>
      <tr>
        <p style="color: black"><?php echo $username ?>'s Data Successfully Uploaded </p>
        <p style="color: black"> Process Completely </p>
      </tr>
    </table>
  </center>

  <center>
    <table>
      <tr>
        <th><a href="home.php">  <button type="button" class="btn btn-dark" href='home.php'> Home Page </button> </a></th>
        <th style="padding-top: 8pt; padding-right: 15pt; padding-left: 15pt"><p style="color: black"> or </p></th>
        <th><a href="inputdata.php">  <button type="button" class="btn btn-dark" href='inputdata.php'> Tambah Data </button> </a></th>
      </tr>
    </table>
  </center>

  


<table class="footer">
    <th><h6 style="color: white" align="center">Integrated Collection System &copy 2020 BADAN PUSAT STATISTIK</h6></th> 
  </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.sjsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>