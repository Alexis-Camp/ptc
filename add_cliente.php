<?php
$page_title = 'Add Employees';
  require_once('includes/load.php');//INCLUYE LOAD
    // Checkin What level user has permission to view this page
  page_require_level(2);
  $groups = find_all('user_groups');
  ?>
  <?php include_once('layouts/header.php');//INCLUYE EL INICIO DE PAGINA ?>
  <?php
  include("includes/conexion.php");
  ?>
<body>
	<?php
	if(isset($_POST['add'])){
		    	$dui	 = mysqli_real_escape_string($con,(strip_tags($_POST["dui"],ENT_QUOTES)));//Escanpando caracteres
				$nombres = mysqli_real_escape_string($con,(strip_tags($_POST["nombres"],ENT_QUOTES)));//Escanpando caracteres  
				$telefono		 = mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));//Escanpando caracteres 
				$email = mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES)));
				$direccion = mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));//Escanpando caracteres  
				$estado			 = mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));//Escanpando caracteres
				
				$cek = mysqli_query($con, "SELECT * FROM clientes WHERE dui='$dui'");
				if(mysqli_num_rows($cek) == 0){
					$insert = mysqli_query($con, "INSERT INTO clientes(dui, nombres, telefono, email, direccion, estado)
						VALUES('$dui','$nombres', '$telefono', '$email', '$direccion', '$estado')") or die(mysqli_error());
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
							<span>Add Customers</span>
						</strong>
					</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="post">
								<div class="form-group">
									<label for="name">DUI</label>				
									<input type="text" name="dui" class="form-control" placeholder="DUI" required>
								</div>
								<div class="form-group">
									<label for="name">Name</label>				
									<input type="text" name="nombres" class="form-control" placeholder="Name" required>
								</div>
								<div class="form-group">
									<label for="telefono">Telephone</label>
									<input type="text" name="telefono" class="form-control" placeholder="Telephone" required>
								</div>
								<div class="form-group">
									<label for="fecha_nacimiento">Email</label>
									<input type="text" name="email" class="input-group date form-control" placeholder="Email" required>
								</div>
								<div class="form-group">
									<label for="direccion">Address</label>
									<textarea name="direccion" class="form-control" placeholder="Address"></textarea>
								</div>			
								<div class="form-group">
										<label for="estado">State</label>
											<select name="estado" class="form-control">
												<option value=""> ----- </option>
												<option value="1">Registered</option>
												<option value="2">Not registered</option>
											</select>
									</div>						
								<div class="form-group">
									<label class="col-sm-3 control-label">&nbsp;</label>
									<div class="form-group clearfix">
										<input type="submit" name="add" class="btn btn-success" value="Save">
										<a href="customers.php" class="btn btn-danger">Cancel</a>
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
