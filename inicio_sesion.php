<!--------------------------- CODIGO PHP --------------------------------------------------------->
<?php
ob_start();
  require_once('includes/load.php');//INCLUYE LA PAGINA LOAD
  if($session->isUserLoggedIn(true)) { redirect('inicio.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>

  <!------------------------------------ CODIGO PHP ------------------------------------->
  
  <!------------------------ INICIO CUERPO HTML --------------------------------------------------->
 <header>
  <title>Inicio de sesion</title>
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
  <!-------------------------- INICIO BODY QUE CONTIENE TODO LO DEL LOGIN ----------------------------->
  <body>
    <div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <form class="login100-form validate-form" action="auth.php" method="post">
        <span class="login100-form-title p-b-34">
          Inicio de sesion
        </span>
        <?php echo display_msg($msg); ?>
        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
          <input id="first-name" class="input100" type="text" name="username" placeholder="Nombre de Usuario">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
          <input class="input100" type="password" name="password" placeholder="Password">
          <span class="focus-input100"></span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Ingresar
          </button>
        </div>

        <div class="w-full text-center p-t-27 p-b-239">
          <span class="txt1">
            Olvidaste
          </span>

          <a href="#" class="txt2">
            Nombre de usuario / contraseña?
          </a>
        </div>

        <div class="w-full text-center">
          <a href="registrar.php" class="txt3">
            Registrarte
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
     <!-- <div class="container" id="container">
        <div class="form-container sign-up-container">
          <form method="post" action="add_user_client.php">
            <h1>Create Account</h1>
            <div class="social-container">
              <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
              <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" placeholder="Nombre completo" name="full-name" />
            <input type="text" placeholder="Nombre de usuario" name="username">
            <input type="password" placeholder="Contraseña" name ="password" />
            <div class="form-group">
              <label for="level">Rol de usuario</label>
                <select class="form-control" name="level">
                  <?php// foreach ($groups as $group ):?>
                   <option value="<?php// echo $group['group_level'];?>"><?php// echo ucwords($group['group_name']);?></option>
                <?php //endforeach;?>
                </select>
            </div>
            <button type="submit" name="add_user">Sign Up</button>
          </form>
        </div>


        <div class="form-container sign-in-container">
          <?php// echo display_msg($msg); ?>
          <form method="post" action="auth.php">
            <h1>Sign in</h1>
            <div class="social-container">
              <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
              <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <input type="text" name="username" placeholder="Nombre de Usuario" autocomplete="off" />
            <input type="password" name="password" placeholder="Password" autocomplete="off" />
            <a href="#">Forgot your password?</a>
            <button type="submit">Sign In</button>
          </form>
        </div>
        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-panel overlay-left">
              <h1>Welcome Back!</h1>
              <p>To keep connected with us please login with your personal info</p>
              <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
              <h1>Hello, Friend!</h1>
              <p>Enter your personal details and start journey with us</p>
              <button class="ghost" id="signUp">Sign Up</button>
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript">
        function Username(){
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '<a href>Why do I have this issue?</a>'
          })
        }
      </script>

      <script  src="libs/js/script.js"></script>
    </body>
    </html>

    <?//php include_once('layouts/footer.php'); ?>-->
