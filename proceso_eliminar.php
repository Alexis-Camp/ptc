<?php
function eliminar(){
include ("templates/cabecera_ingles_usuario.php");
include ("global/conexion2.php");
if (isset($_POST['btnEliminar'])){
$id = $_POST['id'];
mysqli_select_db($conexion,$db) or die ("Error al conectar");
$sql = "DELETE FROM tblproductos WHERE ID = $id";
if (mysqli_query($conexion, $sql)){
    echo "<script>
Swal.fire(
    'Good joob!',
    'The products delete',
    'succes'
  )
</script>
";
}else{
    $error = mysqli_query($conexion, $sql);
    echo mysqli_error($error);
    echo "Falló";
}
}else{
    echo "Es en este if";
}
}
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
<?php 
eliminar();
?>
    <center><br/>
    <form action="proceso_eliminar.php" method="POST">
    <button name="regresar" type="submit" class="btn btn-warning">To return</button>
    </form>
    </center>
    <?php 
    if(isset($_POST['regresar'])){
        header('Location: inicio_carrito_ingles_usuario.php');
    }else{
        echo "";
    }
    ?>
</body>
</html>