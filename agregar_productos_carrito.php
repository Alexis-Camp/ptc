<?php
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('login_v2.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
<?php
//Incluye el diseño y la base de datos
include 'global/config.php';
include 'global/conexion.php';
//include 'carrito.php';
include 'templates/cabecera_ingles_admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>
</head>
<body>
    <center><br/><br/>
<form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Product name...</label>
    <input type="text" name="nombre" class="form-control" placeholder="Name..." required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Price of the product</label>
    <input type="text" name="precio" class="form-control" placeholder="$50..." required>
  </div>
  <div class="form-group">
    <label for="exampleFormControltextarea">Description of the product</label>
    <textarea name="descripcion" class="form-control" rows="3" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlImagen">Upload Image</label>
    <input type="file" name="imagen" class="form-control-file" required><br/>
    <button type="submit" name="enviar" class="btn btn-success">Success</button>
  </div>
</form>
    </center>
</body>
</html>

<?php include 'templates/pie.php'; ?>