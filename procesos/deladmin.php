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
        echo '
                <script>  
                  var r = confirm("Administrador eliminado con exito!");
                  if (r == true) {
                    location.href="../admin/index.php";
                  } else {
                    location.href="../admin/index.php";
                  }
                
                </script>
            ';
    }else{
       echo '
                <script>  
                  var r = confirm("A ocurrido un error, intentelo de nuevo");
                  if (r == true) {
                    location.href="../admin/index.php";
                  } else {
                    location.href="../admin/index.php";
                  }
                
                </script>
            '; 
    }
}else{
    echo '
                <script>  
                  var r = confirm("El nombre del administrador no existe");
                  if (r == true) {
                    location.href="../admin/index.php";
                  } else {
                    location.href="../admin/index.php";
                  }
                
                </script>
            ';
}

