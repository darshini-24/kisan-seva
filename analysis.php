
<?php
$server = "remotemysql.com";
    $username = "kQmgA03SRm";
    $password="flTxmyD6Gr";
    $database="kQmgA03SRm";

    $conn = mysqli_connect($server,$username,$password,$database);
    
    if(!$conn){
        die("Sorry, we failed to connect ". mysqli_connect_error); 
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $state=$_POST['state'];
        $district=$_POST['district'];
        $market=$_POST['market'];
        $commodity=$_POST['commodity'];
        $variety=$_POST['variety'];
        
        $sql = "SELECT * FROM `data` WHERE state = '$state'and district='$district' and market='$market' and commodity='$commodity' and variety='$variety';";
        $result = mysqli_query($conn,$sql);

        if($result){
            $row = mysqli_fetch_assoc($result);
            $min = $row['min_price'];
            $max = $row['max_price'];
            $modal = $row['modal_price'];

            echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Anaysis</title>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
  <a href="https://kisanseva.hellotars.com/conv/UDTPs8"><img src="bot.png" alt="" style="width: 6%; position: fixed;bottom:5px;right:5px;z-index:1"></a>
  <div class="container mb-4">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="landing.php" style="color: rgb(28, 156, 71)"
            ><img src="KISAN SEVA.png" alt="" style="width: 30%"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item ms-5 me-5">
                <a
                  class="nav-link"
                  aria-current="page"
                  href="landing.php"
                  style="color: rgb(28, 156, 71)"
                  >Home</a
                >
              </li>
              <li class="nav-item ms-5 me-5">
                <a class="nav-link" href="./landing.php#about" style="color: rgb(28, 156, 71)"
                  >About Us</a
                >
              </li>
              <li class="nav-item ms-5 me-5">
                <a class="nav-link" href="./landing.php#foot" style="color: rgb(28, 156, 71)"
                  >Contact Us</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  <div class="container mt-5 mb-5 m-auto align-items-center">
      <div class="row m-auto">
          <center><h1 style="color: rgb(28, 156, 71)">Analysis of Crop Rates</h1></center>
      </div>
      <div class="row mt-5 m-auto">
      <div class="card m-auto pt-3 pb-3" style="width: 15rem; background-color: #50fa78">
  <div class="card-body m-auto">
    <h5 class="card-title m-auto">Minimum Price</h5>
    <center>'.$min.
          '</center>
  </div>
</div>
<div class="card m-auto pt-3 pb-3" style="width: 15rem; background-color: #50fa78">
  <div class="card-body m-auto">
    <h5 class="card-title m-auto">Maximum Price</h5>
    <center>'.$max.
          '</center>
  </div>
</div>
<div class="card m-auto pt-3 pb-3" style="width: 15rem; background-color: #50fa78">
  <div class="card-body m-auto">
    <h5 class="card-title m-auto">Modal Price</h5>
    <center>'.$modal.
          '</center>
  </div>
</div>
</div>
      </div>
  </body>
</html>
';
        }
        else{
            require("croprates.php");
        }
    }
?>