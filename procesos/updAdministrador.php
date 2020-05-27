<?php
    include '../conexion/configServer.php';
    include '../conexion/consulSQL.php';


sleep(1);

$nombreAdUp = $_POST['adm-nombre'];
$correoAdUp = $_POST['adm-correo'];
$idAdUP = $_POST['adm-id'];

if(consultasSQL::UpdateSQL("administrador","nombre='$nombreAdUp',correo='$correoAdUp'", "ID_admin='$idAdUP'")){
    echo '
                <script>  
                  var r = confirm("Administrador actualizado con exito!");
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
                  var r = confirm("Ups algo Fallo");
                  if (r == true) {
                    location.href="../admin/index.php";
                  } else {
                    location.href="../admin/index.php";
                  }
                
                </script>
            ';
}

