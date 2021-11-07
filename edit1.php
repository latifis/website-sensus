<?php
  session_start();
  $username = $_SESSION['username'];
  if (empty($_SESSION['username'])) {
  header("location:main2.php?pesan=belum_login");
  }
?>

<?php

    include("connect.php");

    $id = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM data WHERE id='$id'");
    $data = mysqli_fetch_array($query);
    
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
    <title> Sensus Online | Edit Data </title>
  </head>
  <body style="background: #bfbfbf">
    
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">
        <img src="img/icon.jpg" height="40pt" width="40pt">
      </th>
      <th scope="col"><h4> S E N S U S K U </h4></th>
      </th><th scope="col"><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"></th><th scope="col"><th scope="col"><th scope="col">
      <th style="padding-right: 0"><a class="nav-item nav-link active" href="logout.php">Logout<span class="sr-only">(current)</span></a></th>
      <th style="padding-bottom: 17pt; padding-right: 1"><img src="img/user2.png" height="20pt" width="20pt"></th>
      <th style="padding-bottom: 17pt; padding-left: 0; padding-right: 0; color: grey"><?php echo $username ?></th>
      <th scope="col">
    </tr>
  </thead>
    </table><br>

  <center>
    <table class="tabelku">
      <tr>
        <h3 class="buat"> FORM EDIT DATA </h3>
      </tr>
    </table>
  </center>

  <center>
    <form action="edit2.php" method="POST" class="px-4 py-3">
       <table class="tabelku">
        <tr>
           <th><div class="form-group">
              <img src="img/orang1.jpg" style="width: 210px; height: 210px"><br>
              <center><input type="text" name="nik" placeholder="nik ktp"></center>
            </div></th>
            <th><p style="color: #bfbfbf">aaaaaaa</p></th>
            <th><div class="form-group">
              <img src="img/orang1.jpg" style="width: 210px; height: 210px"><br>
              <center><input type="text" name="nama" placeholder="nama lengkap"></center>
            </div><th>
            <th><p style="color: #bfbfbf">aaaaaaa</p></th>
            <th> <div class="form-group">
              <img src="img/orang1.jpg" style="width: 210px; height: 210px"><br>
              <center><input type="text" name="umur" placeholder="umur"></center>
            </div></th>
            <th><p style="color: #bfbfbf">aaaaaaa</p></th>
            <th><div class="form-group">
              <img src="img/orang1.jpg" style="width: 210px; height: 210px"><br>
              <center><input type="text" name="pekerjaan" placeholder="pekerjaan"></center>
            </div></th>
            <th><p style="color: #bfbfbf">aaaaaaa</p></th>
            <th><div class="form-group">
              <img src="img/orang1.jpg" style="width: 210px; height: 210px"><br>
              <center><input type="text" name="asal" placeholder="tempat asal"></center>
            </div></th><br>
            </tr>         
          </table><br>
          <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
          <table>
              <div class="form-check">
                <label class="form-check-label" for="dropdownCheck">
                  tekan tombol dibawah untuk melanjutkan
                </label>
              </div>
            <th><button type="submit" class="btn btn-dark">Input</button><th>
          </table>
      </form>
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