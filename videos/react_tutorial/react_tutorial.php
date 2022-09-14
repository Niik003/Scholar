<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scholar - Education is for all</title>

  <link rel="icon" type="image/x-icon" href="../asset/logos/scholar_logo.png">
  <link rel="stylesheet" href="../videos.css">
  <link rel="stylesheet" href="../offer_page/offer.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="../login/login.php"><i class="fa-solid fa-graduation-cap me-2"></i> <strong>SCHOLAR</strong></a>
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
            <a class="nav-link mx-2 text-uppercase" href="#">Videos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="#">Materials</a>
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
            <a class="nav-link mx-2 text-uppercase" href="../registration/registration.php"><i class="fa-solid fa-circle-user me-1"></i> Account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container my-4">
    <iframe height="620px" width="100%" src="https://www.youtube.com/embed/vmxsrR7bShA?autoplay=1" frameborder="0" allowfullscreen></iframe>
      <p style="font-size: 20px">React Tutorial Onboarding & Naviagtion Bar | What is React Onboarding and Navigation Bar? | The Net Ninja</p>
    <p><b style="padding-right: 928px; color: grey">1M Views</b> &nbsp;&nbsp;&nbsp;<i class="fa-regular fa-thumbs-up me-1" style="color: grey"></i> 10M &nbsp;&nbsp;&nbsp;<i class="fa-regular fa-thumbs-down me-1" style="color: grey"></i> 10K &nbsp;&nbsp;&nbsp;<i class="fa-solid fa-share me-1" style="color: grey"></i> Share &nbsp;&nbsp;&nbsp;<i class="fa-regular fa-bookmark me-1" style="color: grey"></i> Save</p>
  </div>
  <div class="container">
    <hr style="margin-top: -15px">
  </div>
  <div class="container">
    <div class="video">
    <div class="details">
        <div class="author">
            <img src="../asset/image/react_morioh.png" alt="" style="border: 1px #FFCC00 solid"/>
        </div>
        <div class="title">
          <a href="" style="color: black">
              The Net Ninja
          </a>
          <span> 1M Subscriber </span>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <p>In this tutorial, we’ll look at one of the ways to create onboarding screens in a React Native app. We are going to use a React Native community package, called react-native-viewpager, that allows us to swipe left or right between different pages where each page has some data to display.<span id="dots">...</span><p id="more">We are going to create some reusable components and mimic the basic example of an onboarding screen that has some logic to navigate to the next onboarding page, go back to the previous onboarding page, and navigate to the main contents of the app. For the last section, we are going to integrate the react-navigation library.</p>
    </p>
    <button onclick="myFunction()" id="myBtn" style="background: none; padding: 0; border: none; color: #FFCC00; margin-bottom: 15px"><b>Read more...</b></button>
  </div>
  <script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "<b>Read more...</b>"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "<b>Read less...</b>"; 
        moreText.style.display = "inline";
      }
    }
  </script>
  <div class="container">
    <hr style="margin-top: -05px; margin-bottom: 25px">
  </div>
</body>
</html>