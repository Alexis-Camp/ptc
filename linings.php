<!---------------------------------- CODIGO PHP ----------------------------------------->
<?php
$page_title = 'Manage forms';
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('inicio_sesion.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>

  <?php include_once('layouts/header.php');//INCLUYE EL INICIO DE PAGINA ?>

  <?php
  include("includes/conexion.php");
  ?>
  <!DOCTYPE html>
  <html lang="es">
  <head>

  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <style>
      .content {
       margin-top: 80px;
     }
   </style>

 </head>
 <body>
   <div class="row">
    <div class="col-md-12">
     <div class="panel panel-default">
      <div class="panel-heading clearfix">
       <strong>
        <span class="glyphicon glyphicon-th-list"></span>
        <span>Forms</span>
      </strong>
    </div>

    <?php
    if(isset($_GET['aksi']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
     $nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
     $cek = mysqli_query($con, "SELECT * FROM formulario2 WHERE nit='$nik'");
     if(mysqli_num_rows($cek) == 0){
      echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No data found.</div>';
    }else{
      $delete = mysqli_query($con, "DELETE FROM formulario2 WHERE nit='$nik'");
      if($delete){
       echo '<div class="alert alert-success alert-dismissable" onclick="Success()"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data successfully deleted.</div>';
     }else{
       echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, the data could not be deleted.</div>';
     }
   }
 }
 ?>
 <br/>
 <form class="form-inline" method="get">
   <div class="form-group">
    <select name="filter" class="form-control" onchange="form.submit()">
     <option value="0">Data filters according to fabric</option>
     <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
     <option value="1" <?php if($filter == 'Tetap'){ echo 'selected'; } ?>>Leather</option>
     <option value="2" <?php if($filter == 'Kontrak'){ echo 'selected'; } ?>>Alcantara</option>
     <option value="3" <?php if($filter == 'Kontrak'){ echo 'selected'; } ?>>Vinyl</option>
     <option value="4" <?php if($filter == 'Kontrak'){ echo 'selected'; } ?>>Microfiber</option>
   </select>
 </div>
</form>
<br />
<div class="panel-body">
 <table class="table table-bordered table-striped">
  <tr>
   <th class="text-center" style="width: 50px;">#</th>
   <th class="text-center" style="width: 15%;">Owner's Nit</th>
   <th class="text-center" style="width: 15%;">Nombre</th>
   <th class="text-center" style="width: 15%;">Telephone</th>
   <th class="text-center" style="width: 15%;">License plate number</th>
   <th class="text-center" style="width: 15%;">Brand</th>
   <th class="text-center" style="width: 15%;">Model</th>
   <th class="text-center" style="width: 15%;">Year</th>
  <th class="text-center" style="width: 10%;">Fabric to use</th>
   <th class="text-center" style="width: 15%;">Description</th>
   <th class="text-center" style="width: 100px;">Actions</th>
 </tr>
 <?php
 if($filter){
   $sql = mysqli_query($con, "SELECT * FROM formulario2 WHERE tela='$filter' ORDER BY nit ASC");
 }else{
   $sql = mysqli_query($con, "SELECT * FROM formulario2 ORDER BY nit ASC");
 }
 if(mysqli_num_rows($sql) == 0){
   echo '<tr><td colspan="8">There is no data.</td></tr>';
 }else{
   $no = 1;
   while($row = mysqli_fetch_assoc($sql)){
    echo '
    <tr>
    <td class="text-center">'.$no.'</td>
    <td class="text-center">'.$row['nit'].'</td>
    <td class="text-center"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['nombre'].'</a></td>
    <td class="text-center">'.$row['telefono'].'</td>
   <td class="text-center">'.$row['placa'].'</td>
   <td class="text-center">'.$row['marca'].'</td>
   <td class="text-center">'.$row['modelo'].'</td>
   <td class="text-center">'.$row['ano'].'</td>
       <td class="text-center">';
    if($row['tela'] == '1'){
      echo '<span class="label label-success">Leather</span>';
   }
   else if($row['tela'] == '2'){
     echo '<span class="label label-info">Alcantara</span>';
   }
   else if($row['tela'] == '3'){
    echo '<span class="label label-warning">Vinyl</span>';
   }
   else if($row['tela'] == '4'){
    echo '<span class="label label-warning">Microfiber</span>';
   }
   echo '
   </td>
   <td class="text-center">'.$row['descripcion'].'</td>

   <td class="text-center">

   <a href="pintura.php?aksi=delete&nik='.$row['nit'].'" title="Remove" onclick="return confirm(\'Are you sure to delete the data '.$row['nombre'].'?\')" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
   </td>
   </tr>
   ';
   $no++;
 }
}
?>
</table>
</div>
</div>
</div>
</div>
<center>
	<p>&copy; Jaibita's Racing <?php echo date("Y");?></p>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="libs/js/bootstrap.min.js"></script>
<script type="text/javascript">
  function AlertaEliminacion(){
    Swal.fire({
      title: '¿Estas seguro de eliminar los datos?',
      text: "¡No podras recuperar esta información!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Eliminar'
    }).then((result) => {
      if (result.value) {
        Swal.fire(
          '¡Datos eliminados!',
          '¡Sus datos han sido eliminados exitosamente!',
          'success'
          )
      }
    })

    function Success(){
      Swal.fire({
        position: 'top-end',
        icon: '¡Datos eliminados!',
        title: '¡Sus datos han sido eliminados exitosamente!',
        showConfirmButton: false,
        timer: 1500
      })
    }
  }
</script>
</body>
</html>
<!--<a href="edit_empleado.php?nik='.$row['codigo'].'" title="Editar datos" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>-->