<?php
  session_start();
  if(
      (isset($_SESSION['login']) && $_SESSION['login'] == true) &&
      (isset($_SESSION['username']) && $_SESSION['username'] == true)
    ){
    header("Location: MainPage.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminDMS | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>
  .login-page{
    background-color: grey;
  }
  .card, .card-body{
    border-radius: 15px;
    }
  img{
    margin:auto;
  }
  b{
    color:white;
  }
</style>
</head>
<body class="hold-transition login-page">
  
<div class="login-box" style="border-radius: 50px;">
  <div class="login-logo">
    <a href="#"><b >Welcome back Admin</b>!</a>
  </div>
  <!-- /.login-logo -->
  
  <div class="card" >
    <img src="" alt=" logo" width="130px" height="100" >
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

    <form id="loginform" class="form-group" autocomplete="off">
      <label for="username" >Username*</label>
         <div class="input-group mb-3">
           <input type="text" name="username" class="form-control" required="" placeholder="Enter Username">
            <div class="input-group-append">
              <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div><br>
      <label for="username" >Password*</label>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" required="" placeholder="Enter password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
      
          <br>
          <div class="row">
            <div class="col-3"></div>
             <div class="col-6">
               <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <div class="col-3"></div>
          </div>
          <!-- /.col -->
        
      </form>
<br><br>
      <!--<div class="row">
        <div class="col-8 mb-1">
           <a href="forgot-password.html">forgot password</a>
        </div>
          <div class="col-4 mb-0">
            <a href="register.php" class="text-center">Register </a>
    </div>-->
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src = js/jquery-3.1.0.js  type="text/javascript"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script src = js/loginpagejs.js  type="text/javascript"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>
