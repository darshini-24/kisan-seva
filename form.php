
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
    <title>Form</title>

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

    <div class="container pt-5 pb-5" style="background-image: url('foggy.jpg')">
      <form action="analysis.php" method="post">
        <div class="row m-auto mt-5 mb-2">
          <div class="col-3 m-auto"></div>
          <div class="col-3 m-auto">
            <div class="row align-items-center m-auto">
              <div class="col-auto m-auto">
                <label for="state" class="form-label" style="color: white"
                  >State</label
                >
              </div>
              <div class="col-auto m-auto">
                <input
                  type="text"
                  class="form-control"
                  name="state"
                  id="state"
                />
              </div>
            </div>
          </div>

          <div class="col-3 m-auto">
            <div class="row align-items-center m-auto">
              <div class="col-auto m-auto">
                <label for="district" class="form-label" style="color: white"
                  >District</label
                >
              </div>
              <div class="col-auto m-auto">
                <input
                  type="text"
                  name="district"
                  class="form-control"
                  id="district"
                />
              </div>
            </div>
          </div>
          <div class="col-3 m-auto"></div>
        </div>

        <div class="row m-auto mt-4">
          <div class="col-2 m-auto"></div>
          <div class="col-3 m-auto">
            <div class="row align-items-center m-auto">
              <div class="col-auto m-auto">
                <label for="market" class="form-label" style="color: white"
                  >Market</label
                >
              </div>
              <div class="col-auto m-auto">
                <input
                  type="text"
                  name="market"
                  class="form-control"
                  id="market"
                />
              </div>
            </div>
          </div>

          <div class="col-2 m-auto">
            <div class="row align-items-center m-auto">
              <div class="col-auto m-auto">
                <label for="commodity" class="form-label" style="color: white"
                  >Commodity</label
                >
              </div>
              <div class="col-auto m-auto">
                <input
                  type="text"
                  name="commodity"
                  class="form-control"
                  id="commodity"
                />
              </div>
            </div>
          </div>

          <div class="col-3 m-auto">
            <div class="row align-items-center m-auto">
              <div class="col-auto m-auto">
                <label for="variety" class="form-label" style="color: white"
                  >Variety</label
                >
              </div>
              <div class="col-auto m-auto">
                <input
                  type="text"
                  name="variety"
                  class="form-control"
                  id="variety"
                />
              </div>
            </div>
          </div>
          <div class="col-2 m-auto"></div>
        </div>

        <center class="mt-5 mb-5">
          <button type="submit" class="btn btn-dark btn-lg">Submit</button>
        </center>
      </form>
    </div>
    
  </body>
</html>
