<?php
    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "canchas";
    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");

 $mysqli = new mysqli('localhost', 'root', '', 'canchas');

    
?>