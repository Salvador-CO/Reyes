<?php 
	require_once "../../conexion.php";
	
	if (!empty($_GET['idfoto'])) {
		$id=$_GET['idfoto'];
		$ruta=$_GET['ruta'];
		$dir="../../".$ruta;
		$query=mysqli_query($conexion,"DELETE FROM `imagenes` WHERE `id_img`='$id'");
		unlink($dir);
		echo "<script>
                alert('Foto eliminada correctamente');
                window.location= '../fotos.php'
    			</script>";
	}else{
		header("Location: ../fotos.php");
	}

?>
