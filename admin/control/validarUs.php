<?php 
	require_once "../../conexion.php";


if(!empty($_POST['us'])){
    $usuario = $_POST['us'];
    
    $estado = $_POST['estado'];
    $tipo="2";

    $sql = mysqli_query($conexion, "UPDATE `cliente` SET `estado` = '$estado' WHERE `nom_us`= '$usuario'");


    
    	$sql2 = mysqli_query($conexion, "SELECT `id_us` FROM `usuarios` WHERE `nom_us`='$usuario'");
    	$num_rows = mysqli_num_rows($sql2);
    if ($num_rows>=1) {
    	$sql3 = mysqli_query($conexion, " DELETE FROM `usuarios` WHERE`nom_us`='$usuario'");
    }else{
        $sql4 ="SELECT correo,clave FROM cliente WHERE nom_us= '$usuario'";
            $sqlnom_us = mysqli_query($conexion,$sql4);
            $nom_us = $sqlnom_us->fetch_assoc();
            $correoUs=$nom_us['correo'];
            $claveUs=$nom_us['clave'];
            $correo = $correoUs;
            $clave = md5($claveUs);

     	$sql3 = mysqli_query($conexion, "INSERT INTO `usuarios`( `nom_us`, `correo`, `clave`, `tipo`) VALUES ('$usuario','$correo','$clave','$tipo')");
    
    }
    echo $sql3;
}


?>

