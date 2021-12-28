<?php  
require_once "../../conexion.php";
	$Codigo= trim($_POST['codigo_pro']);
	$nom_us= trim($_POST['nom_us']);
	$estado= "cerrado";
 
	$sql = mysqli_query($conexion, 
            "INSERT INTO deta_pedido (`cod_pedido`, `producto`, `cantidad`, `precio`, `total`) SELECT p.clave,c.producto,c.cantidad,c.precio,c.total FROM carrito c JOIN pedidos p ON c.id_us = p.id_us");

	 if ($sql == 1) {
	 	$sql2 = mysqli_query($conexion, 
            "DELETE FROM `carrito` WHERE `id_us`='$nom_us'");
	 		 
	 	$sql3 = mysqli_query($conexion, 
            "UPDATE `pedidos` SET `estado`='$estado' WHERE `clave`='$Codigo'");
	 	if ($sql3== 1) {
	 		header("Location: ../finPedido.php?clavePedido=$Codigo");
	 	}
 
    } else {
        header("Location: ../envio.php");
    }

?>