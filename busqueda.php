<?php 
    session_start(); 
    error_reporting(E_PARSE);

    include 'conexion/configServer.php';
    include 'conexion/consulSQL.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Busqueda Universidades</title>

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
                    <?php 
                            if(!$_SESSION['nombreAdmin']==""){
                                echo ' 
                                    <li class="nav-item">
                                        <div class="btn-group" style="margin-top:8px;">
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown" style="background:#457b9d;">'.$_SESSION['nameAdmin'].'
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="admin/index.php">Administración</a>
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
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown" style="background:#457b9d;">'.$_SESSION['nameUser'].'
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="busqueda.php">Buscar Universidad</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="procesos/logout.php">Cerrar Sesión</a>
                                            </div>
                                        </div>
                                    </li>

                                    
                                 ';
                            }else{
                                echo ' 
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="iniciosesion.php">Inciar Sesión</a>
                                    </li>
                                 ';
                            }
                        ?>
                </ul>
            </div>
        </div>
    </nav>




    <section class="page-section" id="tipoLetra">

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3" action="busqueda.php" method="post" >
            <div class="input-group input-group-sm" style="margin-top:20px; margin-left:150px;">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" name="search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>


        <div class="card" style="margin-top:40px; margin-left:150px; margin-right:150px;">
            <div class="card-header">
                <h3 class="card-title">Universidades</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Universidad</th>
                            <th>Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(isset($_POST['search'])){
                                $searchq = $_POST['search'];
                            
                            $administrador =  ejecutarSQL::consultar("select * from universidades where nombre LIKE '$searchq'");
                            while($admin=mysqli_fetch_array($administrador)){
                
                                    echo '            
                                        <tr>
                                            <td>'.$admin['nombre'].'</td>
                                            <td><a href="'.$admin['enlace'].'">'.$admin['nombre'].'</a></td>
                                        </tr>';
                                    
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>






    </section>

</body>

</html>
