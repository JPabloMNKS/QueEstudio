<?php
session_start();
include '../conexion/configServer.php';
include '../conexion/consulSQL.php';

sleep(2);
$correoAd= $_POST['correo-admin-d'];
$consA=  ejecutarSQL::consultar("select * from administrador where correo='$correoAd'");
$totalA = mysqli_num_rows($consA);

if($totalA>0){
    if(consultasSQL::DeleteSQL('administrador', "correo='".$correoAd."'")){
        echo '<script>location.href="../admin/vacio2.php";</script>';
    }else{
       echo '<br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
    }
}else{
    echo '<br><p class="lead text-center">El nombre del administrador no existe</p>';
}

