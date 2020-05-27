<?php
include '../conexion/configServer.php';
include '../conexion/consulSQL.php';

sleep(3);
$nombre= $_POST['nombre-registro'];
$correo= $_POST['correo-registro'];
$contrasena= md5($_POST['clave-registro']);
$telefono= $_POST['telefono-registro'];


if(!$nombre=="" && !$correo=="" && !$contrasena=="" && !$telefono==""){
    $verificar=  ejecutarSQL::consultar("select * from usuario where correo='".$correo."'");
    $verificaltotal = mysqli_num_rows($verificar);
    
    if($verificaltotal<=0){
        
        if(consultasSQL::InsertSQL("usuario", "nombre, correo, contrasena, telefono", "'$nombre','$correo','$contrasena','$telefono'")){
            echo '
                <script>  
                  var r = confirm("Se registro con exito");
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
                  var r = confirm("Ha ocurrido un error.<br>Por favor intente nuevamente");
                  if (r == true) {
                    location.href="../index.php";
                  } else {
                    location.href="../index.php";
                  }
                
                </script>
            ';
        }
    }else{
        echo '<br>El correo que ha ingresado ya esta registrado.<br>Por favor ingrese otro correo';
    }
}else {
    echo '<br>Error los campos no deben de estar vacíos';
}

