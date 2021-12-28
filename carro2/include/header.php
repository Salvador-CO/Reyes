<?php session_start();
if (empty($_SESSION['active'])) {
    header('location: ../');
}
    $id = $_SESSION['idUser'];
    $nombre = $_SESSION['nombre'];
    $correo = $_SESSION['correo'];
    $tipo = $_SESSION['tipo'];
    $contra =$_SESSION['contra'];
    require_once "../conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Reyes</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="assets/librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="assets/css/productos.css">
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout blog_page">
    

    <div class="wrapper">
    <!-- end loader -->

     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li >
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="conocenos.php">¡Conocenos!</a>
                    </li>
                     
                    <li>
                        <a href="tienda.php">Tienda</a>
                    </li>

                    <li>
                        <a href="carrito.php">Carrito</a>
                    </li>
                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="index.php"><img src="assets/images/iconoB.png" width="150px" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul >
                                <li class="dinone menubtn" > 
                                    <a href="index.php"><i class="fas fa-home fa-lg "></i> Inicio </a>
                                </li>
                                <li class="dinone menubtn" >
                                    <a href="conocenos.php"><i class="far fa-id-card fa-lg"></i>  !Conocenos¡</a>
                                </li>
                                <li class="dinone menubtn" >
                                    <a href="tienda.php"><i class="fas fa-store"></i> Tienda</a>
                                </li>
                                <li class="dinone menubtn" >
                                    <a href="galeria.php"><i class="fas fa-images"></i> Galeria</a>
                                </li>
                                <li class="button_user">
                                    <a class="button " href="carrito.php"> <i class="fas fa-shopping-cart fa-lg"></i> ( <?php echo 1; ?> )</a>
                                </li>
                                
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <i class="fa fa-bars fa-2x"></i>                                    </button>
                                </li>
                                <li class="  dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     
                                        <i class="fas fa-arrow-circle-down fa-2x"></i>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        <?php echo $nombre; ?>
                                     </a>
                                     
                                    
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Cerrar sesion
                                    </a>
                                </div>
                        </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    