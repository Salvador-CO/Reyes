<?php 
	require_once "../../conexion.php";

    if (!empty($_POST["clave"])) {

		 $clave=$_POST["clave"];
		 $pago="pendiente";

		 $sql = mysqli_query($conexion, "UPDATE `pedidos` SET `pago`='$pago' WHERE `clave`='$clave'");

	}else{
		
	} 
?>