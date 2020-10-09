<!---------------------------------- CODIGO PHP ----------------------------------------->
<?php
$page_title = 'Menú Principal';
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
  <?php include_once('layouts/encabezado.php');//INCLUYE EL INICIO DE PAGINA ?>
  <!-------------------------------- INICIO CODIGO HTML ---------------------------------->
  <head>
        <!--Poner icono en parte superior de pestana-->
    <link rel="shortcut icon" href="libs/images/Logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="libs/css/estilo_menuclientes.css">
  </head>
  <!------------------------- CODIGO DE MENSAJE DE BIENVENIDA ------------------------->
  <div class="row">
    <div class="col-md-12">
      <?php echo display_msg($msg); ?>
    </div>
    <!-------------------------- INICIO DE PAGINA ------------------------------->
    <body>
      <header>
        <section class="textos-header">
          <h1>Bienvenidos a Jaibita's Racing El Salvador</h1>
          <h2>Con la mejor pagina web potente</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
          <path d="M-19.60,114.95 C150.00,150.00 351.74,-49.98 508.98,93.25 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ECF1F4;"></path>
        </svg></div>
      </header>
      <!-------------------------------------------- CODIGO INFORMACION SOBRE MISION Y VISION ----------------------------------------------------->
      <main>
        <section class="contenedor sobre-nosotros">
          <h2 class="titulo">Jaibita's Racing</h2>
          <div class="contenedor-sobre-nosotros">
            <img src="libs/images/undraw_pitching_36ol.svg" alt="" class="imagen-about-us">
            <div class="contenidos-textos">
              <h3><span>1</span>Misión</h3>
              <p>"Fascinar a nuestros clientes, colavoradores, inversionistas y a toda la comunidad que nos rodea, a través de nuestros productos, servicios y beneficios"</p>
              <h3><span>2</span>Visión</h3>
              <p>"Ser líderez de la pintura automotriz a nivel regional cumpliendo con los más altos estandares de calidad, con un personal comprometido y la mejor tecnología."</p>
            </div>
          </div>
        </section>
        <!-------------------------------------- CODIGO GALERIA SERVICIOS ----------------------------------------------------------------------->
        <section class="portafolio">
          <div class="contenedor">
            <h2 class="titulo">Nuestros Productos</h2>
            <div class="galeria-port">
              <div class="imagen-port">
                <img src="libs/images/porsche-4891966_1920.jpg" alt="">
                <div class="hover-galeria">
                  <img src="libs/images/comercio-electronico.png" alt="">
                  <p>Producto Automotriz</p>
                </div>
              </div>
              <div class="imagen-port">
                <img src="libs/images/Pintura-Industrial-1-848x450.jpg" alt="">
                <div class="hover-galeria">
                  <img src="libs/images/comercio-electronico.png" alt="">
                  <p>Producto Industrial</p>
                </div>
              </div>
              <div class="imagen-port">
                <img src="libs/images/Tipos-de-pinturas-para-madera.jpg" alt="">
                <div class="hover-galeria">
                  <img src="libs/images/comercio-electronico.png" alt="">
                  <p>Producto Carpinteria</p>
                </div>
              </div>
              <div class="imagen-port">
                <img src="libs/images/como-lijar-y-pintar-un-auto-3.jpg" alt="">
                <div class="hover-galeria">
                  <img src="libs/images/comercio-electronico.png" alt="">
                  <p>Accesorios</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-------------------------------------- CODIGO SOBRE NUESTROS VALORES ------------------------------------------------------------->
        <section class="about-services">
          <div class="contenedor">
            <h2 class="titulo">Nuestros Valores</h2>
            <div class="servicio-cont">
              <div class="servicio-ind">
                <img src="libs/images/undraw_sorting_thoughts_6d48.svg" alt="">
                <h3>CONFIANZA:</h3>
                <p>Confiamos en nuestras capacidades y en las de otros.</p>
                <p>Contamos con credibilidad técnica y conocimiento de nuestros productos para solucionar las necesidades de nuestros clientes.</p>
              </div>
              <div class="servicio-ind">
                <img src="libs/images/undraw_growth_curve_8mqx.svg" alt="">
                <h3>FE EN EL FUTURO</h3>
                <p>Trabajamos con energía hoy para que el futuro sea mejor.</p>
                <p>Nuestro desarrollo personal y profesional permite el crecimiento de nuestra empresa y nuestro país.</p>
              </div>
              <div class="servicio-ind">
                <img src="libs/images/undraw_happy_announcement_ac67.svg" alt="">
                <h3>SIMPLE Y RÁPIDO:</h3>
                <p>Agilizar procesos.</p>
                <p>Somos rápidos y prácticos, simplificamos lo complejo y sabemos siempre resolver las necesidades de nuestros clientes.</p>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!--------------------------------------- CODIGO FOOTER ----------------------------------------------------------------------------->
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
    <?php include_once('layouts/footer.php'); ?>
