<?php 
	require_once "../../conexion.php";
	
	if (!empty($_GET['id'])) {
		$id=$_GET['id'];
  
		$query=mysqli_query($conexion,"DELETE FROM `eventos` WHERE `id`='$id'");

		echo "<script>
                alert('Evento eliminado correctamente');
                window.location= '../eventos.php'
    			</script>";
	}else{
		header("Location: ../eventos.php");
	}

?>