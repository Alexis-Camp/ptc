<!---------------------------------- CODIGO PHP ----------------------------------------->
<?php
$page_title = 'Main Menu';
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
  <?php include_once('layouts/header.php');//INCLUYE EL INICIO DE PAGINA ?>
  <!-------------------------------- INICIO CODIGO HTML ---------------------------------->
  <head>
    <!--Poner icono en parte superior de pestana-->
    <link rel="shortcut icon" href="libs/images/Logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="libs/css/estilo_menuclientes.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<!---------------------------- CODIGO BANNER Y NAVBAR ---------------------------------------------------------------------------------->
<body>
    <header>
        <nav>
            <a href="index2.php">Home</a>
            <a href="about_us2.php">About us</a>
            <a href="services2.php">Services</a>
            <a href="language2.php">Language</a>
            <a href="Login.php">Login</a>
        </nav>
        <section class="textos-header">
            <h1>Welcome to Jaibita's Racing El Salvador</h1>
            <h2>With the best powerful website</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-19.60,114.95 C150.00,150.00 351.74,-49.98 508.98,93.25 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
<!-------------------------------------------- CODIGO INFORMACION SOBRE MISION Y VISION ----------------------------------------------------->   
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Jaibita's Racing</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="libs/images/undraw_pitching_36ol.svg" alt="" class="imagen-about-us">
                <div class="contenidos-textos">
                    <h3><span>1</span>Mission</h3>
                    <p>"Fascinate our customers, partners, investors and the entire community around us, through our products, services and benefits."</p>
                    <h3><span>2</span>Vision</h3>
                    <p>"To be a leader in automotive painting at a regional level, complying with the highest quality standards, with a committed staff and the best technology."</p>
                </div>
            </div>
        </section>
<!-------------------------------------- CODIGO GALERIA SERVICIOS ----------------------------------------------------------------------->        
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Our Products</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="libs/images/porsche-4891966_1920.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="libs/images/comercio-electronico.png" alt="">
                            <p>Automotive Products</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="libs/images/Pintura-Industrial-1-848x450.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="libs/images/comercio-electronico.png" alt="">
                            <p>Industrial Products</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="libs/images/Tipos-de-pinturas-para-madera.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="libs/images/comercio-electronico.png" alt="">
                            <p>Carpentry Products</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="libs/images/como-lijar-y-pintar-un-auto-3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="libs/images/comercio-electronico.png" alt="">
                            <p>Accessories</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!------------------------------------ CODIGO SOBRE NUESTROS JEFES --------------------------------------------------------------------->        
        <section class="clientes contenedor">
            <h2 class="titulo">What do our bosses say?</h2>
            <div class="cards">
                <div class="card">
                    <img src="libs/images/create-your-cartoon-style-flat-avatar-or-icon.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Nombre</h4>
                        <p>dmasfdijfdsfiodsfufsfdsfjkfjkadskjfdsljfkldsjfkldsjfkdsjfkldsjflkdsjlf</p>
                    </div>
                </div>
                <div class="card">
                    <img src="libs/images/97305655-avatar-icon-of-girl-in-a-wide-brim-felt-hat.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Nombre</h4>
                        <p>dmasfdijfdsfiodsfufsfdsfjkfjkadskjfdsljfkldsjfkldsjfkdsjfkldsjflkdsjlf</p>
                    </div>
                </div>
            </div>
        </section>
<!-------------------------------------- CODIGO SOBRE NUESTROS VALORES ------------------------------------------------------------->        
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Our Values</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="libs/images/undraw_sorting_thoughts_6d48.svg" alt="">
                        <h3>TRUST:</h3>
                        <p>We trust our abilities and those of others.</p>
                        <p>We have technical credibility and knowledge of our products to solve the needs of our clients.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="libs/images/undraw_growth_curve_8mqx.svg" alt="">
                        <h3>FAITH IN THE FUTURE</h3>
                        <p>We work hard today to make the future better.</p>
                        <p>Our personal and professional development allows the growth of our company and our country.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="libs/images/undraw_happy_announcement_ac67.svg" alt="">
                        <h3>SIMPLE AND FAST:</h3>
                        <p>Streamline processes.</p>
                        <p>We are fast and practical, we simplify the complex, and we always know how to solve the needs of our clients.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
<!--------------------------------------- CODIGO FOOTER ----------------------------------------------------------------------------->    
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
