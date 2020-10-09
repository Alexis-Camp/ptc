<?php
$page_title = 'Formulario';
  require_once('includes/load.php');//INCLUYE LOAD
    // Checkin What level user has permission to view this page
  page_require_level(3);
  $groups = find_all('user_groups');
  ?>
  <?php include_once('layouts/encabezado.php');//INCLUYE EL INICIO DE PAGINA ?>
  <?php
  include("includes/conexion.php");
  ?>
  <!DOCTYPE html>
  <html lang="es">
  <head>

  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Latihan MySQLi</title>

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
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
					}

				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. numero de DUI exite!</div>';
				}
			}
			?>
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>
							<span class="glyphicon glyphicon-cloud-upload"></span>
							<span>Formulario Servicio Pintura</span>
						</strong>
					</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="post">
								<div class="form-group">
									<label for="name">Nit propietario inscrito</label>				
									<input type="text" name="nit" class="form-control" placeholder="NIT PROPIETARIO INSCRITO" required>
								</div>
								<div class="form-group">
									<label for="name">Nombre Completo</label>				
									<input type="text" name="nombres" class="form-control" placeholder="Nombre Completo" required>
								</div>
								<div class="form-group">
									<label for="telefono">Teléfono</label>
									<input type="text" name="telefono" class="form-control" placeholder="Teléfono" required>
								</div>
								<div class="form-group">
									<label for="estado">Estado del vehiculo</label>
									<select name="estado" class="form-control">
										<option value=""> ----- </option>
										<option value="1">Bueno</option>
										<option value="2">Malo</option>
									</select>
								</div>	
								<div class="form-group">
									<label for="direccion">Número de placa</label>
									<input type="text" name="placa" class="input-group date form-control"  placeholder="Número de placa" required>
								</div>	
								<div class="form-group">
									<label for="direccion">Marca del vehículo</label>
									<input type="text" name="marca" class="input-group date form-control"  placeholder="Marca del vehículo" required>
								</div>	
								<div class="form-group">
									<label for="direccion">Modelo del vehículo</label>
									<input type="text" name="modelo" class="input-group date form-control"  placeholder="Modelo del vehículo" required>
								</div>
								<div class="form-group">
									<label for="direccion">Año del vehículo</label>
									<input type="text" name="ano" class="input-group date form-control"  placeholder="Año del vehículo" required>
								</div>		
								<div class="form-group">
									<label for="direccion">Color actual del vehículo</label>
									<input type="text" name="color" class="input-group date form-control"  placeholder="Color actual del vehículo" required>
								</div>	
								<div class="form-group">
									<label for="direccion">Color nuevo del vehículo</label>
									<input type="text" name="colornew" class="input-group date form-control"  placeholder="Color nuevo del vehículo" required>
								</div>			
								<div class="form-group">
									<label for="direccion">Descripción</label>
									<textarea name="descripcion" class="form-control" placeholder="Descripción"></textarea>
								</div>	
								<div class="form-group">
									<label class="col-sm-3 control-label">&nbsp;</label>
									<div class="form-group clearfix">
										<input type="submit" name="add" class="btn btn-success" value="Guardar datos">
										<a href="servicio.php" class="btn btn-danger">Cancelar</a>
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
