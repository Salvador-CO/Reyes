<?php 
	require_once "../../conexion.php";


if(!empty($_POST['us'])){
    $usuario = $_POST['us'];
    $estado = $_POST['estado'];

    $sql = mysqli_query($conexion, "UPDATE `cliente` SET `estado` = '$estado' WHERE `nom_us`= '$usuario'");
     
    echo( $sql);
}


?>

