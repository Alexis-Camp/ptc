<?php
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('login_v2.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
<?php 
include 'templates/cabecera_ingles_admin.php';
?>
</br></br>
<form action="proceso_eliminar.php" method="POST">
<div align="center">
<h3>Enter the ID of the product you want to remove</h3></br>
<input name="id" class="form-control form-control-sm 15px" type="text" required ></br>
<button type="submit" class="btn btn-danger" name="btnEliminar" value="Delete">Delete</button>
</div>
</form>
</br></br>
<?php include 'templates/pie.php'; ?>