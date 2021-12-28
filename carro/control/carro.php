<?php 
	require_once "../../conexion.php";
	$opcion = $_POST['opcion'];
    switch ($opcion){
    	case 1:
    		//INGRESAR
    		$nom=trim($_POST['nom']);
    		$pre=trim($_POST['pre']);
            $cant=trim($_POST['cant']);
            $id_us=trim($_POST['id_us']);
            $total=floatval($pre)*floatval($cant);

            $sql = mysqli_query($conexion, 
            "INSERT INTO `carrito`(`producto`, `cantidad`, `precio`, `total`, `id_us`) VALUES ('$nom','$cant','$pre','$total','$id_us')");
             echo $sql;
             
    	break;
        case 2:
            $sql = mysqli_query($conexion, "DELETE FROM `usuarios` WHERE `id_us`='$idcol'");
     
             if ($sql == 1) {
                        header("Location: ../carrito.php");
                    } else {
                        header("Location: ../carrito.php");
                    }
        break;

    }

    if (!empty($_GET['opcion'])) {
        $id=$_GET['id'];
        $sql = mysqli_query($conexion, "DELETE FROM `carrito` WHERE `id`='$id'");
     
             if ($sql == 1) {
                        header("Location: ../carrito.php");
                    } else {
                        header("Location: ../carrito.php");
                    }
    }





 ?>