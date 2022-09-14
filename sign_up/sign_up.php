<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scholar - Education is for all</title>

  <link rel="icon" type="image/x-icon" href="../assets/logo/scholar_logo.png">
  <link rel="stylesheet" href="../sign_up/sign_up.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></link>
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
        color: #FFCC00;
        }

        a:hover {
        text-decoration: none;
        color: #FFCC00;
        }

        a:active {
        text-decoration: none;
        }
    </style>

    <script>
      (function () {
        'use strict';
        window.addEventListener('load', function () {
          var forms = document.getElementsByClassName('needs-validation');
          var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

    <script>
      $(function () {
          $(".togglePassword").click(function () {
              $(this).toggleClass("fa-eye fa-eye-slash");
              var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
              $("#exampleFormControlInput3").attr("type", type);
          });
      });
    </script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="../login/login.php"><i class="fa-solid fa-graduation-cap me-2"></i> <strong>SCHOLAR</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase active" href="../sign_up/sign_up.php"><i class="bi bi-door-open-fill me-1"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../registration/registration.php"><i class="bi bi-arrow-right-square-fill me-1"></i> Registration</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" data-bs-toggle="modal" data-bs-target="#exampleModal" href="../login/login.php"><i class="bi bi-door-closed-fill me-1"></i> Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../login/login.php"><i class="bi bi-house-fill me-1"></i> Back to home</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure want to logout?</h5>
      </div>
      <div class="modal-body">
        <i class="bi bi-exclamation-octagon" style="color: red"></i> Do you really wish to leave and logout? All unsaved changes will be lost!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-block" onclick="window.location.href='../login/login.php'">Yes, I am sure!</button>
        <button type="button" class="btn btn-outline-warning btn-block" data-bs-dismiss="modal">No, I am not sure!</button>
      </div>
    </div>
  </div>
</div>
<form class="needs-validation" method="post">
  <div class="container my-2">
    <strong style="font-size: 25px">LOGIN TO SCHOLAR</strong>
    <hr style="height:2px;border-width:0;color:black;background-color:black">
    <div class="mb-3">
      <label for="exampleFormControlInput2" class="form-label">Email Address</label>
      <input type="email" class="form-control border-dark" name="email" id="exampleFormControlInput2" placeholder="e.g. name@info.com" required>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput3" class="form-label">Password</label>
      <input type="password" class="form-control border-dark" name="pass" minlength="10" maxlength="15" id="exampleFormControlInput3" placeholder="Enter Password" required>
      <span class="fa fa-fw fa-eye field_icon togglePassword" toggle="#password_feild" style="margin-top: -25px; margin-left: 1265px; cursor: pointer; position: absolute"></span>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mt-3 mb-3">
      <center><h4 style="font-size: 15px; text-align: left; "><a style="color: #FFCC00" href="../forgot_password/forgot_password.php">FORGOT YOUR PASSWORD?</a></h4></center>
    </div>
    <div class="d-grid">
      <button class="btn btn-warning" type="submit" name="submit">LOGIN</button>
    </div>
    <div class="mt-3">
      <center><h4 style="font-size: 15px">DO YOU HAVEN'T ACCOUNT? <a href="../registration/registration.php">REGISTRATION <i class="bi bi-arrow-right-square-fill me-1"></i></a></h4></center>
    </div>
    <br>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "scholar";

      $con = mysqli_connect($servername,$username,$password,$database);

      if($con)
      {
          $msg = "";
      }
      else
      {
          $msg = "• DATABASE SUCCESSFULLY NOT CONNECTED!";
      }
    ?>
    <?php echo $msg; ?>
    <?php
      if(isset($_POST["submit"]))
      {
        $emailadd = $_POST['email'];
        $logpassword = $_POST['pass'];
      
        if(empty($emailadd) || empty($logpassword)) 
        {
          echo "• Please complete all form fields!";
        }
        else
        {
          $query = "INSERT INTO scholar_login VALUES ('','$emailadd','$logpassword')";
          $data = mysqli_query($con,$query);
        }
      }
    ?>
    <br>
  </div>
</form>
</body>

</html>
