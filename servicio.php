<!---------------------------------- CODIGO PHP ----------------------------------------->
<?php
$page_title = 'Menú Principal';
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
  <?php include_once('layouts/encabezado.php');//INCLUYE EL INICIO DE PAGINA ?>
  <!----------------------------------------- INICIO CUERPO HTML ---------------------------------------------------------------------->

<head>
    <!--Poner icono en parte superior de pestana-->
    <link rel="shortcut icon" href="libs/images/Logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="libs/css/estilo_servicio.css">
</head>
<!--------------------------------------- CODIGO BANNER Y NAVBAR -------------------------------------------------------------------------->

<body>
    <header>
        <div class="textos">
            <h1 class="titulo">Jaibita's Racing El Salvador</h1>
            <h3 class="subtitulo">Conoce alguno de nuestros servicios en línea </h3>
        </div>
        <div class="sesgoabajo"></div>
    </header>
    <!------------------------------------- CODIGO DE INFORMACION SOBRE NOSOTROS --------------------------------------------------------------->
    <main>
        <section class="acerca-de">
            <div class="contenedor">
                <h2 class="sobre-nosotros" id="sobre_nosotros">Nuestros servicios en línea</h2>
                <h3 class="slogan">Conoce alguno de nuestros servicios en línea</h3>
            </div>
        </section>
        <!---------------------------------- CODIGO DE CARDS DONDE MUESTRA LAS OPCIONES DEL USUARIO ----------------------------->
        <main>
            <section class="miembros">
                <div class="contenedor">
                    <div class="cards">
                        <div class="card">
                            <img src="libs/images/reparar.png" alt="">
                            <br>
                            <h4>Enderezado y pintura</h4>
                            <br>
                            <p>Te ofrecemos el enderezado y pintado de tu vehículo a un excelente precio, disponemos de un taller en el que puedes dejar tu vehículo en las mejores manos.</p>
                            <a href="formulario_pintura.php" class="boton">Llenar Formularios</a>
                        </div>
                        <div class="card">
                            <img src="libs/images/asientos.png" alt="">
                            <br>
                            <h4>Forros de autos</h4>
                            <br>
                            <p>Especialistas en Asientos de Cuero para Todo Tipo de Vehículos, confección de Todo Tipo de Forros de Asientos para Autos a la Medida</p>
                            <a href="formulario_forro.php" class="boton">Llenar Formularios</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!------------------------------------------- CODIGO FOOTER ----------------------------------------------------------------------------->
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
    </main>
</body>

