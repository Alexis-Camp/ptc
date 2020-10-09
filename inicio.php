<?php
  $page_title = 'Menú Principal';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/encabezado.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>Esta es su nueva página de inicio</h1>
         <br>

         <h4>¿Ya lleno nuestro formulario de cliente?</h4>
         <a href="inicio.php" class="btn btn-primary">Si</a>
         <a href="agregar_cliente2.php" class="btn btn-primary">No</a>
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
