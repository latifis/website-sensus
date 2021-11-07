<?php
  session_start();
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
  if (empty($_SESSION['username']) AND (empty($_SESSION['password']))) {
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="img/icon.jpg">
    <title> Sensus Online | Home </title>
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
    <h1><strong> WHAT IS NEEDED TO SENSUS </strong></h1><br><br>

    <h4><i>First</i></h4>
    <img src="img/ktp.jpg" height="300" width="300s"><br><br>
    <p> KTP ? Apa itu KTP ? KTP merupakan singkatan dari Kartu Tanda Penduduk. Dimana biasanya didapat seorang ketika telah memiliki umur yang cukup. Seperti di Indonesia ini KTP didapatkan ketika umur suatu warga negara telah mencapai 17 tahun. Bentuk fisik KTP ini berupa suatu kartu berukuran kurang lebih 8cm x 5cm. Didalam kartu ini terrdapat identitas diri, seperti : NIK, nama, golongan darah dan lain sebagainnya. </p><br>

    <h4><i>Second</i></h4>
    <img src="img/kk.jpg" height="218" width="300"><br><br>
    <p> Yang selanjutnya adalah Kartu Keluarga. Kartu Keluarga atau yang biasa disingkat dengan KK merupakan kartu identitas keluarga yang memuat data tentang susunan, hubungan dan jumlah anggota keluarga. Kartu Keluarga ini wajib dimiliki oleh setiap keluarga. Kartu ini berisi data lengkap tentang identitas Kepala Keluarga dan anggota keluarganya. </p><br><br>

    <h4><i>Third</i></h4>
    <img src="img/buknik.jpg" height="218" width="300"><br><br>
    <p> Buku nikah.  Merupakan buku yang dibagikan oleh Kantor Urusan Agama (KUA) kepada pengantin di hari pernikahan merek adan diterbitkan oleh Kementerian Agama RI. Salah satu fungsi buku nikah adalah sebagai bukti bahwa pernikahan tersebut sah secara agama dan hukum. </p><br><br>

    <h4><i>Fourth</i></h4>
    <img src="img/doc.png" height="218" width="300"><br><br>
    <p> Yang terakhir adalah dokumen-dokumen lainnya. Seperti dokumen cerai/surat keterangan kematian, termasuk untuk anggota keluarga tambahan jika diperlukan. </p><br><br><br><br><br><br><br>

    <table>
      <tr>
        <h1><strong>Let's Start to Sensus</strong></h1><br>
      </tr>
      <tr style="text-align: center">
        <th><img src="img/kk.jpg"><br></th>
        <th><p style="color: #bfbfbf">aaaaaaaaaaaa</p></th>
        <th><img src="img/kk.jpg"><br></th>
        <th><p style="color: #bfbfbf">aaaaaaaaaaaa</p></th>
        <th><img src="img/kk.jpg"><br></th>
      </tr> 
      <tr style="text-align: center">
        <th><p>[mulai isikan data dan indentitas diri anda]</p></th>
        <th><p style="color: #bfbfbf">aaaaaaaaaaaa</p></th>
        <th><p>[lihat data yang telah diinputkan]</p></th>
        <th><p style="color: #bfbfbf">aaaaaaaaaaaa</p></th>
        <th><p>[ada kesalahan? klik dibawah]</p></th>
      </tr> 
      <tr style="text-align: center">
        <th><a href="inputdata.php">  <button type="button" class="btn btn-dark" href='inputdata.php'> Input </button> </a><br></th>
        <th><p style="color: #bfbfbf">aaaaaaaaaaaa</p></th>
        <th><a href="data.php">  <button type="button" class="btn btn-dark" href='data.php'> Lihat </button> </a><br></th>
        <th><p style="color: #bfbfbf">aaaaaaaaaaaa</p></th>
        <th><a href="edit.php">  <button type="button" class="btn btn-dark" href='edit.php'> Edit </button> </a><br></th>
      </tr>  
    </table><br><br><br><br><br><br><br><br>

    <h1><strong>Pesan Presiden Indonesia Mengenai Sensus RI 2020</strong></h1><br>
    <video controls width="600" height="300" src="vid/sensus.mp4" type="vidio/mp4"></video><br>
    <h6><i>source : youtube.com</i></h6><br>
    <div class="dropdown-divider"></div>
    <h6 style="color: grey">#MencatatIndonesia</h6>
    <h6 style="color: grey">Integrated Collection System &copy 2020 BADAN PUSAT STATISTIK</h6>
    <div class="dropdown-divider"></div>
  </center>

  <table style="background: black;" class="table">
   <tr>
      <th style="color: black">@akuaku</th>
      <th><img src="img/ig.jpg" height="20px" width="20px"> @sensus.online</th>
      <th><img src="img/twt.jpg" height="20px" width="20px"> @sensus.ofc</th>
      <th><h7 style="color: white; padding: 10pt;" align="center">&copy Copyright 2020</h7></th>
      <th><img src="img/wa.jpg" height="20px" width="20px"> 08123456789</th>
      <th><img src="img/mail.jpg" height="20px" width="20px"> sensus@mail.com</th>
    </tr>
  </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.sjsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>