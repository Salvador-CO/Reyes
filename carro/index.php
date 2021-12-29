    <?php require_once "conexion.php";
    include_once "include/header.php"; 

    $sqlimagen ="SELECT * FROM imagenes WHERE estado = '1' && uso IN ('slider', 'ambos')";
        $consultaimg = mysqli_query($conexion, $sqlimagen);
    $sqlredes ="SELECT * FROM redes ";
        $consultaredes = mysqli_query($conexion, $sqlredes);
         $sqlproductos ="SELECT `id`, `nom_p`, `precio`, `imagen`  FROM producto WHERE `cantidad` > 1 AND `estado`='activo' ORDER BY id DESC LIMIT 4";
        $consultapro = mysqli_query($conexion, $sqlproductos);
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
            <img src="../<?php echo $ruta;?> " alt="Sin imagen">
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
        <br><br><br>
    <!-- fin redes -->

    <!-- Productos -->
    <div class="container" >
      <div class="row">
           <div class="col-md-12">
               <div class="title">
                  <i class="fas fa-store fa-5x"></i>
                  <h2>Últimos productos</h2>
                  <span>agregados
                  </span>

               </div>
            </div>
         </div>
            <!-- products -->
               <!-- Product Section Start -->
        <div class="product-section section mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
              <div class="row">

                  <?php if($consultapro->num_rows === 0) {
                      //vacio
                      } else {
                      while($rowedit = mysqli_fetch_array($consultapro)){
                        $id=$rowedit["id"];
                        $nom_p = $rowedit["nom_p"];
                        $precio=$rowedit["precio"];
                        $imagen = $rowedit["imagen"];

                      ?>
                    <!-- repetir -->
                      <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">
                          <div class="product-item">
                              <div class="product-inner">
                                  <div class="image">
                                      <!-- imagen  --> 
                                      <img class="img-responsive" src="../<?php echo $imagen; ?>" alt="sin imagen">
                                      <div class="image-overlay"> 
                                      </div>
                                  </div>
                                  <div class="content">
                                      <div class="content-left">
                                          <!-- nombre del producto cambio -->
                                          <h4 class="title"><a href="unoProducto.php?idpro=<?php echo $id; ?>"><?php echo $nom_p; ?></a></h4>
                                          <div class="ratting">
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fas fa-star-half-alt"></i>
                                          </div>
                                          <!-- cambiar -->
                                          <h5 class="size">Desceunto: --- 
                                             
                                          </h5>
                                          <h5 class="color">Color: 
                                            <span style="background-color: #ffb2b0"></span>
                                            <span style="background-color: #0271bc"></span>
                                            <span style="background-color: #efc87c"></span>
                                            <span style="background-color: #00c183"></span>
                                          </h5>
                                      </div>
                                      <div class="content-right">
                                          <!-- precio cambio -->
                                          <span class="price">$<?php echo $precio; ?></span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    <!-- repetir -->

                  <?php } 
                  } ?>
              </div>
        </div><!-- Product Section End -->        
    </div>
    <!-- productos -->
   
    
    <!-- blog -->
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
        <br><br>
    <!--fin blog -->

    

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


     <?php include_once "include/footer.php"; ?>
<script src="assets/js/jquery.flexslider.js"></script>
    <script src="assets/js/slider.js"></script>