<?php 
include "templates/cabecera_español_admin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador</title>
</head>
<body>
    <br/>
    <br/>
    <br/>
    <div>
        <h3>La notificación de Paypal llegara al vendedor.</h3>
        <p>Este al tanto de su correo electrónico.</p>
    </div>
<?php 
?>
    <center><br/>
    <form action="proceso_eliminar2.php" method="POST">
    <button name="regresar" type="submit" class="btn btn-warning">Regresar</button>
    </form>
    </center>
    <?php 
    if(isset($_POST['regresar'])){
        header('Location: inicio_carrito_español_admin.php');
    }else{
        echo "";
    }
    ?>
</body>
</html>
<? include "templates/pie.php"; ?>