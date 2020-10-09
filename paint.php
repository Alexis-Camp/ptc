<!---------------------------------- CODIGO PHP ----------------------------------------->
<?php
  $page_title = 'Manage forms';
  require_once('includes/load.php');
  include("includes/conexion.php");
  // Checkin What level user has permission to view this page
   page_require_level(2);
  $products = join_product_table();

  if(isset($_GET['aksi']) == 'delete'){
        // escaping, additionally removing everything that could be (html/javascript-) code
     $nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
     $cek = mysqli_query($con, "SELECT * FROM formulario1 WHERE nit='$nik'");
     if(mysqli_num_rows($cek) == 0){
      echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No data found.</div>';
    }else{
      $delete = mysqli_query($con, "DELETE FROM formulario1 WHERE nit='$nik'");
      if($delete){
       echo '<div class="alert alert-success alert-dismissable" onclick="Success()"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data successfully deleted.</div>';
     }else{
       echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, the data could not be deleted.</div>';
     }
   }
 }
?>
  <?php include_once('layouts/header.php');//INCLUYE EL INICIO DE PAGINA ?>

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
 <br/>
 <form class="form-inline" method="get">
   <div class="form-group">
    <select name="filter" class="form-control" onchange="form.submit()">
     <option value="0">Data filters according to state</option>
     <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
     <option value="1" <?php if($filter == 'Tetap'){ echo 'selected'; } ?>>Good</option>
     <option value="2" <?php if($filter == 'Kontrak'){ echo 'selected'; } ?>>Bad</option>
   </select>
 </div>
</form>
<br />
<div class="panel-body">
 <table class="table table-bordered table-striped">
  <tr>
   <th class="text-center" style="width: 50px;">#</th>
   <th class="text-center" style="width: 15%;">Owner's Nit</th>
   <th class="text-center" style="width: 15%;">Name</th>
   <th class="text-center" style="width: 15%;">Telephone</th>
   <th class="text-center" style="width: 10%;">Status</th>
   <th class="text-center" style="width: 15%;">license plate number</th>
   <th class="text-center" style="width: 15%;">Brand</th>
   <th class="text-center" style="width: 15%;">Model</th>
   <th class="text-center" style="width: 15%;">Year</th>
   <th class="text-center" style="width: 15%;">Current color</th>
   <th class="text-center" style="width: 15%;">Description</th>
   <th class="text-center" style="width: 100px;">Actions</th>
 </tr>
 <?php
 if($filter){
   $sql = mysqli_query($con, "SELECT * FROM formulario1 WHERE estado='$filter' ORDER BY nit ASC");
 }else{
   $sql = mysqli_query($con, "SELECT * FROM formulario1 ORDER BY nit ASC");
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
    <td class="text-center">';
    if($row['estado'] == '1'){
      echo '<span class="label label-success">Good</span>';
   }
   else if ($row['estado'] == '2' ){
     echo '<span class="label label-info">Bad</span>';
   }
   echo '
   </td>
   <td class="text-center">'.$row['placa'].'</td>
   <td class="text-center">'.$row['marca'].'</td>
   <td class="text-center">'.$row['modelo'].'</td>
   <td class="text-center">'.$row['ano'].'</td>
   <td class="text-center">'.$row['color_actual'].'</td>
   <td class="text-center">'.$row['descripcion'].'</td>

   <td class="text-center">

   <a href="paint.php?aksi=delete&nik='.$row['nit'].'" title="Remove" onclick="return confirm(\'Are you sure to delete the data '.$row['nombre'].'?\')" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
</body>
</html>
<!--<a href="edit_empleado.php?nik='.$row['codigo'].'" title="Editar datos" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>-->