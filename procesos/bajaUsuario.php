<?php
    include '../conexion/configServer.php';
    include '../conexion/consulSQL.php';


sleep(1);

$correoUsUp = $_POST['usuario-correo'];
$estado = 0;



if(consultasSQL::UpdateSQL("usuario","estado='$estado'","correo='$correoUsUp'")){
    echo '
                <script>  
                  var r = confirm("Usuario dado de baja con exito!");
                  if (r == true) {
                    location.href="../admin/usuarios.php";
                  } else {
                    location.href="../admin/usuarios.php";
                  }
                
                </script>
            ';
}else{
    echo '
                <script>  
                  var r = confirm("Ups algo Fallo");
                  if (r == true) {
                    location.href="../admin/usuarios.php";
                  } else {
                    location.href="../admin/usuarios.php";
                  }
                
                </script>
            ';
}

