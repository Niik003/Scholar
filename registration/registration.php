<?php
  ini_set('display_errors', 0);
  if(isset($_POST['submit']))
  {
    $regpassword = $_POST["pass"];
    $repassword = $_POST["rpass"];
    if ($regpassword != $repassword) 
    {
        $err = "• Password Mismatched!";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scholar - Education is for all</title>

  <link rel="icon" type="image/x-icon" href="../assets/logo/scholar_logo.png">
  <link rel="stylesheet" href="../registration/registration.css">

  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.30/dist/sweetalert2.all.min.js" integrity="sha256-QEUeVT/LLRRnn4z/6Wi9gqhUeiUvIsVMSdMgNENJu90=" crossorigin="anonymous"></script>
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
              var type = $(this).hasClass("fa-eye") ? "text" : "password";
              $("#exampleFormControlInput3").attr("type", type);
          });
      });
      $(function () {
          $(".togglePassword1").click(function () {
              $(this).toggleClass("fa-eye fa-eye-slash");
              var type = $(this).hasClass("fa-eye") ? "text" : "password";
              $("#exampleFormControlInput4").attr("type", type);
          });
      });
    </script>

    <script>
        function onlyNumberKey(evt) {
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;        
        }
    </script>

    <!-- <script type="text/javascript">
        $(document).ready(function() {
          $( "#third" ).click(function() {
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'REGISTRATION SUCCESSFULLY!',
              showConfirmButton: false,
              timer: 3000
            })
          });
        });
    </script> -->
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
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <center><h5 class="modal-title" id="exampleModalLabel">Are you sure want to logout?</h5></center>
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
<form class="needs-validation" method="post" name="myForm">
  <div class="container my-2">
    <strong style="font-size: 25px">REGISTRATION TO SCHOLAR</strong>
    <hr style="height:2px;border-width:0;color:black;background-color:black">
    <div class="mb-3">
      <label for="exampleFormControlInput0" class="form-label">Full Name:</label>
      <input type="text" class="form-control border-dark" name="fname" id="exampleFormControlInput0" placeholder="e.g. John Rohes Doe" required>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">User Name:</label>
      <input type="text" class="form-control border-dark" name="uname" minlength="1" maxlength="16" id="exampleFormControlInput1" placeholder="e.g. John Doe" required>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label class="form-label" for="specificSizeSelect">Gender:</label>
      <select class="form-select border-dark shadow-none" id="specificSizeSelect" name="gen">
        <option selected>Select your gender...</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput2" class="form-label">Email Address</label>
      <input type="email" class="form-control border-dark" name="email" id="exampleFormControlInput2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="e.g. name@info.com" required>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput3" class="form-label">Password</label>
      <input type="password" class="form-control border-dark" name="pass" minlength="10" maxlength="15" id="exampleFormControlInput3" placeholder="Enter Password" required>
      <span class="fa fa-fw fa-eye-slash field_icon togglePassword" toggle="#password_feild" style="margin-top: -25px; margin-left: 1265px; cursor: pointer; position: absolute"></span>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput4" class="form-label">Re-enter Password</label>
      <input type="password" class="form-control border-dark" name="rpass" minlength="10" maxlength="15" id="exampleFormControlInput4" placeholder="Re-enter Password" required>
      <span class="fa fa-fw fa-eye-slash field_icon togglePassword1" toggle="#password_feild1" style="margin-top: -25px; margin-left: 1265px; cursor: pointer; position: absolute"></span>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput5" class="form-label">Mobile No.</label>
      <input type="tel" class="form-control border-dark" name="mono" minlength="10" maxlength="10" onkeypress="return onlyNumberKey(event)" id="exampleFormControlInput5" placeholder="e.g. 99005XXXXX" required>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="d-grid">
      <button class="btn btn-warning target1" type="submit" name="submit" id="third">REGISTRATION</button>
    </div>
    <div class="mt-3">
      <center><h4 style="font-size: 15px">DO YOU HAVE AN ACCOUNT? <a href="../sign_up/sign_up.php">LOGIN <i class="bi bi-arrow-right-square-fill me-1"></i></a></h4></center>
    </div>
    <br>
    <?php echo $err; ?>
    <?php echo $errr; ?>
    <?php echo $emerr; ?>
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
    <?php session_start(); echo $msg; session_destroy(); ?>
    <?php
      if(isset($_POST["submit"]))
      {
        $firstname = $_POST['fname'];
        $username = $_POST['uname'];
        $gender = $_POST['gen'];
        $emailadd = $_POST['email'];
        $regpassword = $_POST['pass'];
        $repassword = $_POST['rpass'];
        $mobileno = $_POST['mono'];
      
        if ($regpassword != $repassword) 
        {
          $err = "";
        }
        else
        {
          $query = "INSERT INTO scholar_registration VALUES ('','$firstname','$username','$gender','$emailadd','$regpassword','$repassword','$mobileno')";
          $data = mysqli_query($con,$query);
        }
      }
    ?>
    <br>
    <?php echo $insmsg; ?>
    <?php
    if(isset($_POST['submit']))
    {
      $firstname = $_POST['fname'];
      $username = $_POST['uname'];
      $gender = $_POST['gen'];
      $emailadd = $_POST['email'];
      $regpassword = $_POST['pass'];
      $repassword = $_POST['rpass'];
      $mobileno = $_POST['mono'];

      if($regpassword != $repassword)
      {
        echo '
        <script type="text/javascript">
        $(document).ready(function(){
          Swal.fire({
            position: "center",
            icon: "error",
            title: "Please enter correct password",
            showConfirmButton: false,
            timer: 7500
          })
        });
        </script>
        ';
      }
      else if(!empty($_POST['fname']) && !empty($_POST['uname']) && !empty($_POST['gen']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['rpass']) && !empty($_POST['mono']))
      {
        echo '
        <script type="text/javascript">
        $(document).ready(function(){
          Swal.fire({
            position: "center",
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 7500
          })
        });
        </script>
        ';
      }
      else
      {
        echo '
        <script type="text/javascript">
        $(document).ready(function(){
          Swal.fire({
            position: "center",
            icon: "error",
            title: "Please fill out all field",
            showConfirmButton: false,
            timer: 7500
          })
        });
        </script>
        ';
      }
    }
    ?>
  </div>
</form>
</body>

</html>
