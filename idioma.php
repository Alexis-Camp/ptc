<!---------------------------------- CODIGO PHP ----------------------------------------->
<?php
$page_title = 'Idioma';//TITULO DE LA PAGINA
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
  <?php include_once('layouts/encabezado.php');//INCLUYE EL INICIO DE PAGINA ?>

  <head>
  	<link rel="stylesheet" href="libs/css/estilos_idiomas.css">
  </head>
  <body>
  	<header>
  		<section class="textos-header">
  			<h1>Cambiar idioma</h1>
  			<h2>En esta opción usted puede seleccionar el idioma en el cual le gustaría observar nuestra página web</h2>
  		</section>
  		<div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
  			<path d="M-19.60,114.95 C150.00,150.00 351.74,-49.98 508.98,93.25 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ECF1F4;"></path>
  		</svg></div>
  	</header>
  	<!-------------------------------- CODIGO CARDS DONDE MUESTRA LOS IDIOMAS QUE SE PUEDEN SELECCIONAR -------------------------------------------->
  	<main>
  		<section class="miembros">
  			<div class="contenedor">
  				<h2 class="titulo">Por favor selecciona un idioma</h2>
  				<div class="cards">
  					<div class="card">
  						<img src="libs/images/315dcc8ef5db215fed939a226d61c9ab.jpg" alt="">
  						<br>
  						<h4>Español</h4>
  						<a href="idioma.php" class="boton">Seleccionar idioma</a>
  					</div>
  					<div class="card">
  						<img src="libs/images/bandera-estados-unidos-america_1401-253.jpg" alt="">
  						<br>
  						<h4>Ingles</h4>
  						<a href="language.php" class="boton">Seleccionar idioma</a>
  					</div>
  				</div>
  			</div>
  		</section>
  	</main>
  	<!----------------------------------------------- CODIGO FOOTER ------------------------------------------------------------------------>
  	<footer>
  		<div class="contenedor-footer">
  			<div class="content-foo">
  				<h4>Telefono</h4>
  				<p>7128-8501</p>
  			</div>
  			<div class="content-foo">
  				<h4>Email</h4>
  				<p>Jaibitasracing2020@gmail.com</p>
  			</div>
  			<div class="content-foo">
  				<h4>Ubicación</h4>
  				<p>10 Avenida Sur #2-2, Santa Tecla</p>
  			</div>
  		</div>
  		<h2 class="titulo-final">&copy; Jaibita's Racing El Salvador</h2>
  	</footer>
  </body>