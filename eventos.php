    <?php include_once "include/header.php"; 
    require_once "conexion.php";?>

    <link rel="stylesheet" type="text/css" href="assets/css/eventos.css">
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
    <div class="baner " style="background-image: url(assets/images/tu.jpg);">
        <div class="container">
            <div class="row">
                <div class="col text-center" style="background:rgba(0,0,0,0.4);margin-top: 10px;">
                    <font size="16" color="#fff"><i>Eventos</i></font>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!--Seccion de los eventos-->
    <section class="section services-section" id="services" style="padding-top: 50px;">
        <div class="container">
            <div class="row">
                <?php 
                    $sql1 ="SELECT * FROM eventos ORDER BY fecha DESC";
                    $consulta1 = mysqli_query($conexion, $sql1);
                    while($row = mysqli_fetch_array($consulta1)){

                    $fecha = $row['fecha'];
                      $numeroDia = date('d', strtotime($fecha));
                      $dia = date('l', strtotime($fecha));
                      $mes = date('F', strtotime($fecha));
                      $anio = date('Y', strtotime($fecha));
                      $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
                      $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
                      $nombredia = str_replace($dias_EN, $dias_ES, $dia);
                      $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                      $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                      $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
                ?>
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <?php echo $numeroDia; ?>
                        </div>
                        <div class="feature-content">
                            <h5><?php echo $row['nombre'];  ?></h5>
                            <p><i class="fa fa-calendar"></i> <span> &nbsp; <?php echo $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;?></span> </p>
                            <p><i class="fa fa-clock-o"></i> <span>&nbsp; <?php echo $row['hora'];?></span></p>
                            <p><i class="fa fa-map-marker"></i>&nbsp;<?php echo  $row['lugar'];?></span></p>
                        </div>
                            <p> &nbsp;<?php  echo strip_tags(substr($row['descripcion'],0,100)); echo "...";?></span></p>
                        <br>
                        
                    </div>
                </div>

            <?php } ?>
            </div>
        </div>
    </section>


    
    

    <?php include_once "include/footer.php"; ?>
