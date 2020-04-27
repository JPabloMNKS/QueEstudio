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
                    location.href="../admin/vacio2.php";
                  } else {
                    location.href="../admin/vacio2.php";
                  }
                
                </script>
            ';
        }else{
            echo '
             <script> location.href="../admin/vacio2.php"; </script>
            <div class="modal" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Error</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Ha ocurrido un error, por favor intente nuevamente</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
                      </div>
                    </div>
                  </div>
                </div>';
        }
    }else{
            echo '<div class="modal" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Error</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>El correo que ha ingresado ya existe. Por favor ingrese otro nombre</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
                      </div>
                    </div>
                  </div>
                </div>';
    }
}else {
    echo '
        <script type="text/javascript">
        location.href="../admin/vacio2.php";

        document.getElementById("demo").innerHTML = "Error los campos no deben de estar vacíos";
        </script>
';
}
?>
