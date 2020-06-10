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

    <title>Gestión Usuarios</title>

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
                <li class="nav-item d-none d-sm-inline-block ">
                    <a href="../procesos/logout.php" class="nav-link " style="color:red; ">Cerrar Sesion</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background:#202425;">
            <!-- Brand Logo -->
            <a href="../index.php" class="brand-link">
                <img src="../img/logos/logo_v2.jpeg" alt="" width="150px" height="120px" style="margin-left:30px;">

            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
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
                        <li class="nav-item">
                            <a href="index.php" class="nav-link ">
                                <p>Inicio</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="administradores.php" class="nav-link">
                                <!--<i class="far fa-circle nav-icon"></i>-->
                                <p>Gestionar Administradores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="mensajes.php" class="nav-link">
                                <p>Mensajes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="usuarios.php" class="nav-link active">
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="reportes.php" class="nav-link">
                                <p>Reportes</p>
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
                            <h1 class="m-0 text-dark">Usuarios</h1>
                        </div><!-- /.col -->
                        <!--<div class="col-sm-6">
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




                <div class="card card-primary card-outline card-tabs">
                    <div class="card-header p-0 pt-1 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Dar de baja usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Usuarios activos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Usuarios Inactivos </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-three-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">


                                <!--Dar de baja usuarios-->
                                <div class="col-md-9">
                                    <div class="card card-danger" style="margin-left: 160px;">
                                        <div class="card-header">
                                            <h3 class="card-title">Usuarios</h3>
                                        </div>
                                        <form action="../procesos/bajaUsuario.php" method="post" role="form">

                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Seleccionar</label>
                                                    <select class="form-control" name="usuario-correo">
                                                        <?php 
                                                $adminCon=  ejecutarSQL::consultar("select * from usuario");
                                                while($AdminD=mysqli_fetch_array($adminCon)){
                                                    echo '<option value="'.$AdminD['correo'].'">'.$AdminD['correo'].'</option>';
                                                }
                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="card-footer" style="text-align:center;">
                                                <button style="block:center;" type="submit" class="btn btn-danger">Dar de baja Usuario</button>
                                                <p id="demo"></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>



                            </div>
                            <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">

                                <!--Usuarios activos-->

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Usuarios</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">ID</th>
                                                    <th>Nombre</th>
                                                    <th>CI</th>
                                                    <th>Telefono</th>
                                                    <th>Correo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                        $mensajes=  ejecutarSQL::consultar("select * from usuario");
                                        while($men=mysqli_fetch_array($mensajes)){ 
                                            if($men['estado']==1){
                                              echo '            
                                                <tr>
                                                    <td>'.$men['ID_usuario'].'</td>
                                                    <td>'.$men['nombre'].'</td>
                                                    <td>'.$men['CI'].'</td>
                                                    <td>'.$men['telefono'].'</td>
                                                    <td>'.$men['correo'].'</td>
                                                </tr>';  
                                            }
                                        }
                                    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">

                                <!--Usuarios Inactivos-->

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Usuarios</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">ID</th>
                                                    <th>Nombre</th>
                                                    <th>CI</th>
                                                    <th>Telefono</th>
                                                    <th>Correo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                        $mensajes=  ejecutarSQL::consultar("select * from usuario");
                                        while($men=mysqli_fetch_array($mensajes)){ 
                                            if($men['estado']==0){
                                              echo '            
                                                <tr>
                                                    <td>'.$men['ID_usuario'].'</td>
                                                    <td>'.$men['nombre'].'</td>
                                                    <td>'.$men['CI'].'</td>
                                                    <td>'.$men['telefono'].'</td>
                                                    <td>'.$men['correo'].'</td>
                                                </tr>';  
                                            }
                                        }
                                    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
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
