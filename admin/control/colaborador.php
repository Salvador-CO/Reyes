<?php 
	require_once "../../conexion.php";


if(!empty($_POST['opcion'])){
    $opcion = $_POST['opcion'];

    switch ($opcion){
    	case 1:
    		//INGRESAR
    		$nom=trim($_POST['non']);
    		$correo=trim($_POST['correo']);
    		$contra=trim($_POST['contra']);
    		$tipo="2";
    		$query=mysqli_query($conexion,"INSERT INTO `usuarios`(`nom_us`, `correo`, `clave`, `tipo`) VALUES ('$nom','$correo','$contra','$tipo')");
    		echo $query;
    	break;
    }//cierra SWITCH
}

if(!empty($_GET['id'])){
    $idcol = $_GET['id'];

    $sql = mysqli_query($conexion, "DELETE FROM `usuarios` WHERE `id_us`='$idcol'");
     
     if ($sql == 1) {
                header("Location: ../colaboradores.php");
            } else {
                header("Location: ../colaboradores.php");
            }
     
}


?>

