<?php
    include '../conexion/configServer.php';
    include '../conexion/consulSQL.php';
    include '../procesos/panelSeguridad.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>administracion</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!--    Bootstrap links-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <span class="brand-text font-weight-light" style="margin-left: 20px;">Donde Estudio!</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <?php 
                            echo $_SESSION['nameAdmin']
                            ?>
                        </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Starter Pages
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Active Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inactive Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCorrecto" id="botoncitoc">
                                        Launch demo modal
                                    </button>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Simple Link
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>


                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Registro</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active">Inicio Admin</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->





            <!-- Main content -->






            <section class="content">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="container-fluid">
                            <div class="row">


                                <!-- left column -->
                                <div class="col-md-12">
                                    <!-- jquery validation -->
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Registro <small>de Administradores</small></h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form action="../procesos/regAdmin.php" method="post" role="form" autocomplete="off">
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <label for="IngresarNombre">Nombre</label>
                                                    <input type="name" name="nombre-admin-r" class="form-control" id="IngresarNombre" placeholder="Ingrese nombre">
                                                </div>

                                                <div class="form-group">
                                                    <label for="IngresarCorreo">Correo Electronico</label>
                                                    <input type="email" name="correo-admin-r" class="form-control" id="IngresarCorreo" placeholder="Ingrese Correo">
                                                </div>
                                                <div class="form-group">
                                                    <label for="IngresarContrasena">Contraseña</label>
                                                    <input type="password" name="clave-admin-r" class="form-control" id="IngresarContrasena" placeholder="Ingrese Contraseña">
                                                </div>

                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer" style="text-align:center;">
                                                <button type="submit" class="btn btn-primary">Registrar Administrador</button>
                                                <p id="demo"></p>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!--/.col (left) -->


                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>


                    <div class="col-md-6">

                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Eliminar Administradores</h3>
                            </div>
                            <form action="../procesos/deladmin.php" method="post" role="form">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Seleccionar</label>
                                        <select class="form-control" name="correo-admin-d">
                                            <?php 
                                                $adminCon=  ejecutarSQL::consultar("select * from administrador");
                                                while($AdminD=mysqli_fetch_array($adminCon)){
                                                    echo '<option value="'.$AdminD['correo'].'">'.$AdminD['correo'].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer" style="text-align:center;">
                                    <button style="block:center;" type="submit" class="btn btn-danger">Eliminar administrador</button>
                                    <p id="demo"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Administradores</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                        $administrador=  ejecutarSQL::consultar("select * from administrador");
                                        while($admin=mysqli_fetch_array($administrador)){ 
                                            echo '            
                                            <tr>
                                                <td>'.$admin['ID_admin'].'</td>
                                                <td>'.$admin['nombre'].'</td>
                                                <td>'.$admin['correo'].'</td>
                                            </tr>';
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

    <!--    Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <div class="modal fade" tabindex="-1" role="dialog" id="modalCorrecto" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Exito</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Felicidades un nuevo administrador se registro con exito</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
