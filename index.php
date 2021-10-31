<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Weather Forecast</title>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </head>
  <body onload="DefaultScreen()">
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
    <div class="container mt-5">
      <center class="mb-5">
        <h1 id="Para1" class="mb-4">5 Days Weather Forecast</h1>
        <p id="inputContainer">
          City :
          <input
            type="text"
            id="cityInput"
            style="background-color: #50fa78; border: none"
          />
          <button type="button" class="btn btn-dark" onclick="GetInfo()">
            Click Me
          </button>
        </p>
      </center>

      <div id="weatherContainer" class="pt-5">
        <div id="iconsContainer" class="row m-auto">
          <div class="col">
            <div
              class="card align-items-center m-auto"
              style="width: 10rem; background-color: #50fa78"
            >
              <div class="card-body align-items-center">
                <h5 class="card-title weather" id="day1">Card title</h5>
                <div class="image card-text">
                  <img src="dots.png" class="imgClass" id="img1" />
                </div>
                <p class="minValues mb-0" id="day1Min">Loading...</p>
                <p class="maxValues mb-1" id="day1Max">Loading...</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div
              class="card align-items-center m-auto"
              style="width: 10rem; background-color: #50fa78"
            >
              <div class="card-body align-items-center">
                <h5 class="card-title weather" id="day2">Card title</h5>
                <div class="image card-text">
                  <img src="dots.png" class="imgClass" id="img2" />
                </div>
                <p class="minValues mb-0" id="day2Min">Loading...</p>
                <p class="maxValues mb-1" id="day2Max">Loading...</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div
              class="card align-items-center m-auto"
              style="width: 10rem; background-color: #50fa78"
            >
              <div class="card-body align-items-center">
                <h5 class="card-title weather" id="day3">Card title</h5>
                <div class="image card-text">
                  <img src="dots.png" class="imgClass" id="img3" />
                </div>
                <p class="minValues mb-0" id="day3Min">Loading...</p>
                <p class="maxValues mb-1" id="day3Max">Loading...</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div
              class="card align-items-center m-auto"
              style="width: 10rem; background-color: #50fa78"
            >
              <div class="card-body align-items-center">
                <h5 class="card-title weather" id="day4">Card title</h5>
                <div class="image card-text">
                  <img src="dots.png" class="imgClass" id="img4" />
                </div>
                <p class="minValues mb-0" id="day4Min">Loading...</p>
                <p class="maxValues mb-1" id="day4Max">Loading...</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div
              class="card align-items-center m-auto"
              style="width: 10rem; background-color: #50fa78"
            >
              <div class="card-body align-items-center">
                <h5 class="card-title weather" id="day5">Card title</h5>
                <div class="image card-text">
                  <img src="dots.png" class="imgClass" id="img5" />
                </div>
                <p class="minValues mb-0" id="day5Min">Loading...</p>
                <p class="maxValues mb-1" id="day5Max">Loading...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="app.js"></script>
    </div>

    
  </body>
</html>
