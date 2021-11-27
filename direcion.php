<?php session_start();
if (empty($_SESSION['active'])) {
    header('location: ../');
}
//$sesion = $_SESSION['active'];
//$id_user = $_SESSION['idUser'];
//$nombre = $_SESSION['nombre'];
//$correo = $_SESSION['correo'];
$tipo = $_SESSION['tipo'];

    if ($tipo==1) {
        header('location: admin/');
    }else{
        header('location: carrito/index.php');

    }

?>