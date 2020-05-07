<?php 
    session_start(); 
    error_reporting(E_PARSE);
?>


<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Donde Estudio</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <!-- Arreglos CSS -->
    <link href="css/arreglos.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Donde Estudio</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Que Estudio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Acerca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#team">Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contactanos</a>
                    </li>
                    <?php 
                            if(!$_SESSION['nombreAdmin']==""){
                                echo ' 
                                    <li class="nav-item">
                                        <div class="btn-group" style="margin-top:8px;">
                                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-icon" data-toggle="dropdown">'.$_SESSION['nameAdmin'].'
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="admin/index.html">Administración</a>
                                                <a class="dropdown-item" href="#team">Opcion genial</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="procesos/logout.php">Cerrar Sesión</a>
                                            </div>
                                        </div>
                                    </li>
                                 ';
                            }else if(!$_SESSION['nombreUser']==""){
                                echo ' 
                                    <li class="nav-item">
                                        <div class="btn-group" style="margin-top:8px;">
                                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-icon" data-toggle="dropdown">'.$_SESSION['nameUser'].'
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="#team">Opcion genial</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="procesos/logout.php">Cerrar Sesión</a>
                                            </div>
                                        </div>
                                    </li>

                                    
                                 ';
                            }else{
                                echo ' 
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="iniciosesion.html">Inciar Sesión</a>
                                    </li>
                                 ';
                            }
                        ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bienvenido a nuestra pagina</div>
                <div class="intro-heading text-uppercase">Listo para el futuro</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Empezemos!</a>
            </div>
        </div>
    </header>

    <!-- Services -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Nuestros servicios actuales son los siguientes</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Tours</h4>
                    <p class="text-muted">Cada fin de año, ofrecemos tours por las distintas universidades de La Paz, para que pueda tomar la mejor desicion hacia su futuro. <br>Escribemos para más información.</p>
                    <a href="#contact"><button class="btn btn-primary" type="button">Contactanos</button></a>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Test de Aptitud</h4>
                    <p class="text-muted">Aun no sabes que estudiar, no te preocupes nuestro equipo desarrollo un test que te ayudara a ver que podrias estudiar y en que areas te manejas.</p>
                    <a href="cuestionario/Test.html"><button class="btn btn-primary" type="button">Toma la prueba</button></a>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Universidades</h4>
                    <p class="text-muted">Dale un vistazo a información acerca de las universidades disponibles en La Paz, Bolivia. <br><br><br></p>
                    <a href="#portfolio"><button class="btn btn-primary" type="button">Revisa</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light page-section" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Universidades</h2>
                    <h3 class="section-subheading text-muted">Navega y explora las diferentes universidades disponibles.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" id="logo-container" src="img/logosUni/emi2.png" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>EMI</h4>
                        <p class="text-muted">Escuela Militar de Ingeniería</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/logosUni/umsa.jpg" id="logo-container" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>UMSA</h4>
                        <p class="text-muted"> Universidad Mayor de San Andrés</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/logosUni/ucb.jpg" alt="" id="logo-container">
                    </a>
                    <div class="portfolio-caption">
                        <h4>UCB</h4>
                        <p class="text-muted">Universidad Católica Boliviana San Pablo</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/logosUni/unicen.jpg" alt="" id="logo-container">
                    </a>
                    <div class="portfolio-caption">
                        <h4>UNICEN</h4>
                        <p class="text-muted">Universidad Central </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/logosUni/upb.jpg" alt="" id="logo-container">
                    </a>
                    <div class="portfolio-caption">
                        <h4>UPB</h4>
                        <p class="text-muted">Universidad Privada Boliviana </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/logosUni/univalle.jpg" alt="" id="logo-container">
                    </a>
                    <div class="portfolio-caption">
                        <h4>UNIVALLE</h4>
                        <p class="text-muted">Universidad Privada del Valle</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="page-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Acerca de Nosotros</h2>
                    <h3 class="section-subheading text-muted">Aqui un poco de que es nuestra institucion</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>MISION</h4>
                                    <h4 class="subheading">Nuestra misión</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"> Nuestra misión es que cada estudiante pueda encontrar su carrera deseada en su universidad ideal.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>VISION</h4>
                                    <h4 class="subheading">Nuestra Vision</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Nuestra visión es convertirse en la herramienta por excelencia para la búsqueda de propuestas de formación educativa en La Paz-Bolivia</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>TRAYECTORIA</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>NACIMIENTO</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Por un
                                    <br>Mejor
                                    <br>Futuro!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="bg-light page-section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Nuestro increible equipo</h2>
                    <h3 class="section-subheading text-muted">Si gusta contactarnos personalmente.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/integrantes/tasha.jpeg" alt="">
                        <h4>Tasha Cuenca</h4>
                        <p class="text-muted">Promotora</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/integrantes/leo.jpeg" alt="">
                        <h4>Leo Beltran Sacari</h4>
                        <p class="text-muted">Contador</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/integrantes/raquel.jpeg" alt="">
                        <h4>Raquel Perez</h4>
                        <p class="text-muted">Gerente General</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="https://twitter.com/bubuth0630?s=08">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/profile.php?id=100005594680387">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://github.com/ebenezerr">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/integrantes/juampa.jpeg" alt="">
                        <h4>Juan Pablo Bedoya</h4>
                        <p class="text-muted">Jefe de Desarrollo</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">"Nuestro objetivo es ayudarlo a tomar una mejor decision. El mundo es oscuro y tu seras una lampara para las personas."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Contactanos</h2>
                    <h3 class="section-subheading text-muted">Tienes alguna duda, necesitas atencion personalizada, no dudes en escribirnos, estamos encantados en ayudarte.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Tu Nombre *" required="required" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Tu Correo Electronico *" required="required" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Tu Telefono *" required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Tu mensaje*" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Donde Estudio 2020</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://instagram.com/donde_estudio?igshid=oimo4xd0o3dn">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <!-- EMI -->

    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Escuela Militar de Ingenieria</h2>
                                <p class="item-intro text-muted">Puedes encontrarnos en:</p>
                                <!--<img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">-->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3824.815393804398!2d-68.0883420935948!3d-16.535414895386864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f212398c5d1b5%3A0x1e20bc0a1880e88c!2sEscuela%20Militar%20de%20Ingenier%C3%ADa%2C%20Av%20Rafael%20Pab%C3%B3n%2C%20La%20Paz!5e0!3m2!1ses-419!2sbo!4v1585793812149!5m2!1ses-419!2sbo" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="img-fluid tam"></iframe>
                                <p>La Escuela Militar de Ingeniería es un centro de estudios con especialidad en ingeniería de Bolivia. </p>

                                <ul class="list-inline">
                                    <li><b>Lugar:</b> EMI, Av Rafael Pabón, La Paz </li>
                                    <li><b>Costo:</b> 11 365 Bs.</li>
                                    <li><b>Teléfonos:</b> 2435266 - 2431641</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Cerrar</button>
                                <a href="universidades/emi.html"><button class="btn btn-primary" type="button">Mas informacion</button></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Universidad Mayor de San Andrés</h2>
                                <p class="item-intro text-muted">Puedes encontrarnos en:</p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3216.7767904692187!2d-68.13020029140215!3d-16.505191837386597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f206520793ddd%3A0x53f6df346cc69976!2sUniversidad%20Mayor%20de%20San%20Andres!5e0!3m2!1ses!2sbo!4v1588549968965!5m2!1ses!2sbo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                <p>La Universidad Mayor de San Andrés es la principal universidad pública del Estado Plurinacional de Bolivia.</p>
                                <ul class="list-inline">
                                    <li><b>Lugar:</b> J.J.Perez, La Paz</li>
                                    <li><b>Fundación:</b> 25 de octubre de 1830, La Paz</li>
                                    <li><b>Teléfono:</b> 2 2441963</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Cerrar</button>
                                <a href="universidades/umsa.html"><button class="btn btn-primary" type="button">Mas informacion</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Universidad Católica Boliviana</h2>
                                <p class="item-intro text-muted">Puedes encontrarnos en:</p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3216.476853387453!2d-68.11429697215662!3d-16.523211726863373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f20ee187a3103%3A0x2f2bb2b7df32a24d!2sUniversidad%20Cat%C3%B3lica%20Boliviana%20%22San%20Pablo%22%20Regional%20La%20Paz!5e0!3m2!1ses!2sbo!4v1588550916028!5m2!1ses!2sbo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                <p>La Universidad Católica Boliviana "San Pablo", es una universidad perteneciente al Sistema de la Universidad Boliviana, con sede principal en la ciudad de La Paz, Bolivia.</p>
                                <ul class="list-inline">
                                    <li><b>Lugar:</b> Av. 14 de Septiembre, Calle 2, La Paz </li>
                                    <li><b>Costo:</b> 11 365 Bs.</li>
                                    <li><b>Teléfonos:</b> 2 2782222</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="background-color: red; border-color:red;">
                                    <i class="fas fa-times" ></i>
                                    Cerrar</button>
                                <a href="universidades/ucb.html"><button class="btn btn-primary" type="button" style="background-color: #212529; border-color:#212529;">Mas informacion</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">UNICEN</h2>
                                <p class="item-intro text-muted">Puedes encontrarnos en:</p>
                                <!--<img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">-->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.5526304488653!2d-68.12086165009599!3d-16.49817528856128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2042864f2805%3A0x84159147002a59ff!2sUNICEN!5e0!3m2!1ses!2sbo!4v1588707452082!5m2!1ses!2sbo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                <p>UNICEN estableció en tres principales ciudades de Bolivia un modelo educativo comprometido con el futuro laboral de sus profesionales.</p>
                                <ul class="list-inline">
                                    <li><b>Lugar:</b> Av. Brasil, La Paz </li>
                                    <li><b>Costo:</b> 1 365 Bs.</li>
                                    <li><b>Teléfonos:</b> 60651455</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Cerrar</button>
                                <a href="universidades/unicen.html"><button class="btn btn-primary" type="button">Mas informacion</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Unuversidad Privada Boliviana</h2>
                                <p class="item-intro text-muted">Puedes encontrarnos en:</p>
                                <!--<img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">-->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.5526304488653!2d-68.12086165009599!3d-16.49817528856128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2042864f2805%3A0x84159147002a59ff!2sUNICEN!5e0!3m2!1ses!2sbo!4v1588707452082!5m2!1ses!2sbo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                <p>UNICEN estableció en tres principales ciudades de Bolivia un modelo educativo comprometido con el futuro laboral de sus profesionales.</p>
                                <ul class="list-inline">
                                    <li><b>Lugar:</b> Av. Brasil, La Paz </li>
                                    <li><b>Costo:</b> 1 365 Bs.</li>
                                    <li><b>Teléfonos:</b> 60651455</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Cerrar</button>
                                <a href="universidades/upb.html"><button class="btn btn-primary" type="button">Mas informacion</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">UNIVALLE</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Window</li>
                                    <li>Category: Photography</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Cerrar</button>
                                <a href="universidades/univalle.html"><button class="btn btn-primary" type="button">Mas informacion</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

</body>

</html>
