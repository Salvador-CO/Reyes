<?php

require_once "../../conexion.php";

$codigo=$_POST['codigo'];
$nombre = $_FILES['archivo']['name'];
$guardado =$_FILES['archivo']['tmp_name'];


if (file_exists('../../admin/pagos/')) {

    if (move_uploaded_file($guardado, '../../admin/pagos/'.$nombre)) {
        $sql = "UPDATE `pedidos` SET `ticket`='$nombre' WHERE `clave`= $codigo";
        $resultado = $conexion->query($sql);
        if (!$resultado) {
	                echo "<script>
		                alert('Existe algun problema vuelve a intentarlo');
		                window.location= '../fotos.php?codigo=$codigo'
		    			</script>";
                } else {
                    echo "<script>
                        alert('Cargado correctamente');
                        window.location= '../pagos.php?codigo=$codigo'
                        </script>";
                }
    }

    }else{
        echo "<script>
                        alert('error');
                        window.location= '../pagos.php'
                        </script>";
    }
?>