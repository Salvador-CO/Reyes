<?php 
	require_once "../../conexion.php";
	
	if (!empty($_GET['idred'])) {
		$id=$_GET['idred'];
		$query=mysqli_query($conexion,"DELETE FROM `redes` WHERE `id`='$id'");
		echo "<script>
                alert('Red eliminada correctamente');
                window.location= '../redes.php'
    			</script>";
	}else{
		header("Location: ../redes.php");
	}

?>
