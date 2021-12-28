<?php 
	require_once "../../conexion.php";


 
    
    	$sql2 = mysqli_query($conexion, "SELECT `id_us` FROM `usuarios` WHERE `nom_us`='asd'");
    	$num_rows = mysqli_num_rows($sql2);
    if ($num_rows>=1) {
    	$sql3 = mysqli_query($conexion, " DELETE FROM `usuarios` WHERE`nom_us`='asd'");
    }else{
     	$sql3 = mysqli_query($conexion, "INSERT INTO `usuarios`( `nom_us`, `correo`, `clave`, `tipo`) VALUES ('asd','[value-3]','[value-4]','2')");
    
    }
    echo $sql3;



?>

