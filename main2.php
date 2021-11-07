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
    <title> Sensus Online | Login </title>
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
        <h3 class="buat"> L O G I N </h3>
      </tr>
    </table>
  </center><br>

  <center>
    <table class="tabelku">
      
      <tr class="dropdown-menu">
          <form action="ceklogin.php" method="POST" class="px-4 py-3">
            <div class="form-group">
              <label for="exampleDropdownFormEmail1">Your Username</label>
              <input type="text" class="form-control" name="username" placeholder="username">
            </div>
            <div class="form-group">
              <label for="exampleDropdownFormPassword1">Password</label>
              <input type="password" class="form-control" name="password" placeholder="password">
            </div><br>
            <div class="form-group">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                <label class="form-check-label" for="dropdownCheck">
                  Remember me
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-dark">Login</button>
          </form>
          <a class="dropdown-item" href="regis.php">New around here? Sign up</a>
      </tr>
    </table>
  </center><br>
  
  <center style="color: red">
     <?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){
        echo "Login gagal! username dan password salah!. Silahan registrasi terlebih dahulu!";
      }else if ($_GET['pesan'] == "logout") {
        echo "Anda telah berhasil logout";
      }else if ($_GET['pesan'] == "belum_login") {
        echo "Silahkan login terlebih dahulu!!";
      }
    }
  ?>
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