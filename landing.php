<!DOCTYPE html>
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
    <title>Home</title>

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <a href="https://kisanseva.hellotars.com/conv/UDTPs8"><img src="bot.png" alt="" style="width: 6%; position: fixed;bottom:5px;right:5px;z-index:1"></a>
    <div class="container mb-2">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color: rgb(28, 156, 71)"
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
                  href="#"
                  style="color: rgb(28, 156, 71)"
                  >Home</a
                >
              </li>
              <li class="nav-item ms-5 me-5">
                <a class="nav-link" href="#about" style="color: rgb(28, 156, 71)"
                  >About Us</a
                >
              </li>
              <li class="nav-item ms-5 me-5">
                <a class="nav-link" href="#foot" style="color: rgb(28, 156, 71)"
                  >Contact Us</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div>
      <div
        class="
          position-relative
          overflow-hidden
          p-3 p-md-5
          m-md-0
          text-center
          bg-light
        "
        style="background-image: url('farmer.jpg')"
      >
        <div
          class="col-md-7 p-lg-5 mx-auto my-5"
          style="color: rgb(238, 234, 234)"
        >
          <h2 style="color: rgb(238, 234, 234)" class="mb-3">KISAN SEVA</h2>
          <p class="lead mb-5">
            Best amongst Agricultue apps in India for complete information on
            Kheti, Bazaar Bhaav, Mausam and Charcha - an open discussion
            platform for farmers and agri-experts.
          </p>
          <a href="index.php" class="me-2"
            ><button
              type="button"
              class="btn btn-light btn-lg"
              style="border-radius: 20px"
            >
              Weather Forecast
            </button></a
          >
          <a href="crops.php" class="ms-2 me-2"
            ><button
              type="button"
              class="btn btn-light btn-lg"
              style="border-radius: 20px"
            >
              Crop Suggestions
            </button></a
          ></a
          >
          <a href="form.php" class="ms-2"
            ><button
              type="button"
              class="btn btn-light btn-lg"
              style="border-radius: 20px"
            >
              Crop Rates
            </button></a
          >
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div
          class="product-device product-device-2 shadow-sm d-none d-md-block"
        ></div>
      </div>
    </div>

    <div>
      <div
        class="
          position-relative
          overflow-hidden
          p-3 p-md-5
          m-md-0
          text-center
          bg-light"
      >
        <div id="about"
          class="col-md-7 p-lg-4 mx-auto my-5"
          style="color: rgb(238, 234, 234)"
        >
          <h1 style="color: #535853" class="mb-3">About Us</h1>
          <p class="lead mb-5" style="color: #226A0C">
            KISAN SEVA helps farmers to get early weather warnings , advice on what and when to grow crops by agricultural experts and also get filtered information on crop rates and various crops that can be grown on a particular soil in a particular weather. Also, it provides analysis of crop rates in the market.
          </p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div
          class="product-device product-device-2 shadow-sm d-none d-md-block"
        ></div>
      </div>
    </div>
<?php require("footer.php"); ?>
  </body>
</html>
