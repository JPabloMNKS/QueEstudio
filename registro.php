<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro</title>

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

<body class="hold-transition">

    <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav" style="background:#202425">
        <div class="container">
            <a href="index.php">
                <img src="img/logos/logo_v2.jpeg" alt="" width="110px" height="80px">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#portfolio">Que Estudio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#about">Acerca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#team">Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#contact">Contactanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="iniciosesion.php">Inicio de Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="tipoLetra" class="page-section">
        <div class="card" style="width: 25rem;" id="acontainer">
            <img src="img/La-Paz-header.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title" style="font-family: 'Kaushan Script'; color: #343a40">Donde Estudio</h2>
                <p class="login-box-msg">Registrar nuevo miembro</p>

                <form action="procesos/regclien.php" method="post">

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nombre-registro" placeholder="Nombre Completo">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="ci-registro" placeholder="Carnet Identidad">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>                    
                    
                    
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="correo-registro" placeholder="Correo Electronico">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="clave-registro" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="tel" class="form-control" name="telefono-registro" placeholder="Celular">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-book"></span>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #343a40; border-color: #343a40">Registrarse</button>

                </form>

                
                <a href="iniciosesion.php" class="text-center" style="color: #343a40">Ya estoy registrado</a>


            </div>
        </div>

    </section>




</body>

</html>
