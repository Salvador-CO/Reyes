<?php session_start();
if (empty($_SESSION['active'])) {
    header('location: ../');
}
$sesion = $_SESSION['active'];
$id_user = $_SESSION['idUser'];
$nombre = $_SESSION['nombre'];
$correo = $_SESSION['correo'];
$tipo = $_SESSION['tipo'];
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<h1> <?php echo $sesion; ?> </h1>
 	<h1> <?php echo $id_user; ?> </h1>
 	<h1> <?php echo $nombre; ?> </h1>
 	<h1> <?php echo $correo; ?> </h1>
 	<h1> <?php echo $tipo; ?> </h1>
 	<a href="salir.php">Cerrar session</a>
 </body>
 </html>