<?php 
	require_once "../../conexion.php";
	
	if (!empty($_GET['id'])) {
		$id=$_GET['id'];
		$ruta=$_GET['ruta'];
		$dir="../../blog".$ruta;
		
		$query=mysqli_query($conexion,"DELETE FROM `blog` WHERE `id`='$id'");
		unlink($dir);
		echo "<script>
                alert('Post eliminado correctamente');
                window.location= '../blog.php'
    			</script>";
	}else{
		header("Location: ../blog.php");
	}

?>
