    <?php require_once "conexion.php";
    include_once "include/header.php"; 

    $sqlimagen ="SELECT * FROM imagenes WHERE estado = '1' && uso IN ('slider', 'ambos')";
        $consultaimg = mysqli_query($conexion, $sqlimagen);
    $sqlredes ="SELECT * FROM redes ";
        $consultaredes = mysqli_query($conexion, $sqlredes);
    ?>
    <!-- start slider section -->
    <link rel="stylesheet" href="assets/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="assets/css/eventos.css">
    <br> 
    <div class="flexslider">
    <ul class="slides">
      <!-- contenido carrusel que se -->
      <?php if($consultaimg->num_rows === 0) {
          //vacio
          } else {
          while($rowedit = mysqli_fetch_array($consultaimg)){
          $descriocion=$rowedit["descripcion"];
          $ruta = $rowedit["ruta"];
          ?>
          <li>
            <img src="<?php echo $ruta;?> " alt="Sin imagen">
            <section class="caption" style="background:rgba(0,0,0,0.7);">
              <h2><?php echo $descriocion; ?></h2>
            </section>
          </li>
      <?php } 
      } ?>
      
      <!-- contenido carrusel -->
    </ul>
  </div>
    <!-- end slider section -->

    <!-- section -->
    

    <div class="bg_bg">
        <!-- about -->
        <div class="about">
            <div class="container">
              <div class="row">
                 <div class="col-md-12">
                     <div class="title">
                        <i><img src="assets/images/empresa.png" alt="#"/></i>
                        <h2>Sobre nosotros</h2>
                        <span>Somo una empresa dedicada a .....
                           <br> .....
                        </span>

                     </div>
                  </div>
               </div>
               <div class="row">
                 <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                     <div class="about_box" >
                         <h3>MISIÓN</h3>
                         <p>Posicionarnos como empresa líder en la industria emergente del Cannabis medicinal en México, guiar una transformación continua en las personas hacia una salud integral y una mejora en la condición humana ...</p>

                         <h3>VISIÓN</h3>
                         <p>Nuestro objetivo es convertirnos en los principales productores de THC y CBD en el mercado nacional y regional además estar a la vanguardia en el estudio y la investigación del cannabis </p>
                        <div style="text-align: right;">
                         <a href="conocenos.php">Leer mas <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                     </div>
                 </div>
                  <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
                     <div class="about_img">
                         <figure><img src="assets/images/t1.jpg" alt="#/"></figure>
                         <div class="about_valores" >
                         <h3>Nuestros Valores</h3>
                         <ol id="lista2">
                            <li>Honestidad</li>
                            <li>Calidad</li>
                            <li>Puntualidad</li>
                            <li>Trabajo en equipo</li>
                            <li>Orientación al cliente</li> 
                        </ol>
                     </div>
                     </div>
                 </div>      
               </div> 
            </div>
        </div>
        <!-- end about -->

    <!-- blog -->
        <div class="blog">
          <div class="container">
                <div class="row">
                    <div class="col-md-12">
                         <div class="title">
                            <i><img src="assets/images/nosotros.png" alt="#"/></i>
                            <h2>Nuestro Blog</h2>
                         </div>
                    </div>
                </div>

                <div class="card-group">
                   <div class="container">
                      <div class="row mt-4">
                         <?php 
                            $sql1 ="SELECT * FROM blog  ORDER BY date DESC LIMIT 3";
                            $consulta1 = mysqli_query($conexion, $sql1);
                            while($row = mysqli_fetch_array($consulta1)){
                        ?>
                         <div class="col-md-4">

                            <div class="card">
                            <img src="blog/<?php echo $row['file'];?>" width="auto" height="auto" >
                            <div class="card-body">
                              <h3 class="card-title"><a href="post.php?id=<?php echo $row['id'];?>"><?php echo $row['titulo'];?></a></h3>
                              <p class="card-text"><?php echo strip_tags(substr($row['contenido'],0,100)); echo "..."; ?></p>
                              
                            </div>
                            <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                              <div class="views"><?php echo $row['date'];?>
                              </div>
                              <div class="stats">
                                  <a href="post.php?id=<?php echo $row['id'];?>" class="btn btn-info">Leer más...</a>
                              </div>
                            </div>
                          </div><br>
                         
                         </div>

                         <?php
                            }
                             
                            ?>
                      </div>
                   </div>
                </div>
            </div>
        </div>
        <!-- end blog -->

        <!--Seccion de los eventos-->
    <div class="row">
        <div class="col-md-12">
            <div class="title">
                <i><img src="assets/images/calendario.png" alt="#" height="63px" width="96px" /></i>
                <h2>Eventos</h2>
                </div>
        </div>
    </div>
    <section class="section services-section" id="services" style="padding-top: 0px; padding-bottom: 0; ">
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
                <div class="col-sm-6 col-lg-4" >
                    <div class="feature-box-1" style="background: #fff">
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


        <!-- Redes sociales -->
        <div class="Client">
          <div class="container">
            <div class="row">
               
            </div>
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <div  >
                  <center>
                   <h1> <font size="7"> ¡Siguenos en redes!</font></h1></center>
                   <p></p>
                   <!-- contenido carrusel que se -->
                <div class="parents">
                    <?php if($consultaimg->num_rows === 0) {
                        //vacio
                        } else {
                        while($rowedit = mysqli_fetch_array($consultaredes)){
                        $nom_red=$rowedit["nom_red"];
                        $icono = $rowedit["icono"];
                        $link = $rowedit["link"];
                            if ($icono=="fas fa-envelope-square") {
                                $nom_red=$link;
                                $link ="#";
                            }
                            $color="#000";
                            if ($icono=="fab fa-facebook") {
                                $color="#3b5998";
                            }
                            if ($icono=="fab fa-instagram") {
                                $color="rgb(131,58,180)";
                            }
                            if ($icono=="fab fa-youtube") {
                                $color="#c4302b";
                            }
                            if ($icono=="fab fa-twitter-square") {
                                $color="#00acee";
                            }
                            if ($icono=="fab fa-whatsapp") {
                                $color="#00bb2d";
                            }
                            if ($icono=="fab fa-linkedin") {
                                $color="#0e76a8";
                            }
                            if ($icono=="fab fa-snapchat") {
                                $color="#FFFC00";
                            }
                            if ($icono=="fab fa-skype") {
                                $color="#00aff0";
                            }
                            if ($icono=="fab fa-pinterest") {
                                $color="#c8232c";
                            }
                            if ($icono=="fab fa-telegram") {
                                $color="#4995be";
                            }

                        ?>
                    <div class="child">
                        <div   style="color: <?php echo $color?>;">

                            <div id="icono" > 
                              <a href="<?php echo $link?>" target="_blank" title="<?php echo $nom_red?>">
                                <i style="color: <?php echo $color?>;" class="<?php echo $icono?>"></i>
                              
                              </a>
                             </div>
                        </div>
                        
                    </div>
                    <?php } 
                    } ?>
                    <!-- fin del ciclo -->   
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end Our Client -->
 
    </div>


    <?php include_once "include/footer.php"; ?>
<script src="assets/js/jquery.flexslider.js"></script>
    <script src="assets/js/slider.js"></script>