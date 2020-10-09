<?php
$page_title = 'Form';
  require_once('includes/load.php');//INCLUYE LOAD
    // Checkin What level user has permission to view this page
  page_require_level(3);
  $groups = find_all('user_groups');
  ?>
  <?php include_once('layouts/header.php');//INCLUYE EL INICIO DE PAGINA ?>
  <?php
  include("includes/conexion.php");
  ?>

  <body>
  	<?php
  	if(isset($_POST['add'])){
		    	$nit	 = mysqli_real_escape_string($con,(strip_tags($_POST["nit"],ENT_QUOTES)));//Escanpando caracteres
				$nombres = mysqli_real_escape_string($con,(strip_tags($_POST["nombres"],ENT_QUOTES)));//Escanpando caracteres  
				$telefono		 = mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));//Escanpando caracteres 
				$estado			 = mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));//Escanpando caracteres
				$placa			 = mysqli_real_escape_string($con,(strip_tags($_POST["placa"],ENT_QUOTES)));//Escanpando caracteres
				$marca			 = mysqli_real_escape_string($con,(strip_tags($_POST["marca"],ENT_QUOTES)));//Escanpando caracteres
				$modelo			 = mysqli_real_escape_string($con,(strip_tags($_POST["modelo"],ENT_QUOTES)));//Escanpando caracteres
				$ano			 = mysqli_real_escape_string($con,(strip_tags($_POST["ano"],ENT_QUOTES)));//Escanpando caracteres
				$color			 = mysqli_real_escape_string($con,(strip_tags($_POST["color"],ENT_QUOTES)));//Escanpando caracteres
				$colornew			 = mysqli_real_escape_string($con,(strip_tags($_POST["colornew"],ENT_QUOTES)));//Escanpando caracteres
				$descripcion			 = mysqli_real_escape_string($con,(strip_tags($_POST["descripcion"],ENT_QUOTES)));//Escanpando caracteres

				$cek = mysqli_query($con, "SELECT * FROM formulario1 WHERE nit='$nit'");
				if(mysqli_num_rows($cek) == 0){
					$insert = mysqli_query($con, "INSERT INTO formulario1(nit, nombre, telefono, estado, placa, marca, modelo, ano, color_actual, color_nuevo, descripcion)
						VALUES('$nit','$nombres', '$telefono', '$estado', '$placa', '$marca', '$modelo', '$ano', '$color', '$colornew', '$descripcion')") or die(mysqli_error());
					if($insert){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Well done! The data has been saved successfully.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. Failed to save data!</div>';
					}

				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. DUI number exits!</div>';
				}
			}
			?>
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>
							<span class="glyphicon glyphicon-cloud-upload"></span>
							<span>Painting Service Form</span>
						</strong>
					</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="post">
								<div class="form-group">
									<label for="name">Nit registered owner</label>				
									<input type="text" name="nit" class="form-control" placeholder="Nit registered owner" required>
								</div>
								<div class="form-group">
									<label for="name">Full name</label>				
									<input type="text" name="nombres" class="form-control" placeholder="Full name" required>
								</div>
								<div class="form-group">
									<label for="telefono">Telephone</label>
									<input type="text" name="telefono" class="form-control" placeholder="Telephone" required>
								</div>
								<div class="form-group">
									<label for="estado">Vehicle status</label>
									<select name="estado" class="form-control">
										<option value=""> ----- </option>
										<option value="1">Good</option>
										<option value="2">Bad</option>
									</select>
								</div>	
								<div class="form-group">
									<label for="direccion">License plate number</label>
									<input type="text" name="placa" class="input-group date form-control"  placeholder="license plate number" required>
								</div>	
								<div class="form-group">
									<label for="direccion">Vehicle brand</label>
									<input type="text" name="marca" class="input-group date form-control"  placeholder="Vehicle brand" required>
								</div>	
								<div class="form-group">
									<label for="direccion">Vehicle model</label>
									<input type="text" name="modelo" class="input-group date form-control"  placeholder="Vehicle model" required>
								</div>
								<div class="form-group">
									<label for="direccion">Vehicle year</label>
									<input type="text" name="ano" class="input-group date form-control"  placeholder="Vehicle year" required>
								</div>		
								<div class="form-group">
									<label for="direccion">Current vehicle color</label>
									<input type="text" name="color" class="input-group date form-control"  placeholder="Current vehicle color" required>
								</div>	
								<div class="form-group">
									<label for="direccion">New vehicle color</label>
									<input type="text" name="colornew" class="input-group date form-control"  placeholder="New vehicle color" required>
								</div>			
								<div class="form-group">
									<label for="direccion">Description</label>
									<textarea name="descripcion" class="form-control" placeholder="Description"></textarea>
								</div>	
								<div class="form-group">
									<label class="col-sm-3 control-label">&nbsp;</label>
									<div class="form-group clearfix">
										<input type="submit" name="add" class="btn btn-success" value="Save">
										<a href="services.php" class="btn btn-danger">Cancel</a>
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
