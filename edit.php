<?php
  session_start();
  $username = $_SESSION['username'];
  if (empty($_SESSION['username'])) {
  header("location:main2.php?pesan=belum_login");
  }
?>

<?php include("connect.php"); ?>

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


   <div class="fixed-header"><h3 align="center"> Edit Data Sensus 2020</h3> </div> <br>
<div class="container isi">
<table class="table table-hover">

  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Pekerjaan</th>
      <th scope="col">Asal</th>
      <th scope="col">Edit/Hapus</th>
    </tr>
  </thead>
  <tbody>
        <?php
        $sql = "SELECT * FROM data ";
        $query = mysqli_query($db, $sql);
        $no=1;

        while ($data = mysqli_fetch_array($query)) { ?>
            <tbody> 
                <tr>
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $data['nik']; ?> </td>
                    <td> <?php echo $data['nama']; ?> </td>
                    <td> <?php echo $data['umur']; ?> </td>
                    <td> <?php echo $data['pekerjaan']; ?> </td>
                    <td> <?php echo $data['asal']; ?> </td>
                    <?php
                    echo "<td>";
                    echo "<button><a href='edit1.php?id=".$data['id']."'>Edit</a> </button> | ";
                    echo "<button><a href='hapus.php?id=".$data['id']."'>Hapus</a></button>";
                    echo "</td>";
                    echo "</tr>";?>
                    <?php $no++; ?>
       <?php } ?>
  </tbody>
</table>
</div>
<footer class="fixed-footer"> <center> <a href="form.php">  <button type="button" class="btn btn-dark" href='form.php'>Tambah</button> </a>
<a href="login.php">  <button type="button" class="btn btn-dark" href='login.php'>Logout</button> </a>
</center></footer><br><br><br><br>


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