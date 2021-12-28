<?php 
	require_once "../../conexion.php";


if(!empty($_POST['accion'])){
    $accion = $_POST['accion'];

switch ($accion) {
    case 'agregar':
        /*Inicia validacion del lado del servidor*/
        $nombre_p=$_POST['nombre'];
        $precio=$_POST['precio'];
        $cantidad=$_POST['cantidad'];
        $des=$_POST['des'];
        $estado=$_POST['estado'];
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
            $carpeta = "../../imgProductos/";
            if ($tipo != 'image/jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif') {
                echo "<script>
                alert('Error, el archivo no es una imagen');
                window.location= '../producto.php'
                </script>";            
            }else if ($size > 3*1024*1024) {
                echo "<script>
                alert('Error, el tamaño maximo permitido es de 3MB');
                window.location= '../producto.php'
                </script>";
            }else{
                $src= $carpeta.$nombre;
                move_uploaded_file($ruta_provisional, $src);
                $img="imgProductos/".$nombre;
                $query=mysqli_query($conexion,"INSERT INTO `producto`(`nom_p`, `precio`, `cantidad`, `descripcion`, `imagen`, `estado`) VALUES  ('$nombre_p','$precio','$cantidad','$des','$img','$estado')");
        echo "<script>
                alert('Producto agregada correctamente');
                window.location= '../productos.php'
                </script>";
            }
            // code...
        }    
    break;
    
    default:
        # code...
    break;
}

   
}



?>

