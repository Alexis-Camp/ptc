<?php
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('inicio_sesion.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
<?php
//Incluye el diseño y la base de datos
include 'global/config.php';
include 'global/conexion.php';
//include 'carrito.php';
include 'templates/cabecera_español_admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Productos</title>
</head>
<body>
    <center><br/><br/>
<form action="proceso_guardar2.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre del producto...</label>
    <input type="text" name="nombre" class="form-control" placeholder="Nombre..." required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Precio de venta del producto</label>
    <input type="text" name="precio" class="form-control" placeholder="$50..." required>
  </div>
  <div class="form-group">
    <label for="exampleFormControltextarea">Descripción del producto</label>
    <textarea name="descripcion" class="form-control" rows="3" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlImagen">Imagen</label>
    <input type="file" name="imagen" class="form-control-file" required><br/>
    <button type="submit" name="enviar" class="btn btn-success">Guardar</button>
  </div>
</form>
    </center>
</body>
</html>

<?php include 'templates/pie.php'; ?>