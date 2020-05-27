<?php
session_start();
include '../conexion/configServer.php';
include '../conexion/consulSQL.php';

sleep(1);
$nombreMen = $_POST['nombre-mensaje'];
$correoMen = $_POST['correo-mensaje'];
$telefonoMen = $_POST['telefono-mensaje'];
$mensajeMen = $_POST['text-mensaje'];


if(!$nombreMen=="" && !$correoMen=="" && !$telefonoMen=="" && !$mensajeMen==""){

    if(consultasSQL::InsertSQL("mensajes", "nombre, correo, telefono, mensaje", "'$nombreMen','$correoMen','$telefonoMen','$mensajeMen'")){
            echo '
                <script>  
                  var r = confirm("mensaje añadido con exito!");
                  if (r == true) {
                    location.href="../index.php";
                  } else {
                    location.href="../index.php";
                  }
                </script>
            ';
        }else{
        echo '
                <script>  
                  var r = confirm("Algo fallo, intentelo de nuevo por favor");
                  if (r == true) {
                    location.href="../index.php";
                  } else {
                    location.href="../index.php";
                  }
                </script>
            ';
        }
    }    
else {
//    echo '<script>location.href="../index.php";</script>';
}
?>
