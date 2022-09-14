<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scholar - Education is for all</title>

  <link rel="icon" type="image/x-icon" href="../assets/logo/scholar_logo.png">
  <link rel="stylesheet" href="../material/material.css">
  <link rel="stylesheet" href="../offer_page/offer.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-graduation-cap me-2"></i> <strong>SCHOLAR</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
        <div class="input-group">
          <span class="border-dark input-group-text bg-dark text-white"><i
              class="fa-solid fa-magnifying-glass"></i></span>
          <input type="text" class="form-control border-warning" style="color:#7a7a7a">
          <button class="btn btn-dark text-white">Search</button>
        </div>
      </div>
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <div class="ms-auto d-none d-lg-block">
          <div class="input-group">
            <span class="border-warning input-group-text bg-warning text-white"><i
                class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" class="form-control border-warning" style="color:#7a7a7a">
            <button type="button" class="btn btn-warning text-white">Search</button>
          </div>
        </div>
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../product/product.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../videos/videos.php">Videos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../material/material.php">Materials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase offer" href="../offer_page/offer.php">Offers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../about/about.php">About</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../cart/cart.php"><i class="fa-solid fa-cart-shopping me-1"></i> Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../sign_up/sign_up.php"><i class="fa-solid fa-circle-user me-1"></i> Account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                <div class="col">
                    <div class="card" onclick="location.href='../material/material.php';" style="width: 18rem; border: 1px solid #FFCC00;">
                        <img src="../assets/images/JavaScript-logo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">JAVASCRIPT</h5>
                            <a href="../material/js.pdf" download class="d-grid btn btn-sm btn-outline-warning">DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" onclick="location.href='../material/material.php';" style="width: 18rem; border: 1px solid #FFCC00">
                        <img src="../assets/images/flutter_logo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">FLUTTER</h5>
                            <a href="../material/flutter.pdf" download class="d-grid btn btn-sm btn-outline-warning">DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" onclick="location.href='../material/material.php';" style="width: 18rem; border: 1px solid #FFCC00">
                        <img src="../assets/images/logo-og.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">REACT</h5>
                            <a href="../material/react.pdf" download class="d-grid btn btn-sm btn-outline-warning">DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" onclick="location.href='../material/material.php';" style="width: 18rem; border: 1px solid #FFCC00">
                        <img src="../assets/images/b5_logo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BOOTSTRAP 5</h5>
                            <a href="../material/Bootstrap.pdf" download class="d-grid btn btn-sm btn-outline-warning">DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" onclick="location.href='../material/material.php';" style="width: 18rem; border: 1px solid #FFCC00;">
                        <img src="../assets/images/PHP_pdf.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PHP</h5>
                            <a href="../material/php.pdf" download class="d-grid btn btn-sm btn-outline-warning">DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" onclick="location.href='../material/material.php';" style="width: 18rem; border: 1px solid #FFCC00">
                        <img src="../assets/images/c++_pdf.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">C++</h5>
                            <a href="../material/C++.pdf" download class="d-grid btn btn-sm btn-outline-warning">DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" onclick="location.href='../material/material.php';" style="width: 18rem; border: 1px solid #FFCC00">
                        <img src="../assets/images/nodejs_pdf.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">NODE.JS</h5>
                            <a href="../material/node-js.pdf" download class="d-grid btn btn-sm btn-outline-warning">DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" onclick="location.href='../material/material.php';" style="width: 18rem; border: 1px solid #FFCC00">
                        <img src="../assets/images/java_pdf.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">JAVA</h5>
                            <a href="../material/java.pdf" download class="d-grid btn btn-sm btn-outline-warning">DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" onclick="location.href='../material/material.php';" style="width: 18rem; border: 1px solid #FFCC00;">
                        <img src="../assets/images/mongodb_pdf.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">MONGO DB</h5>
                            <a href="../material/mongodb.pdf" download class="d-grid btn btn-sm btn-outline-warning">DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" onclick="location.href='../material/material.php';" style="width: 18rem; border: 1px solid #FFCC00">
                        <img src="../assets/images/Python_pdf.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PYTHON</h5>
                            <a href="../material/python.pdf" download class="d-grid btn btn-sm btn-outline-warning">DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" onclick="location.href='../material/material.php';" style="width: 18rem; border: 1px solid #FFCC00">
                        <img src="../assets/images/sql_pdf.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">SQL</h5>
                            <a href="../material/SQL.pdf" download class="d-grid btn btn-sm btn-outline-warning">DOWNLOAD</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" onclick="location.href='../material/material.php';" style="width: 18rem; border: 1px solid #FFCC00">
                        <img src="../assets/images/html_pdf.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">HTML 5 & CSS 3</h5>
                            <a href="../material/html.pdf" download class="d-grid btn btn-sm btn-outline-warning">DOWNLOAD</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>