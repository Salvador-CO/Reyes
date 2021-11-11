<?php
    session_start();
    if (!empty($_SESSION['active'])) {
        header('location: login-register.php');
    } else {
        if (!empty($_POST)) {
            $alert = '';
            if (empty($_POST['usuario']) || empty($_POST['clave'])) {
                $alert = '<div class="alert alert-danger" role="alert">
                Ingrese su usuario y su clave
                </div>';
            } else {
                require_once "conexion.php";
                $correo = mysqli_real_escape_string($conexion, $_POST['usuario']);
                $clave = md5(mysqli_real_escape_string($conexion, $_POST['clave']));

                $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND clave = '$clave' ");
                mysqli_close($conexion);
                $resultado = mysqli_num_rows($query);
                if ($resultado > 0) {
                    $dato = mysqli_fetch_array($query);
                    $_SESSION['active'] = true;
                    $_SESSION['idUser'] = $dato['id_us'];
                    $_SESSION['nombre'] = $dato['nom_us'];
                    $_SESSION['correo'] = $dato['correo'];
                    $_SESSION['tipo'] = $dato['tipo'];
                    header('location: carrito/prueva.php');
                } else {
                    $alert = '<br><div class="alert alert-danger" role="alert">
                    Usuario o Contraseña Incorrecta
                    </div>';
                    session_destroy();
                }
            }

        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Iniciar/Registro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/icono2.png" >

    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icon-font.min.css">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/login.css">
<link rel="stylesheet" type="text/css" href="assets/librerias/alertifyjs/css/alertify.css">

    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


</head>

<body>

<div class="main-wrapper">

    <!-- Header Section Start -->
    <?php include_once "header.php"; ?>
    <!-- Header Section End -->


   
    <!-- Page Banner Section Start -->
    <div class=" section" style="margin: 0 0 20px;">
        <div id="inicioRegistro">
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text"  placeholder="Correo Electronico" id="usuario" name="usuario" required>
                        <input type="password" placeholder="Contraseña" id="clave" name="clave" required >
                        
                        <button>Entrar</button>
                        <br>
                        <?php echo isset($alert) ? $alert : ''; ?>

                    </form>
                   

                    <!--Register-->
                    <form method="post" onsubmit="return registro();" autocomplete="off" class="formulario__register" >
                        <h2>Regístrarse</h2>
                        <span id="resf"></span>

                        <input type="text" placeholder="Nombre completo" name="nombre" id="nombre">

                        <input type="email" placeholder="Correo Electronico" name="correo" id="correo" required>
                       
                        <input type="password" placeholder="Contraseña" name="claver" id="claver">
                        <center>
                        <button>!Registrarte¡</button>
                        </center>

                    </form>
                </div>
            </div>

        </div>
    </div><!-- Page Banner Section End -->

    <!-- Brand Section Start -->
    <div class="brand-section section mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container-fluid">
            <div class="row">
                <div class="brand-slider">

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-1.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-2.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-3.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-4.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-5.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-6.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div><!-- Brand Section End -->


   


   <!-- Footer -->
    <?php include_once "footer.php"; ?>
    <!-- Footer -->

</div>

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
<script src="assets/js/login.js"></script>
    <script src="assets/librerias/alertifyjs/alertify.js"></script>



<script type="text/javascript">
    function registro() {
     // body...
    var nom = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;
    var clave = document.getElementById('claver').value;
    var dataen = 'opcion='+1+'&nombre='+nom+'&correo='+correo+'&clave='+clave;
    $.ajax({
            type:'POST',
            url:'funciones.php',
            data:dataen,
            success:function(r){
                $("#resf").html(r);
                if (r=1) {
                    document.getElementById("nombre").value = "";
                    document.getElementById("correo").value = "";
                    document.getElementById("claver").value = "";
                    //$("#inicioRegistro").load(location.href + " #inicioRegistro");
                }else{
                    alertify.error("fallo el servidor");
                }
            }
        });
    return false; 
    }

</script>


</body>

</html>