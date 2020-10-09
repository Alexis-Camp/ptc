<?php
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('inicio_sesion.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
<?php 
include 'templates/cabecera_español_admin.php';
?>
</br></br>
<form action="proceso_eliminar2.php" method="POST">
<div align="center">
<h3>Porfavor ingresa el ID del producto que deseas eliminar</h3></br>
<input name="id" class="form-control form-control-sm 15px" type="text" required ></br>
<button type="submit" class="btn btn-danger" name="btnEliminar" value="Delete">Eliminar</button>
</div>
</form>
</br></br>
<?php include 'templates/pie.php'; ?>