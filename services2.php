<!----------------------------------------- INICIO CUERPO HTML ---------------------------------------------------------------------->
<html>

<head>
    <title>Services</title>
    <!--Poner icono en parte superior de pestana-->
    <link rel="shortcut icon" href="libs/images/Logo.jpeg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="libs/css/estilo_servicio.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<!--------------------------------------- CODIGO BANNER Y NAVBAR -------------------------------------------------------------------------->

<body>
    <header>
        <nav>
            <a href="index2.php">Home</a>
            <a href="about_us2.php">About us</a>
            <a href="services2.php">Services</a>
            <a href="language2.php">Language</a>
            <a href="faqs2.php">FAQs</a>
            <a href="login_v2.php">Login</a>
        </nav>
        <div class="textos">
            <h1 class="titulo">Jaibita's Racing El Salvador</h1>
            <h3 class="subtitulo">
                Get to know some of our online services </h3>
        </div>
        <div class="sesgoabajo"></div>
    </header>
    <!------------------------------------- CODIGO DE INFORMACION SOBRE NOSOTROS --------------------------------------------------------------->
    <main>
        <section class="acerca-de">
            <div class="contenedor">
                <h2 class="sobre-nosotros" id="sobre_nosotros">
                    Our online services</h2>
                <h3 class="slogan">
                    Get to know some of our online services</h3>
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
                            <h4>
                                Body Shop</h4>
                            <br>
                            <p>
                                We offer you the straightening and painting of your vehicle at an affordable price, we have a workshop where you can leave your vehicle in the best hands.</p>
                            <a href="#" class="boton" onclick="Mensaje()">Fill in the forms</a>
                        </div>
                        <div class="card">
                            <img src="libs/images/asientos.png" alt="">
                            <br>
                            <h4>
                                Car linings</h4>
                            <br>
                            <p>
                                Specialists in leather seats for all types of vehicles, making all kinds of custom seat covers for cars</p>
                            <a href="#" class="boton" onclick="Mensaje()">Fill in the forms</a>
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
    
    <script>
        function Mensaje() {
            Swal.fire('This option is only enabled for register clients, please register to our website')
        }
    </script>
</body>

</html>