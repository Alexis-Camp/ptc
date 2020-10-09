<!---------------------------------- CODIGO PHP ----------------------------------------->
<?php
$page_title = 'Services';//TITULO DE LA PAGINA
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
  <?php include_once('layouts/header.php');//INCLUYE EL INICIO DE PAGINA ?>

  <head>
        <!--Poner icono en parte superior de pestana-->
    <link rel="shortcut icon" href="libs/images/Logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="libs/css/estilo_servicio.css">
  </head>
  <!-------------------------- INICIO DE PAGINA ------------------------------->
  <body>
    <header>
      <div class="textos">
        <h1 class="titulo">Jaibita's Racing El Salvador</h1>
        <h3 class="subtitulo">Get to know some of our online services</h3>
      </div>
      <div class="sesgoabajo"></div>
    </header>
    <!------------------------------------- CODIGO DE INFORMACION SOBRE NOSOTROS --------------------------------------------------------------->
    <main>
      <section class="acerca-de">
        <div class="contenedor">
          <h2 class="sobre-nosotros" id="sobre_nosotros">Our online services</h2>
          <h3 class="slogan">Get to know some of our online services</h3>
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
                <h4>Body Shop</h4>
                <br>
                <p>We offer you the straightening and painting of your vehicle at an affordable price, we have a workshop where you can leave your vehicle in the best hands.</p>
                <a href="painting_form.php" class="boton">Fill in the forms</a>
              </div>
              <div class="card">
                <img src="libs/images/asientos.png" alt="">
                <br>
                <h4>Car linings</h4>
                <br>
                <p>Specialists in leather seats for all types of vehicles, making all kinds of custom seat covers for cars</p>
                <a href="lining_form.php" class="boton">Fill in the forms</a>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!------------------------------------------- CODIGO FOOTER ----------------------------------------------------------------------------->
      <footer>
        <div class="contenedor-footer">
          <div class="content-foo">
            <h4>Phone</h4>
            <p>7128-8501</p>
          </div>
          <div class="content-foo">
            <h4>Email</h4>
            <p>Jaibitasracing2020@gmail.com</p>
          </div>
          <div class="content-foo">
            <h4>Location</h4>
            <p>10 Avenida Sur #2-2, Santa Tecla</p>
          </div>
        </div>
        <h2 class="titulo-final">&copy; Jaibita's Racing El Salvador</h2>
      </footer>
    </main>
  </body>
  <?php include_once('layouts/footer.php'); ?>
