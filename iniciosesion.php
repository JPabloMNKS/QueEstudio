<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio de Sesion</title>

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


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">Donde Estudio</a>
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
                </ul>
            </div>
        </div>
    </nav>




    <section class="page-section" id="tipoLetra">


        <div class="card" style="width: 25rem; " id="acontainer">
            <img src="img/La-Paz-header.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title" style="font-family: 'Kaushan Script'; color: #343a40">Donde Estudio</h2>
                
                <p class="login-box-msg">Registrate para iniciar sesion</p>

                <form action="procesos/login.php" method="post">

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="correo-login" placeholder="Correo Electronico">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="clave-login" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary btn-block aboton" value="enviar">Iniciar Sesión</button>


                </form>

                <!--            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary" style="border-color: #4267b2; background-color: #4267b2;">
                    <i class="fab fa-facebook mr-2"></i> Registrate con Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google mr-2"></i> Registrate con Google
                </a>
            </div>-->

                <!--            <p class="mb-1">
                <a href="forgot-password.html" style="color: #343a40">Olvide mi contraseña</a>
            </p>-->
                <p class="mb-0">
                    <a href="registro.php" class="text-center" style="color: #343a40">Registrar un nuevo miembro</a>
                </p>


            </div>
        </div>
    </section>

</body>

</html>
