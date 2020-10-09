<!---------------------------------- CODIGO PHP ----------------------------------------->
<?php
  $page_title = 'Employees';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(2);
  $products = join_product_table();
?>
  <?php include_once('layouts/header.php');//INCLUYE EL INICIO DE PAGINA ?>

  <?php
  include("includes/conexion.php");
  ?>
 </head>
 <body>
   <div class="row">
    <div class="col-md-12">
     <div class="panel panel-default">
      <div class="panel-heading clearfix">
       <strong>
        <span class="glyphicon glyphicon-th-list"></span>
        <span>Employees</span>
      </strong>
      <a href="add_employee.php" class="btn btn-info pull-right">Add employees</a>
    </div>

    <?php
    if(isset($_GET['aksi']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
     $nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
     $cek = mysqli_query($con, "SELECT * FROM empleados WHERE codigo='$nik'");
     if(mysqli_num_rows($cek) == 0){
      echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No data found.</div>';
    }else{
      $delete = mysqli_query($con, "DELETE FROM empleados WHERE codigo='$nik'");
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
     <option value="0">Employee data filters</option>
     <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
     <option value="1" <?php if($filter == 'Tetap'){ echo 'selected'; } ?>>Administrative</option>
     <option value="2" <?php if($filter == 'Kontrak'){ echo 'selected'; } ?>>Sellers</option>
     <option value="3" <?php if($filter == 'Outsourcing'){ echo 'selected'; } ?>>Painters</option>
   </select>
 </div>
</form>
<br />
<div class="panel-body">
 <table class="table table-bordered table-striped">
  <tr>
   <th class="text-center" style="width: 50px;">#</th>
   <th class="text-center" style="width: 15%;">Code</th>
   <th class="text-center" style="width: 15%;">Name</th>
   <th class="text-center" style="width: 15%;">Place of birth</th>
   <th class="text-center" style="width: 15%;">Date of birth</th>
   <th class="text-center" style="width: 15%;">Address</th>
   <th class="text-center" style="width: 15%;">Telephone</th>
   <th class="text-center" style="width: 15%;">Position</th>
   <th class="text-center" style="width: 10%;">State</th>
   <th class="text-center" style="width: 100px;">Actions</th>
 </tr>
 <?php
 if($filter){
   $sql = mysqli_query($con, "SELECT * FROM empleados WHERE estado='$filter' ORDER BY codigo ASC");
 }else{
   $sql = mysqli_query($con, "SELECT * FROM empleados ORDER BY codigo ASC");
 }
 if(mysqli_num_rows($sql) == 0){
   echo '<tr><td colspan="8">There is no data.</td></tr>';
 }else{
   $no = 1;
   while($row = mysqli_fetch_assoc($sql)){
    echo '
    <tr>
    <td class="text-center">'.$no.'</td>
    <td class="text-center">'.$row['codigo'].'</td>
    <td class="text-center"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['nombres'].'</td>
    <td class="text-center">'.$row['lugar_nacimiento'].'</td>
    <td class="text-center">'.$row['fecha_nacimiento'].'</td>
    <td class="text-center">'.$row['direccion'].'</td>
    <td class="text-center">'.$row['telefono'].'</td>
    <td class="text-center">'.$row['puesto'].'</td>
    <td class="text-center">';
    if($row['estado'] == '1'){
     echo '<span class="label label-success">Administrative</span>';
   }
   else if ($row['estado'] == '2' ){
     echo '<span class="label label-info">Sellers</span>';
   }
   else if ($row['estado'] == '3' ){
     echo '<span class="label label-warning">Painters</span>';
   }
   echo '
   </td>
   <td>
   
   <a href="employees.php?aksi=delete&nik='.$row['codigo'].'" title="Remove" onclick="return confirm(\'Are you sure to delete the data'.$row['nombres'].'?\')" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
      title: 'Are you sure you want to delete the data?',
      text: "You will not be able to retrieve this information!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Remove'
    }).then((result) => {
      if (result.value) {
        Swal.fire(
          'Deleted data!',
          'Your data has been successfully deleted!',
          'success'
          )
      }
    })

    function Success(){
      Swal.fire({
        position: 'top-end',
        icon: 'Deleted data!',
        title: 'Your data has been successfully deleted!',
        showConfirmButton: false,
        timer: 1500
      })
    }
  }
</script>
</body>
</html>
