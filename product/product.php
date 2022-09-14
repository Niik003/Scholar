<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scholar - Education is for all</title>

  <link rel="icon" type="image/x-icon" href="../assets/logo/scholar_logo.png">
  <link rel="stylesheet" href="../product/product.css">
  <link rel="stylesheet" href="../offer_page/offer.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/fontawesome.min.css"
    integrity="sha512-R+xPS2VPCAFvLRy+I4PgbwkWjw1z5B5gNDYgJN5LfzV4gGNeRQyVrY7Uk59rX+c8tzz63j8DeZPLqmXvBxj8pA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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

  <style>
    a:link {
      text-decoration: none;
    }

    a:visited {
      text-decoration: none;
    }

    a:hover {
      text-decoration: none;
      color: #FFCC00;
    }

    a:active {
      text-decoration: none;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="../login/login.php"><i class="fa-solid fa-graduation-cap me-2"></i>
        <strong>SCHOLAR</strong></a>
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
            <a class="nav-link mx-2 text-uppercase" href="../cart/cart.php"><i
                class="fa-solid fa-cart-shopping me-1"></i> Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../registration/registration.php"><i class="fa-solid fa-circle-user me-1"></i> Account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container d-flex justify-content-center mt-100">
    <div class="row">
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img">
            <a href="../buy_product/buy_product.php" data-abc="true"> <img src="../assets/images/product_flutter.png"
                alt="flutter"> </a>
            <span class="text-center" style="background-color: black; color: white">FLUTTER</span>
            <div class="product-action">
              <div class="product-action-style" style="background-color: black"> <a class="action-plus"
                  title="Quick View" data-toggle="modal" data-target="#exampleModal"
                  href="../buy_product/buy_product.php" data-abc="true"> <i class="fa fa-plus"></i> </a> <a
                  class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a
                  class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img">
            <a href="../buy_product/buy_product.php" data-abc="true"> <img src="../assets/images/product_react.jpg"
                alt="react"> </a>
            <span class="text-center" style="background-color: black; color: white">REACT</span>
            <div class="product-action">
              <div class="product-action-style" style="background-color: black"> <a class="action-plus"
                  title="Quick View" data-toggle="modal" data-target="#exampleModal"
                  href="../buy_product/buy_product.php" data-abc="true"> <i class="fa fa-plus"></i> </a> <a
                  class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a
                  class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img">
            <a href="../buy_product/buy_product.php" data-abc="true"> <img src="../assets/images/product_python.jpg"
                alt=""> </a>
            <span class="text-center" style="background-color: black; color: white">PYTHON</span>
            <div class="product-action">
              <div class="product-action-style" style="background-color: black"> <a class="action-plus"
                  title="Quick View" data-toggle="modal" data-target="#exampleModal"
                  href="../buy_product/buy_product.php" data-abc="true"> <i class="fa fa-plus"></i> </a> <a
                  class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a
                  class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img">
            <a href="#" data-abc="true"> <img src="../assets/images/product_html.png" alt=""> </a>
            <span class="text-center" style="background-color: black; color: white">HTML5</span>
            <div class="product-action">
              <div class="product-action-style" style="background-color: black"> <a class="action-plus"
                  title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> <i
                    class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true"> <i
                    class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true">
                  <i class="fa fa-shopping-cart"></i> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container d-flex justify-content-center mt-50">
    <div class="row">
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img">
            <a href="../buy_product/buy_product.php" data-abc="true"> <img src="../assets/images/product_javascript.png"
                alt="flutter"> </a>
            <span class="text-center" style="background-color: black; color: white">JAVASCRIPT</span>
            <div class="product-action">
              <div class="product-action-style" style="background-color: black"> <a class="action-plus"
                  title="Quick View" data-toggle="modal" data-target="#exampleModal"
                  href="../buy_product/buy_product.php" data-abc="true"> <i class="fa fa-plus"></i> </a> <a
                  class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a
                  class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img">
            <a href="../buy_product/buy_product.php" data-abc="true"> <img src="../assets/images/product_bootstrap.png"
                alt="react"> </a>
            <span class="text-center" style="background-color: black; color: white">BOOTSTRAP</span>
            <div class="product-action">
              <div class="product-action-style" style="background-color: black"> <a class="action-plus"
                  title="Quick View" data-toggle="modal" data-target="#exampleModal"
                  href="../buy_product/buy_product.php" data-abc="true"> <i class="fa fa-plus"></i> </a> <a
                  class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a
                  class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img">
            <a href="../buy_product/buy_product.php" data-abc="true"> <img src="../assets/images/product_c++.png"
                alt=""> </a>
            <span class="text-center" style="background-color: black; color: white">C++</span>
            <div class="product-action">
              <div class="product-action-style" style="background-color: black"> <a class="action-plus"
                  title="Quick View" data-toggle="modal" data-target="#exampleModal"
                  href="../buy_product/buy_product.php" data-abc="true"> <i class="fa fa-plus"></i> </a> <a
                  class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a
                  class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-wrapper mb-45 text-center">
          <div class="product-img">
            <a href="#" data-abc="true"> <img src="../assets/images/product_php.png" alt=""> </a>
            <span class="text-center" style="background-color: black; color: white">PHP</span>
            <div class="product-action">
              <div class="product-action-style" style="background-color: black"> <a class="action-plus"
                  title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> <i
                    class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true"> <i
                    class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true">
                  <i class="fa fa-shopping-cart"></i> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>