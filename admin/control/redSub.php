<?php 
	require_once "../../conexion.php";
	
	if (!empty($_POST['nomred'])&&!empty($_POST['iconos'])) {
		// code...
		$nom=$_POST['nomred'];
		$icono=$_POST['iconos'];
		$link=$_POST['link'];
		
		$query=mysqli_query($conexion,"INSERT INTO `redes`(`nom_red`, `link`, `icono`) VALUES ('$nom','$link','$icono')");
		
		echo "<script>
                alert('Red agregada correctamente');
                window.location= '../redes.php'
    			</script>";
	}else{
		echo "<script>
                alert('Existe algun problema vuelve a intentarlo');
                window.location= '../redes.php'
    			</script>";
	}

?>

