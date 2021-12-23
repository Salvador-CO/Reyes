<?php 
	require_once "../../conexion.php";
	
	if (!empty($_POST['fecha'])&&!empty($_POST['hora'])) {
		// code...
		$nombre=$_POST['nombre'];
		$descripcion=$_POST['descripcion'];
		$lugar=$_POST['lugar'];
		$fecha=$_POST['fecha'];
		$hora=$_POST['hora'];

		
		$query=mysqli_query($conexion,"INSERT INTO `eventos`(`nombre`, `descripcion`, `lugar`, `fecha`, `hora`) VALUES  ('$nombre','$descripcion','$lugar', '$fecha', '$hora')");
		
		echo "<script>
                alert('Evento agregada correctamente');
                window.location= '../eventos.php'
    			</script>";
	}else{
		echo "<script>
                alert('Existe algun problema vuelve a intentarlo');
                window.location= '../eventos.php'
    			</script>";
	}

?>