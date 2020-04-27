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
            echo 'El registro se completo con éxito';
        }else{
           echo '<br>Ha ocurrido un error.<br>Por favor intente nuevamente'; 
        }
    }else{
        echo '<br>El correo que ha ingresado ya esta registrado.<br>Por favor ingrese otro correo';
    }
}else {
    echo '<br>Error los campos no deben de estar vacíos';
}

