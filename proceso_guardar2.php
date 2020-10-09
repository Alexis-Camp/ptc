<?php
function agregar_productos(){

    $servername = "localhost";
    $database = "jaibitas_racing";
    $username = "root";
    $password = "";
    //create connection
    $conn = mysqli_connect($servername,$username,$password,$database);
    //Check connection
    if (!$conn){
        die("Coneection failed: " .mysqli_connect_error());
    }
    //echo "Coneccted";
    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $sql = "INSERT INTO tblproductos (Nombre,Precio,Descripcion,Imagen) VALUES ('$nombre','$precio','$descripcion','$imagen')";
    if (mysqli_query($conn, $sql)){
        echo "<script>
    Swal.fire(
        '¡Buen trabajo!',
        'El producto ha sido agregado',
        'succes'
      )
    </script>
    ";
    }else{
        echo "<script>
        Swal.fire(
            '¡Buen trabajo!',
            'El producto ha sido agregado',
            'succes'
          )
        </script>";
    }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar</title>
</head>
<body>
    <?php 
    agregar_productos();
    ?>
    <center><br/>
    <form action="proceso_guardar2.php" method="POST">
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