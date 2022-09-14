<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scholar - Education is for all</title>

  <link rel="icon" type="image/x-icon" href="../assets/logo/scholar_logo.png">
  <link rel="stylesheet" href="../login/login.css">
  <link rel="stylesheet" href="../offer_page/offer.css">
  <script src="../login/login.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
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
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../assets/images/slider1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 style="font-weight: bold; color: yellow; text-shadow: 2px 2px #FF0000;">WELCOME TO STUDY</h2>
          <p style="font-weight: bold; color: black; text-shadow: 1px 1px #FFFFFF;">Education is the key to all the
            locked doors of the unknown.</p>
          <button class="btn btn-dark"><strong>STUDY</strong></button>
          <button class="btn btn-warning"><strong>EDUCATION</strong></button>
          <button class="btn btn-dark"><strong>TEACH</strong></button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../assets/images/slider2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 style="font-weight: bold; color: yellow; text-shadow: 2px 2px #FF0000;">WELCOME TO EDUCATION</h2>
          <p style="font-weight: bold; color: black; text-shadow: 1px 1px #FFFFFF;">Be educated so that you can change
            the world.</p>
          <button class="btn btn-dark"><strong>STUDY</strong></button>
          <button class="btn btn-warning"><strong>EDUCATION</strong></button>
          <button class="btn btn-dark"><strong>TEACH</strong></button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../assets/images/slider3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 style="font-weight: bold; color: yellow; text-shadow: 2px 2px #FF0000;">WELCOME TO TEACH</h2>
          <p style="font-weight: bold; color: black; text-shadow: 1px 1px #FFFFFF;">Education is a commitment to
            excellence in Teaching and Learning.</p>
          <button class="btn btn-dark"><strong>STUDY</strong></button>
          <button class="btn btn-warning"><strong>EDUCATION</strong></button>
          <button class="btn btn-dark"><strong>TEACH</strong></button>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>
  <div class="container typograph">
    <center>
      <h2 style="text-shadow: 2px 2px #FF0000;">OUR STUDY AREAS IN
        <span class="txt-rotate" data-period="2000" data-rotate='[ "Best Teaching...", "Best Courses...", "Best Education...", "Best Study...", "Best Faculties...", "Best Services..." ]'></span>
      </h2>
    </center>
  </div>
  <div class="section">
    <div class="section__item bg-1"></div>
    <div class="section__item bg-2"></div>
    <div class="section__item bg-3"></div>
    <div class="section__item bg-4"></div>
    <div class="section__item bg-5"></div>
    <div class="section__item bg-6"></div>
    <div class="section__item bg-7"></div>
    <div class="section__item bg-8"></div>
    <div class="section__item bg-9"></div>
    <div class="section__item bg-10"></div>
  </div>
  <div class="alert text-center cookiealert" role="alert">
    <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="https://cookiesandyou.com/" target="_blank">Learn more</a>

    <button type="button" class="btn btn-primary btn-sm acceptcookies">
        I agree
    </button>
  </div>
  <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
</body>

</html>