<?php  
require_once "../../conexion.php";
	$Nombre= trim($_POST['nom']);
	$direccion= trim($_POST['direccion']);
	$telefono= trim($_POST['tel']);
	$productos=  $_POST['cantidad'];
	$total= trim($_POST['pago']);
	$pago= "pendiente";
	$estado= "abierto";
	$id_us= trim($_POST['usuario']);
 
	$sql = mysqli_query($conexion, 
            "INSERT INTO `pedidos`(`Nombre`, `direccion`, `telefono`, `productos`, `total`, `pago`, `estado`, `id_us`) VALUES ('$Nombre','$direccion','$telefono','$productos','$total','$pago','$estado','$id_us')");
	 if ($sql == 1) {
	 	$query = mysqli_query($conexion, "SELECT `clave`  FROM `pedidos` WHERE `id_us`='$id_us' && `estado` = '$estado'");
            $dato = mysqli_fetch_array($query);
            $id=$dato['clave'];
        header("Location: ../confirmar.php?clavePedido=$id");
    } else {
        header("Location: ../envio.php");
    }

?>