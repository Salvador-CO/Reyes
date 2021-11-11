<?php 
include "conexion.php";
if (!empty($_POST['opcion'])) {
    $opcion = $_POST['opcion'];
    switch ($opcion) {
        case 1:
            
    if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['clave'])) {
        $alert = ' <script type="text/javascript">
                            alertify.error("Todo los campos son obligatorios");
                        </script>';
    } else {
            $nom = trim($_POST['nombre']);
            $correo = trim($_POST['correo']);
            $clave = md5($_POST['clave']);
            $tipo = 1;

        $query = mysqli_query($conexion, "SELECT * FROM usuarios where correo = '$correo'");
        $result = mysqli_fetch_array($query);
        if ($result > 0) {
            $alert = '<script type="text/javascript">
                            alertify.error("Lo sentimos, el correo ya existe");
                        </script>';
        } else {
            $query_insert = mysqli_query($conexion, "INSERT INTO `usuarios`(`nom_us`, `correo`, `clave`, `tipo`) 
                                                        VALUES ('$nom', '$correo', '$clave', '$tipo')");
            if ($query_insert) {
                $alert = '<script type="text/javascript">
                            alertify.success("Usuario registrado con exito");
                        </script>';
            } else {
                $alert = '<script type="text/javascript">
                            alertify.error("Error al registrar");
                        </script>';
            }
        }
    }
            echo $alert;
            break;
    
    }
}





 ?>