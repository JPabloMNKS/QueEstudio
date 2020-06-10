<?php
    include '../conexion/configServer.php';
    include '../conexion/consulSQL.php';


sleep(1);

$correoAdUp = $_POST['adm-correo'];
$estado = 0;



if(consultasSQL::UpdateSQL("administrador","estado='$estado'","correo='$correoAdUp'")){
    echo '
                <script>  
                  var r = confirm("Administrador actualizado con exito!");
                  if (r == true) {
                    location.href="../admin/administradores.php";
                  } else {
                    location.href="../admin/administradores.php";
                  }
                
                </script>
            ';
}else{
    echo '
                <script>  
                  var r = confirm("Ups algo Fallo");
                  if (r == true) {
                    location.href="../admin/administradores.php";
                  } else {
                    location.href="../admin/administradores.php";
                  }
                
                </script>
            ';
}

