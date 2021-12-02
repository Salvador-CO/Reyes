<?php

require_once "../../conexion.php";

$titulo=$_POST['titulo'];
$contenido=$_POST['contenido'];
$date = date('Y-m-d');

$nombre = $_FILES['archivo']['name'];
$guardado =$_FILES['archivo']['tmp_name'];
$ruta = "imagenes/".$nombre;

if (file_exists('../../blog/')) {

    if (move_uploaded_file($guardado, '../../blog/imagenes/'.$nombre)) {
        $sql = "INSERT INTO blog (`titulo`, `contenido`,`file`,`date`) VALUES ('$titulo','$contenido','$ruta','$date')";
        $resultado = $conexion->query($sql);
        if (!$resultado) {
                echo "<script>
                        alert('Existe algun problema vuelve a intentarlo');
                        window.location= '../blog.php'
                        </script>";
                } else {
                    echo "<script>
                        alert('Publicación agregada correctamente');
                        window.location= '../blog.php'
                        </script>";
                }
    }

    }else{
        echo "<script>
                        alert('error');
                        window.location= '../blog.php'
                        </script>";
    }
