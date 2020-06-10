<?php
    include '../conexion/configServer.php';
    include '../conexion/consulSQL.php';
    include '../procesos/panelSeguridad.php';
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
                    <a href="../procesos/logout.php" class="nav-link" style="color:red; ">Cerrar Sesion</a>
                </li>
            </ul>
            <!-- SEARCH FORM -->
            <!--            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>-->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 " style="background:#202425;">
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
                        <!--                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Starter Pages
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
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
                            </ul>
                        </li>-->

                        <li class="nav-item">
                            <a href="index.php" class="nav-link active">
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
                            <a href="usuarios.php" class="nav-link">
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="reportes.php" class="nav-link">
                                <p>Reportes</p>
                            </a>
                        </li>



                        <!--                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Simple Link
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>-->
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
                            <h1 class="m-0 text-dark">Inicio</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../index.php">Donde Estudio</a></li>
                                <li class="breadcrumb-item active">Inicio</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">




                <div class="card bg-gradient-success">
                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                        <h3 class="card-title">
                            <i class="far fa-calendar-alt"></i>
                            Calendar
                        </h3>
                        <!-- tools card -->
                        <div class="card-tools">
                            <!-- button with a dropdown -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="fas fa-bars"></i></button>
                                <div class="dropdown-menu float-right" role="menu">
                                    <a href="#" class="dropdown-item">Add new event</a>
                                    <a href="#" class="dropdown-item">Clear events</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">View calendar</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pt-0">
                        <!--The calendar -->
                        <div id="calendar" style="width: 100%">
                            <div class="bootstrap-datetimepicker-widget usetwentyfour">
                                <ul class="list-unstyled">
                                    <li class="show">
                                        <div class="datepicker">
                                            <div class="datepicker-days" style="">
                                                <table class="table table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th>
                                                            <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">June 2020</th>
                                                            <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th>
                                                        </tr>
                                                        <tr>
                                                            <th class="dow">Su</th>
                                                            <th class="dow">Mo</th>
                                                            <th class="dow">Tu</th>
                                                            <th class="dow">We</th>
                                                            <th class="dow">Th</th>
                                                            <th class="dow">Fr</th>
                                                            <th class="dow">Sa</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td data-action="selectDay" data-day="05/31/2020" class="day old weekend">31</td>
                                                            <td data-action="selectDay" data-day="06/01/2020" class="day">1</td>
                                                            <td data-action="selectDay" data-day="06/02/2020" class="day">2</td>
                                                            <td data-action="selectDay" data-day="06/03/2020" class="day">3</td>
                                                            <td data-action="selectDay" data-day="06/04/2020" class="day">4</td>
                                                            <td data-action="selectDay" data-day="06/05/2020" class="day">5</td>
                                                            <td data-action="selectDay" data-day="06/06/2020" class="day weekend">6</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-action="selectDay" data-day="06/07/2020" class="day weekend">7</td>
                                                            <td data-action="selectDay" data-day="06/08/2020" class="day">8</td>
                                                            <td data-action="selectDay" data-day="06/09/2020" class="day active today">9</td>
                                                            <td data-action="selectDay" data-day="06/10/2020" class="day">10</td>
                                                            <td data-action="selectDay" data-day="06/11/2020" class="day">11</td>
                                                            <td data-action="selectDay" data-day="06/12/2020" class="day">12</td>
                                                            <td data-action="selectDay" data-day="06/13/2020" class="day weekend">13</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-action="selectDay" data-day="06/14/2020" class="day weekend">14</td>
                                                            <td data-action="selectDay" data-day="06/15/2020" class="day">15</td>
                                                            <td data-action="selectDay" data-day="06/16/2020" class="day">16</td>
                                                            <td data-action="selectDay" data-day="06/17/2020" class="day">17</td>
                                                            <td data-action="selectDay" data-day="06/18/2020" class="day">18</td>
                                                            <td data-action="selectDay" data-day="06/19/2020" class="day">19</td>
                                                            <td data-action="selectDay" data-day="06/20/2020" class="day weekend">20</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-action="selectDay" data-day="06/21/2020" class="day weekend">21</td>
                                                            <td data-action="selectDay" data-day="06/22/2020" class="day">22</td>
                                                            <td data-action="selectDay" data-day="06/23/2020" class="day">23</td>
                                                            <td data-action="selectDay" data-day="06/24/2020" class="day">24</td>
                                                            <td data-action="selectDay" data-day="06/25/2020" class="day">25</td>
                                                            <td data-action="selectDay" data-day="06/26/2020" class="day">26</td>
                                                            <td data-action="selectDay" data-day="06/27/2020" class="day weekend">27</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-action="selectDay" data-day="06/28/2020" class="day weekend">28</td>
                                                            <td data-action="selectDay" data-day="06/29/2020" class="day">29</td>
                                                            <td data-action="selectDay" data-day="06/30/2020" class="day">30</td>
                                                            <td data-action="selectDay" data-day="07/01/2020" class="day new">1</td>
                                                            <td data-action="selectDay" data-day="07/02/2020" class="day new">2</td>
                                                            <td data-action="selectDay" data-day="07/03/2020" class="day new">3</td>
                                                            <td data-action="selectDay" data-day="07/04/2020" class="day new weekend">4</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-action="selectDay" data-day="07/05/2020" class="day new weekend">5</td>
                                                            <td data-action="selectDay" data-day="07/06/2020" class="day new">6</td>
                                                            <td data-action="selectDay" data-day="07/07/2020" class="day new">7</td>
                                                            <td data-action="selectDay" data-day="07/08/2020" class="day new">8</td>
                                                            <td data-action="selectDay" data-day="07/09/2020" class="day new">9</td>
                                                            <td data-action="selectDay" data-day="07/10/2020" class="day new">10</td>
                                                            <td data-action="selectDay" data-day="07/11/2020" class="day new weekend">11</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="datepicker-months" style="display: none;">
                                                <table class="table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th>
                                                            <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2020</th>
                                                            <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month active">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="datepicker-years" style="display: none;">
                                                <table class="table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th>
                                                            <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th>
                                                            <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year active">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="datepicker-decades" style="display: none;">
                                                <table class="table-condensed">
                                                    <thead>
                                                        <tr>
                                                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th>
                                                            <th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th>
                                                            <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="picker-switch accordion-toggle"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>








            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->


    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>








</body>

</html>
