    <?php require_once "conexion.php";
    include_once "include/header.php"; 

    $sqlimagen ="SELECT * FROM imagenes ";
        $consultaimg = mysqli_query($conexion, $sqlimagen);
    $sqlredes ="SELECT * FROM redes ";
        $consultaredes = mysqli_query($conexion, $sqlredes);
    ?>
    <!-- start slider section -->
    <div class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <!-- contenido carrusel imagen figa -->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <p >Quieres conocer nuestros increíbles productos, ofertas, promociones y regalos que tenemos para ti  ¡no lo pienses más!, <br> <strong>¡suscríbete ahora mismo!</strong>.</p>
                                                <a class="main_bt_border" href="#">SUSCRIBETE</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <div class="SCO">
                                                  <img class="img-responsive fijot" src="img/1.jpg" alt="Sin imagen" />
                                                  <div class="texto-encima">!Forma parte de nuestro equipo¡</div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- contenido carrusel que se -->
                                <?php if($consultaimg->num_rows === 0) {
                                    //vacio
                                    } else {
                                    while($rowedit = mysqli_fetch_array($consultaimg)){
                                    $titulo ="titulo";
                                    $descriocion=$rowedit["descripcion"];
                                    $ruta = $rowedit["ruta"];
                                    ?>
                                    <div class="carousel-item ">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="slider_cont">
                                                    <p> <?php echo $descriocion;?> </p>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <div class="SCO">
                                                  <img class="img-responsive fijot" src="<?php echo $ruta;?> " alt="Sin imagen" />
                                                  <div class="texto-encima"><?php echo $titulo; ?></div>
                                                  
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } 
                                } ?>
                                
                                <!-- contenido carrusel -->

                            </div>
                            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <li>List item</li>
                            <li>List item</li>
                            <li>List item
                            </li>
                            <li>List item</li>
                            <li>List item</li> 
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
                        ?>
                    <div class="child">
                        <div class="titu">

                            <div id="izquierda" > <a href="<?php echo $link?>" target="_blank"><i class="<?php echo $icono?>"></i></div> </a>
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
