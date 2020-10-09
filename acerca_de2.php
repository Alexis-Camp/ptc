<!---------------------------------- CODIGO PHP ----------------------------------------->
<?php
$page_title = 'Menú Principal';
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
  <?php include_once('layouts/encabezado.php');//INCLUYE EL INICIO DE PAGINA ?>
  <!------------------- INICIO CUERPO HTML --------------------------------------------------->
<head>
    <!--Poner icono en parte superior de pestana-->
    <link rel="shortcut icon" href="Imagenes/Logo.jpeg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="libs/css/estilo_acercade.css">
</head>
<!----------------- CODIGO BANNER Y NAVBAR ------------------------------------------------>

<body>
    <header>
        <div class="textos">
            <h1 class="titulo">Jaibita's Racing El Salvador</h1>
            <h3 class="subtitulo">Venta de productos automotriz</h3>
            <a href="#sobre_nosotros" class="boton">Sobre Nosotros</a>
        </div>
        <div class="sesgoabajo"></div>
    </header>
<!---------------------- CODIGO DE INFORMACION SOBRE NOSOTROS --------------------------------->
    <main>
        <section class="acerca-de">
            <div class="contenedor">
                <h2 class="sobre-nosotros" id="sobre_nosotros">Sobre nosotros</h2>
                <h3 class="slogan">Historia</h3>
                <p class="parrafo">Jaibita’s Racing se estructuro en base a la empresa Pinturas Orellana, la cual nació gracias a la pasión y creatividad de Pedro Orellana, jefe de dicha empresa. Esta idea nació en el año 2017 debido a el desempleo de su creador, tras algunos meses de su elaboración esta se lanza al servicio de su comunidad en el mes de abril del mismo año.</p>
                <p class="parrafo">Jaibita’s Racing es una empresa de ventas de productos y servicios automotriz a nivel nacional, la cual cuenta con un personal sumamente capacitado y dispuesto a dar lo mejor de sí.</p>
            </div>
        </section>
<!--------------------------- CODIGO DE GALERIA -------------------------------------->
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
<!--------------------- CODIGO CARDS DE EQUIPO DE TRABAJO -------------------------------->
        <section class="miembros">
            <div class="contenedor">
                <h2 class="sobre-nosotros">Nuestro equipo</h2>
                <h3 class="slogan">Conoce a las personas que hacen posible en mantenimiento de nuestra página</h3>
                <div class="cards">
                    <div class="card">
                        <img src="libs/images/myAvatar%20(1).png" alt="">
                        <h4>Carlos Beltrán</h4>
                        <p>Desarrollador Full stack</p>
                        <br>
                        <p>Encargado del desarrollo de nuestra página web tanto en el diseño como en la funcionalidad</p>
                        <br>
                        <p>carlosbeltran04@gmail.com</p>
                    </div>
                    <div class="card">
                        <img src="libs/images/myAvatar%20(4).png" alt="">
                        <h4>Guillermo Flores</h4>
                        <p>Desarrollador Frontend</p>
                        <br>
                        <p>Encargado del diseño de nuestra página web</p>
                        <br>
                        <p>guillechep@gmail.com</p>
                    </div>
                    <div class="card">
                        <img src="libs/images/myAvatar%20(3).png" alt="">
                        <h4>Alexis Campos</h4>
                        <p>Desarrollador Backend</p>
                        <br>
                        <p>Encargado de la funcionalidad de nuestra página web</p>
                        <br>
                        <p>nestorjacobo71@gmail.com</p>
                    </div>
                </div>
            </div>
        </section>
<!------------------- SECCION DE NUESTROS PATROCINADORES --------------------------->
        <section class="fondo">
            <div class="sesgoarriba"></div>
            <div class="contenedor">
                <h2 class="titulo-patrocinadores">Nuestros Patrocinadores</h2>
                <h3 class="subtitulo-patrocinadores">Conoce a algunos de nuestros patrocinadores</h3>
                <div class="clientes">
                    <div class="cliente"><img src="libs/images/unnamed.jpg" alt=""></div>
                    <div class="cliente"><img src="libs/images/logo-pintuco-600x328.png" alt=""></div>
                    <div class="cliente"><img src="libs/images/logo.png" alt=""></div>
                </div>
                <h3 class="subtitulo-patrocinadores especial">Y muchos más patrocinadores...</h3>
            </div>
        </section>
    </main>
<!--------------------- CODIGO FOOTER -------------------------->
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

</html>