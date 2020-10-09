<!---------------------------------- CODIGO PHP ----------------------------------------->
<?php
$page_title = 'About us';//TITULO DE LA PAGINA
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
  <?php include_once('layouts/header.php');//INCLUYE EL INICIO DE PAGINA ?>

  <head>
    <!--Poner icono en parte superior de pestana-->
    <link rel="shortcut icon" href="libs/images/Logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="libs/css/estilo_acercade.css">
  </head>
  <!-------------------------- INICIO DE PAGINA ------------------------------->
  <body>
    <header>
        <div class="textos">
            <h1 class="titulo">Jaibita's Racing El Salvador</h1>
            <h3 class="subtitulo">Sale of automotive products</h3>
            <a href="#sobre_nosotros" class="boton">About Us</a>
        </div>
        <div class="sesgoabajo"></div>
    </header>
<!------------------------------------- CODIGO DE INFORMACION SOBRE NOSOTROS --------------------------------------------------------------->
    <main>
        <section class="acerca-de">
            <div class="contenedor">
                <h2 class="sobre-nosotros" id="sobre_nosotros">About Us</h2>
                <h3 class="slogan">History</h3>
                <p class="parrafo">Jaibita's Racing is structured based on the company Pinturas Orellana, the quality begins thanks to the passion and creativity that Pedro Orellana, head of that company. This idea was born in 2017 due to the unemployment of its creator, after a few months of its elaboration it is launched at the service of its community on April of the same year.</p>
                <p class="parrafo">Jaibita’s Racing is a nationwide automotive product and service sales company, which has highly trained personnel willing to do their best.</p>
            </div>
        </section>
<!------------------------------------------ CODIGO DE GALERIA -------------------------------------------------------------------------------->
        <section class="galeria">
            <div class="sesgoarriba"></div>
            <div class="imagenes none">
                <img src="libs/images/445ec132f1dbb6296dab9d026ab4234d.jpg" alt="">
            </div>
            <div class="imagenes">
                <img src="libs/images/PICT0957.jpg" alt="">
            </div>
            <div class="imagenes">
                <img src="libs/images/auto7.png" alt="">
                <div class="encima">
                    <h2>Jaibita's Racing</h2>
                    <div></div>
                </div>
            </div>
            <div class="imagenes">
                <img src="libs/images/cambiar-la-pintura-de-auto-01-77c7.png" alt="">
            </div>
            <div class="imagenes none">
                <img src="libs/images/5b98444def8d8.jpeg" alt="">
            </div>
            <div class="sesgoabajo"></div>
        </section>
<!-------------------------------------------------- CODIGO CARDS DE EQUIPO DE TRABAJO --------------------------------------------------->
        <section class="miembros">
            <div class="contenedor">
                <h2 class="sobre-nosotros">Our team</h2>
                <h3 class="slogan">Meet the people who make it possible the maintenance of our page</h3>
                <div class="cards">
                    <div class="card">
                        <img src="libs/images/myAvatar%20(1).png" alt="">
                        <h4>Carlos Beltrán</h4>
                        <p>Full stack developer</p>
                        <br>
                        <p>Responsible for the development of our website both in design and functionality</p>
                        <br>
                        <p>carlosbeltran04@gmail.com</p>
                    </div>
                    <div class="card">
                        <img src="libs/images/myAvatar%20(4).png" alt="">
                        <h4>Guillermo Flores</h4>
                        <p>Frontend Developer</p>
                        <br>
                        <p>Responsible for the design of our website</p>
                        <br>
                        <p>guillechep@gmail.com</p>
                    </div>
                    <div class="card">
                        <img src="libs/images/myAvatar%20(3).png" alt="">
                        <h4>Alexis Campos</h4>
                        <p>Backend Developer</p>
                        <br>
                        <p>On charge of the functionality of our website</p>
                        <br>
                        <p>nestorjacobo71@gmail.com</p>
                    </div>
                </div>
            </div>
        </section>
<!----------------------------------------------- SECCION DE NUESTROS PATROCINADORES ------------------------------------------------------->
        <section class="fondo">
            <div class="sesgoarriba"></div>
            <div class="contenedor">
                <h2 class="titulo-patrocinadores">Our Sponsors</h2>
                <h3 class="subtitulo-patrocinadores">Meet some of our sponsors</h3>
                <div class="clientes">
                    <div class="cliente"><img src="libs/images/unnamed.jpg" alt=""></div>
                    <div class="cliente"><img src="libs/images/logo-pintuco-600x328.png" alt=""></div>
                    <div class="cliente"><img src="libs/images/logo.png" alt=""></div>
                </div>
                <h3 class="subtitulo-patrocinadores especial">And a lot more sponsors...</h3>
            </div>
        </section>
    </main>
<!----------------------------------------------- CODIGO FOOTER ----------------------------------------------------------------------------->
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
</body>
  <?php include_once('layouts/footer.php'); ?>
