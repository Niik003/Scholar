<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scholar - Education is for all</title>

  <link rel="icon" type="image/x-icon" href="../assets/logo/scholar_logo.png">
  <link rel="stylesheet" href="../videos/videos.css">
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

    a.head:hover {
      text-decoration: none;
    }
  </style>

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
            <a class="nav-link mx-2 text-uppercase" href="../registration/registration.php"><i class="fa-solid fa-circle-user me-1"></i> Account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container videos my-4">
    <div class="video">
        <div class="thumbnail">
            <a href="../videos/flutter_videos/flutter_video_player.php"><img src="../assets/images/flutter_videos.png" alt="" /></a>
        </div>
        <div class="details">
            <div class="author">
                <img src="../assets/images/flutter1_videos" alt="" style="border: 1px #FFCC00 solid"/>
            </div>
            <div class="title">
                <a class="head" href=""><h3>
                    Video Player in Flutter | Flutter Dev
                </h3></a>
                <a href="">
                    Flutter Dev <i class="bi bi-check-circle-fill"></i>
                </a>
                <span> 5M Views • 3 Years Ago </span>
            </div>
        </div>
    </div>
    <div class="video">
        <div class="thumbnail">
            <a href="../videos/flutter_preloader/flutter_preloader.php"><img src="../assets/images/flutter_preloader.png" alt="" /></a>
        </div>
        <div class="details">
            <div class="author">
                <img src="../assets/images/sanjeev_flutter.jpg" alt="" style="border: 1px #FFCC00 solid"/>
            </div>
            <div class="title">
                <a class="head" href=""><h3>
                    Preloader in Flutter | Sanjeev Madhav
                </h3></a>
                <a href="">
                    Sanjeev Madhav
                </a>
                <span> 590K Views • 1 Years Ago </span>
            </div>
        </div>
    </div>
    <div class="video">
        <div class="thumbnail">
            <a href="../videos/flutter_slidable/flutter_slidable.php"><img src="../assets/images/flutter_slidable.jpg" alt="" /></a>
        </div>
        <div class="details">
            <div class="author">
                <img src="../assets/images/flutter_icon.png" alt="" style="border: 1px #FFCC00 solid"/>
            </div>
            <div class="title">
                <a class="head" href=""><h3>
                    Flutter Slidable | Package of the Week | Flutter
                </h3></a>
                <a href="">
                    Flutter <i class="bi bi-check-circle-fill"></i>
                </a>
                <span> 2M Views • 10 Months Ago </span>
            </div>
        </div>
    </div>
    <div class="video">
        <div class="thumbnail">
            <a href="../videos/flutter_mediaquery/flutter_mediaquery.php"><img src="../assets/images/flutter_mediaquery.jpg" alt="" /></a>
        </div>
        <div class="details">
            <div class="author">
                <img src="../assets/images/flutter_icon.png" alt="" style="border: 1px #FFCC00 solid"/>
            </div>
            <div class="title">
                <a class="head" href=""><h3>
                    MediaQuery | Widget of the Week | Flutter
                </h3></a>
                <a href="">
                    Flutter <i class="bi bi-check-circle-fill"></i>
                </a>
                <span> 240K Views • 5 Months Ago </span>
            </div>
        </div>
    </div>
    <div class="video">
        <div class="thumbnail">
            <a href="../videos/react_introduction/react_introduction.php"><img src="../assets/images/react_intro.jpg" alt="" /></a>
        </div>
        <div class="details">
            <div class="author">
                <img src="../assets/images/react_icon.png" alt="" style="border: 1px #FFCC00 solid"/>
            </div>
            <div class="title">
                <a class="head" href=""><h3>
                    #01 Introduction | React Native
                </h3></a>
                <a href="">
                    React Native Dev <i class="bi bi-check-circle-fill"></i>
                </a>
                <span> 3M Views • 5 Years Ago </span>
            </div>
        </div>
    </div>
    <div class="video">
        <div class="thumbnail">
            <a href="../videos/react_fragements/react_fragements.php"><img src="../assets/images/react_fragments.jpg" alt="" /></a>
        </div>
        <div class="details">
            <div class="author">
                <img src="../assets/images/react_icon.png" alt="" style="border: 1px #FFCC00 solid"/>
            </div>
            <div class="title">
                <a class="head" href=""><h3>
                    React Fragments | React Native
                </h3></a>
                <a href="">
                    React Native Dev <i class="bi bi-check-circle-fill"></i>
                </a>
                <span> 387K Views • 32 Months Ago </span>
            </div>
        </div>
    </div>
    <div class="video">
        <div class="thumbnail">
            <a href="../videos/react_tutorial/react_tutorial.php"><img src="../assets/images/react_nav_onboarding.jpg" alt="" /></a>
        </div>
        <div class="details">
            <div class="author">
                <img src="../assets/images/react_morioh.png" alt="" style="border: 1px #FFCC00 solid"/>
            </div>
            <div class="title">
                <a class="head" href=""><h3>
                    React Onboarding & Navigation Bar | By Net Ninja
                </h3></a>
                <a href="">
                    The Net Ninja
                </a>
                <span> 80K Views • 1 Years Ago </span>
            </div>
        </div>
    </div>
    <div class="video">
        <div class="thumbnail">
            <a href="../videos/react_image_background/react_image_background.php"><img src="../assets/images/react_image.jpg" alt="" /></a>
        </div>
        <div class="details">
            <div class="author">
                <img src="../assets/images/react_native_icon.jpg" alt="" style="border: 1px #FFCC00 solid"/>
            </div>
            <div class="title">
                <a class="head" href=""><h3>
                    How to create fullscreen image in React Native? | React Native
                </h3></a>
                <a href="">
                    React Native 
                </a>
                <span> 7M Views • 4 Years Ago </span>
            </div>
        </div>
    </div>
    <div class="video">
        <div class="thumbnail">
            <a href="../videos/python_course/python_course.php"><img src="../assets/images/python_full_course.jpg" alt="" /></a>
        </div>
        <div class="details">
            <div class="author">
                <img src="../assets/images/edureka_icon.png" alt="" style="border: 1px #FFCC00 solid"/>
            </div>
            <div class="title">
                <a class="head" href=""><h3>
                    Python Full Course | By EDUREKA
                </h3></a>
                <a href="">
                    !EDUREKA <i class="bi bi-check-circle-fill"></i>
                </a>
                <span> 450K Views • 1 Years Ago </span>
            </div>
        </div>
    </div>
    <div class="video">
        <div class="thumbnail">
            <a href="../videos/python_basics/python_basics.php"><img src="../assets/images/python_basics.jpg" alt="" /></a>
        </div>
        <div class="details">
            <div class="author">
                <img src="../assets/images/edureka_icon.png" alt="" style="border: 1px #FFCC00 solid"/>
            </div>
            <div class="title">
                <a class="head" href=""><h3>
                    Python Basics | By EDUREKA
                </h3></a>
                <a href="">
                    !EDUREKA <i class="bi bi-check-circle-fill"></i>
                </a>
                <span> 1M Views • 2 Years Ago </span>
            </div>
        </div>
    </div>
    <div class="video">
        <div class="thumbnail">
            <a href="../videos/python_array/python_array.php"><img src="../assets/images/python_array.jpg" alt="" /></a>
        </div>
        <div class="details">
            <div class="author">
                <img src="../assets/images/simplilearn_icon.jpg" alt="" style="border: 1px #FFCC00 solid"/>
            </div>
            <div class="title">
                <a class="head" href=""><h3>
                    Python Array Tutorial | By Simplilearn
                </h3></a>
                <a href="">
                    Simpli Learn <i class="bi bi-check-circle-fill"></i>
                </a>
                <span> 6M Views • 3 Years Ago </span>
            </div>
        </div>
    </div>
    <div class="video">
        <div class="thumbnail">
            <a href="../videos/python_if_else_statement/python_if_else.php"><img src="../assets/images/python_if_else.jpg" alt="" /></a>
        </div>
        <div class="details">
            <div class="author">
                <img src="../assets/images/simplilearn_icon.jpg" alt="" style="border: 1px #FFCC00 solid"/>
            </div>
            <div class="title">
                <a class="head" href=""><h3>
                    Python If - Else Statement Tutorial | By Simplilearn
                </h3></a>
                <a href="">
                    Simpli Learn <i class="bi bi-check-circle-fill"></i>
                </a>
                <span> 4M Views • 3 Years Ago </span>
            </div>
        </div>
    </div>
 </div>
</body>
</html>