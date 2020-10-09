<?php
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('login_v2.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
<?php 
include "templates/cabecera_ingles_admin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <br/>
    <br/>
    <br/>
    <br/>
    <div>
        <h3>The Paypal notification will reach the seller.</h3>
        <p>Be aware of your email.</p>
    </div>
<?php 
?>
    <center><br/>
    <form action="proceso_eliminar_ingles_admin.php" method="POST">
    <button name="regresar" type="submit" class="btn btn-warning">To return</button>
    </form>
    </center>
    <?php 
    if(isset($_POST['regresar'])){
        header('Location: inicio_carrito_ingles_admin.php');
    }else{
        echo "";
    }
    ?>
</body>
</html>
<? include "templates/pie.php"; ?>