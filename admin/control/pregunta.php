<?php 
	require_once "../../conexion.php";


if(!empty($_POST['opcion'])){
    $opcion = $_POST['opcion'];

    switch ($opcion){
    	case 1:
    		//INGRESAR
    		$cod=trim($_POST['cod']);
    		$tipo=trim($_POST['tipo']);
            $pre=trim($_POST['pre']);
    		$cate=trim($_POST['cate']);

            $sqlcod = mysqli_query($conexion, 
            "SELECT `codigo` FROM `preguntas` WHERE `codigo`='$cod'");
              $per = $sqlcod->fetch_assoc();
            if( isset($per['codigo']) && $per['codigo'] ==$cod ){
                echo 3;
            }else{
                $query=mysqli_query($conexion,"INSERT INTO `preguntas`(`codigo`, `descripcion`, `tipo`, `categoria`) VALUES ('$cod','$pre','$tipo','$cate')");
                echo $query;
            }
    	break;
    }//cierra SWITCH
}

if(!empty($_GET['idpre'])){
    $idpre = $_GET['idpre'];

    $sql = mysqli_query($conexion, "DELETE FROM `preguntas` WHERE `id_preg`='$idpre'");
     
     if ($sql == 1) {
                header("Location: ../preguntas.php");
            } else {
                header("Location: ../preguntas.php");
            }
     
}


?>

