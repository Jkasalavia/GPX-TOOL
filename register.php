<?php
  require("db.php");

    
  
  if(isset($_POST['submit']))
  { 
    $name = $_POST['name'];
    $name = stripslashes($name);
    $name = addslashes($name);

    $email = $_POST['email'];
    $email = stripslashes($email);
    $email = addslashes($email);

    $password = $_POST['password'];
    $password = stripslashes($password);
    $password = addslashes($password);
    $password = md5($password);

    $address = $_POST['address'];
    $address = stripslashes($address);
    $address = addslashes($address);

    $str="SELECT email from user WHERE email='$email'";
    $result=mysqli_query($con,$str);
//    session_start();
    if((mysqli_num_rows($result))>0)  
    {
            echo "<center><h3><script>alert('Sorry.. This email is already registered !!');</script></h3></center>";
// header("refresh:0;url=login.php");

        }
    else
    {
            $str="insert into user set name='$name',email='$email',password='$password',address='$address'";
      if((mysqli_query($con,$str))) 
    echo "<center><h3><script>alert('Congrats.. You have successfully registered !!');</script></h3></center>";
     echo "<script> location.href='login.php'; </script>";
     exit;
//      header("refresh:0;url=welcome.php");
    }
    }
?>











<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">
                  <label for="lastName">Last name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Register</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
