<?php
function eliminar(){
include ("templates/cabecera_español_admin.php");
include ("global/conexion2.php");
if (isset($_POST['btnEliminar'])){
$id = $_POST['id'];
mysqli_select_db($conexion,$db) or die ("Error al conectar");
$sql = "DELETE FROM tblproductos WHERE ID = $id";
if (mysqli_query($conexion, $sql)){
    echo "<script>
Swal.fire(
    '¡Buen trabajo',
    'El producto ha sido eliminado correctamente',
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
</head>
<body>
<?php 
eliminar();
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