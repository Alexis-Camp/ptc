<?php
ob_start();
require_once('includes/load.php');
if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<header>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="libs/images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="libs/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="libs/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="libs/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="libs/vendor/animate/animate.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="libs/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="libs/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="libs/vendor/select2/select2.min.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="libs/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="libs/css/util.css">
  <link rel="stylesheet" type="text/css" href="libs/css/main_login.css">
  <!--===============================================================================================-->
</header>
<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <form class="login100-form validate-form" action="auth_v2.php" method="post">
        <span class="login100-form-title p-b-34">
          Account Login
        </span>
        <?php echo display_msg($msg); ?>
        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
          <input id="first-name" class="input100" type="text" name="username" placeholder="User name">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
          <input class="input100" type="password" name="password" placeholder="Password">
          <span class="focus-input100"></span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Sign in
          </button>
        </div>

        <div class="w-full text-center p-t-27 p-b-239">
          <span class="txt1">
            Forgot
          </span>

          <a href="#" class="txt2">
            User name / password?
          </a>
        </div>

        <div class="w-full text-center">
          <a href="sing_up.php" class="txt3">
            Sign Up
          </a>
        </div>
      </form>

      <div class="login100-more" style="background-image: url('libs/images/auto-3298890_1280.jpg');"></div>
    </div>
  </div>
</div>
<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="libs/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="libs/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="libs/vendor/bootstrap/js/popper.js"></script>
<script src="libs/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="libs/vendor/select2/select2.min.js"></script>
<script>
  $(".selection-2").select2({
    minimumResultsForSearch: 20,
    dropdownParent: $('#dropDownSelect1')
  });
</script>
<!--===============================================================================================-->
<script src="libs/vendor/daterangepicker/moment.min.js"></script>
<script src="libs/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="libs/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="libs/js/main_login.js"></script>

