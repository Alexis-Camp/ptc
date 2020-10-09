<?php
$page_title = 'Add employees';
  require_once('includes/load.php');//INCLUYE LOAD
    // Checkin What level user has permission to view this page
  page_require_level(2);
  $groups = find_all('user_groups');
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
<link href="libs/css/bootstrap-datepicker.css" rel="stylesheet">
<style>
	.content {
		margin-top: 80px;
	}
</style>
</head>
<body>
	<?php
	if(isset($_POST['add'])){
				$codigo		     = mysqli_real_escape_string($con,(strip_tags($_POST["codigo"],ENT_QUOTES)));//Escanpando caracteres 
				$nombres		     = mysqli_real_escape_string($con,(strip_tags($_POST["nombres"],ENT_QUOTES)));//Escanpando caracteres 
				$lugar_nacimiento	 = mysqli_real_escape_string($con,(strip_tags($_POST["lugar_nacimiento"],ENT_QUOTES)));//Escanpando caracteres 
				$fecha_nacimiento	 = mysqli_real_escape_string($con,(strip_tags($_POST["fecha_nacimiento"],ENT_QUOTES)));//Escanpando caracteres 
				$direccion	     = mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));//Escanpando caracteres 
				$telefono		 = mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));//Escanpando caracteres 
				$puesto		 = mysqli_real_escape_string($con,(strip_tags($_POST["puesto"],ENT_QUOTES)));//Escanpando caracteres 
				$estado			 = mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));//Escanpando caracteres 
				


				$cek = mysqli_query($con, "SELECT * FROM empleados WHERE codigo='$codigo'");
				if(mysqli_num_rows($cek) == 0){
					$insert = mysqli_query($con, "INSERT INTO empleados(codigo, nombres, lugar_nacimiento, fecha_nacimiento, direccion, telefono, puesto, estado)
						VALUES('$codigo','$nombres', '$lugar_nacimiento', '$fecha_nacimiento', '$direccion', '$telefono', '$puesto', '$estado')") or die(mysqli_error());
					if($insert){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Well done! The data has been saved successfully.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. Failed to save data!</div>';
					}

				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. code exite!</div>';
				}
			}
			?>
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>
							<span class="glyphicon glyphicon-cloud-upload"></span>
							<span>Add employees</span>
						</strong>
					</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="post">
								<div class="form-group">
									<label for="name">Code</label>
									<input type="text" class="form-control" name="codigo" placeholder="Code" required>
									</div>
									<div class="form-group">
										<label for="name">Name</label>				
										<input type="text" name="nombres" class="form-control" placeholder="Name" required>
									</div>
									<div class="form-group">
										<label for="name">Place of birth</label>
											<input type="text" name="lugar_nacimiento" class="form-control" placeholder="Place of birth" required>
									</div>
									<div class="form-group">
										<label for="fecha_nacimiento">Date of birth</label>
											<input type="text" name="fecha_nacimiento" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy" placeholder="00-00-0000" required>
									</div>
									<div class="form-group">
										<label for="direccion">Address</label>
											<textarea name="direccion" class="form-control" placeholder="Address"></textarea>
									</div>
									<div class="form-group">
										<label for="telefono">Telephone</label>
											<input type="text" name="Telephone" class="form-control" placeholder="Telephone" required>
									</div>
									<div class="form-group">
										<label for="name">Position</label>
											<input type="text" name="puesto" class="form-control" placeholder="Position" required>
									</div>
									<div class="form-group">
										<label for="estado">State</label>
											<select name="estado" class="form-control">
												<option value=""> ----- </option>
												<option value="1">Administrative</option>
												<option value="2">Sellers</option>

												<option value="3">Painters</option>
											</select>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">&nbsp;</label>
										<div class="form-group clearfix">
											<input type="submit" name="add" class="btn btn-success" value="Save">
											<a href="employees.php" class="btn btn-danger">Cancel</a>
										</div>
									</div>
								</form>
							</div>
						</div>

						<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
						<script src="js/bootstrap.min.js"></script>
						<script src="js/bootstrap-datepicker.js"></script>
						<script>
							$('.date').datepicker({
								format: 'dd-mm-yyyy',
							})
						</script>
					</body>
					</html>
