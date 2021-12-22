    <?php require_once "conexion.php";
    include_once "include/header.php"; 

    $sqlimagen ="SELECT * FROM imagenes WHERE estado = '1' && uso IN ('slider', 'ambos')";
        $consultaimg = mysqli_query($conexion, $sqlimagen);
    $sqlredes ="SELECT * FROM redes ";
        $consultaredes = mysqli_query($conexion, $sqlredes);
    ?>
    <!-- start slider section -->
    <link rel="stylesheet" href="assets/css/flexslider.css">
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
                        <span>Swhen looking at its layout. The point of using Lorem
                        </span>

                     </div>
                  </div>
               </div>

            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                <div class="blog_box">
                  <div class="blog_img_box">
                    <figure><img src="images/blog_img1.png" alt="#"/>
                     <span>02 FEB 2019</span>
                    </figure>
                  </div>
                  <h3>Spicy Barger</h3>
                  <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the </p>
                </div>
              </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                <div class="blog_box">
                  <div class="blog_img_box">
                    <figure><img src="images/blog_img2.png" alt="#"/>
                     <span>02 FEB 2019</span>
                    </figure>
                  </div>
                  <h3>Egg & Tosh</h3>
                  <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the </p>
                </div>
              </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="blog_box">
                  <div class="blog_img_box">
                    <figure><img src="images/blog_img3.png" alt="#"/>
                     <span>02 FEB 2019</span>
                    </figure>
                  </div>
                  <h3>Pizza</h3>
                  <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end blog -->

        <!-- Redes sociales -->
        <div class="Client">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="title redes">
                  <i><img src="assets/images/redes.png" width="50%" alt="#"/ ></i>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <div class="Client_box">
                   <h3>¡Siguenos en redes!</h3>
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
                        <div class="titu" style="color: <?php echo $color?>;">

                            <div id="izquierda" > <a href="<?php echo $link?>" target="_blank"><i style="color: <?php echo $color?>;" class="<?php echo $icono?>"></i></div> </a>
                            <div id="derecha"><?php echo $nom_red?></div>
                           <!--   <font face="Bookman Old Style, Book Antiqua, Garamond" size="4vw">Libro Diario</font>-->
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