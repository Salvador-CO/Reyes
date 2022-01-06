    <?php
    session_start();
    if (!empty($_SESSION['active'])) {
        header('location: login.php');
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
                
                $resultado = mysqli_num_rows($query);
                if ($resultado > 0) {
                    $dato = mysqli_fetch_array($query);
                    $_SESSION['active'] = true;
                    $_SESSION['idUser'] = $dato['id_us'];
                    $_SESSION['nombre'] = $dato['nom_us'];
                    $_SESSION['correo'] = $dato['correo'];
                    $_SESSION['contra'] = $dato['clave'];
                    $_SESSION['tipo'] = $dato['tipo'];
                    
                    header('location: direcion.php');
                } else {
                     
                    $query2=mysqli_query($conexion,"SELECT * FROM cliente WHERE correo = '$correo' AND estado = 'inactivo'");
                    $resultado = mysqli_num_rows($query2);
                    if ($resultado > 0) {
                        $dato = mysqli_fetch_array($query2);
                        $alert = '<br><div class="alert alert-danger" role="alert">
                            Usuario no activado espere la activacion
                            </div>';
                    }else{
                        $alert = '<br><div class="alert alert-danger" role="alert">
                    Usuario o Contraseña Incorrecta
                    </div>';
                    }
                    
                    session_destroy();
                }
            }

        }
    }
?>

    <?php include_once "include/header.php"; ?>
    

    <!-- clasee
        class="slider_section" 
        class="container" este es el general tiene margenes
        class="about"
        class="title"
        class="about_box"
        class="blog_box"
        class="row"
     -->

    <!-- Page Banner Section Start -->
    <div class="baner " style="background-image: url(assets/images/); height: 78px;">
        <div class="container">
            <div class="row">
                <div class="col text-center" style="height: 78px;">
                    <font size="7" color="#000"><i>Inicia sesion y disfruta</i></font>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->
    
    <!-- seccion clara -->
    <div class="" id="inicioRegistro">
        <div class="container">
            <!-- Page Banner Section Start -->
                <div >
                    <div class="contenedor__todo">
                        <div class="caja__trasera">
                            <div class="caja__trasera-login">
                                <h3>¿Ya tienes una cuenta?</h3>
                                <p>Inicia sesión para entrar a la tienda</p>
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
                                
                                  <img src="assets/images/login.png"style="position: absolute;   margin: -40% 0 0 25%; width: 40%;">
                                <h2>Iniciar Sesión</h2>
                                <input type="text"  placeholder="Correo Electronico" id="usuario" name="usuario" required>
                                <input type="password" placeholder="Contraseña" id="clave" name="clave" required >
                                <center>
                                <button>Entrar</button>
                               
                                <?php echo isset($alert) ? $alert : ''; ?>
                                </center>
                            </form>
                           

                            <!--Register-->
                             
                            <form  action="registro.php" method="post" class="formulario__register" >
                                Completa una serie de pasos que se mostraran a continuación 
                                 <br>
                                <center>
                                <button>Registrate</button></center>
                                

                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- fin seccion clara -->

    <?php include_once "include/footer.php"; ?>
