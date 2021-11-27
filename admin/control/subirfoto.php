<?php 
	require_once "../../conexion.php";
	
	if (!empty($_POST['estado'])&&!empty($_POST['uso'])) {
		// code...
		$descri=$_POST['descri'];
		$estado=$_POST['estado'];
		$uso=$_POST['uso'];
		$img='';
		if (isset($_FILES['foto'])) {
			$file=$_FILES['foto'];
			$nombre=$file["name"];
			$tipo=$file["type"];
			$ruta_provisional=$file["tmp_name"];
			$size=$file["size"];
			$dimensiones=getimagesize($ruta_provisional);
			$width = $dimensiones[0];
			$height = $dimensiones[1];
			$carpeta = "../../img/";
			if ($tipo != 'image/jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif') {
		        echo "<script>
                alert('Error, el archivo no es una imagen');
                window.location= '../fotos.php'
    			</script>";            
			}else if ($size > 3*1024*1024) {
	            echo "<script>
                alert('Error, el tamaño maximo permitido es de 3MB');
                window.location= '../fotos.php'
    			</script>";
			}else{
				$src= $carpeta.$nombre;
				move_uploaded_file($ruta_provisional, $src);
				$img="img/".$nombre;
				$query=mysqli_query($conexion,"INSERT INTO `imagenes`(`descripcion`, `estado`, `ruta`, `uso`) VALUES ('$descri','$estado','$img','$uso')");
		echo "<script>
                alert('Foto agregada correctamente');
                window.location= '../fotos.php'
    			</script>";
			}
			// code...
		}


	}else{
		echo "<script>
                alert('Existe algun problema vuelve a intentarlo');
                window.location= '../fotos.php'
    			</script>";
	}

?>

