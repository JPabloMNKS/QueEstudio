<?php
session_start();
include '../conexion/configServer.php';
include '../conexion/consulSQL.php';

sleep(1);
$nombreAdmin= $_POST['nombre-admin-r'];
$correoAdmin= $_POST['correo-admin-r'];
$claveAdmin= md5($_POST['clave-admin-r']);

if(!$nombreAdmin=="" && !$correoAdmin=="" && !$claveAdmin==""){
    $verificar=  ejecutarSQL::consultar("select * from administrador where correo='".$correoAdmin."'");
    $verificaltotal = mysqli_num_rows($verificar);
    if($verificaltotal<=0){
        if(consultasSQL::InsertSQL("administrador", "nombre, correo, contrasena", "'$nombreAdmin','$correoAdmin','$claveAdmin'")){
            echo '
                <script>  
                  var r = confirm("Administrador añadido con exito!");
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
                  var r = confirm("Ha ocurrido un error, por favor intente nuevamente");
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
                  var r = confirm(" El correo que ha ingresado ya existe. Por favor ingrese otro nombre");
                  if (r == true) {
                    location.href="../admin/index.php";
                  } else {
                    location.href="../admin/index.php";
                  }
                
                </script>
            ';
    }
}else {
    echo '
                <script>  
                  var r = confirm("Error los campos no deben estar vacios");
                  if (r == true) {
                    location.href="../admin/index.php";
                  } else {
                    location.href="../admin/index.php";
                  }
                
                </script>
            ';
}
?>
