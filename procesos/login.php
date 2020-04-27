<?php
    session_start();
    include '../conexion/configServer.php';
    include '../conexion/consulSQL.php';
    sleep(2);

    $correo=$_POST['correo-login'];
    $contrasena=md5($_POST['clave-login']);

    if(!$correo==""&&!$contrasena==""){
        $verUser=ejecutarSQL::consultar("select * from usuario where correo='$correo' and contrasena='$contrasena'");
        
        $verAdmin=ejecutarSQL::consultar("select * from administrador where correo='$correo' and contrasena='$contrasena'");
        
        
        $AdminN=mysqli_fetch_array($verAdmin);
        $UserN=mysqli_fetch_array($verUser);
        $AdminC=mysqli_num_rows($verAdmin);
        if($AdminC>0){
            $_SESSION['nameAdmin']=$AdminN['nombre'];
            $_SESSION['nombreAdmin']=$correo;
            $_SESSION['claveAdmin']=$contrasena;
                
            echo '<script> location.href="../admin/index.html"; </script>';
            }
            else{
                $UserC=mysqli_num_rows($verUser);
                if($UserC>0){
                    $_SESSION['nameUser']=$UserN['nombre'];                                           
                    $_SESSION['nombreUser']=$correo;
                    $_SESSION['claveUser']=$contrasena;
                    echo '<script> location.href="../index.php"; </script>';
                }else{
                    echo '<br>Error nombre o contraseña invalido';
                }  
            }
    }else{
        echo '<br>Error campo vacío<br>Intente nuevamente';
    }
