<?php

require_once "conexion.php";

$titulo=$_POST['titulo'];
$contenido=$_POST['contenido'];
$date = date('Y-m-d');

$nombre = $_FILES['archivo']['name'];
$guardado =$_FILES['archivo']['tmp_name'];
$ruta = "blog/".$nombre;

if (file_exists('blog')) {
    if (move_uploaded_file($guardado, 'blog/'.$nombre)) {
        
    }else{
        
    }
}

$sql = "INSERT INTO blog (`titulo`, `contenido`,`file`,`date`) VALUES ('$titulo','$contenido','$ruta','$date')";
$resultado = $conexion->query($sql);
if (!$resultado) {
        //echo $sql_1;?>
            <script type="text/javascript">
                alert("Error en el registro" +<?php printf("Errormessage: %s\n", $conexion->error);?>);
                window.location.href='nuevo_post.php';
            </script>

        <?php
        } else {?>
            <script type="text/javascript">
            window.location.href='nuevo_post.php';
            </script>
        

        <?php
        }

?>