    <?php include_once "include/header.php"; 
    $sqlproductos ="SELECT `id`, `nom_p`, `precio`, `imagen`  FROM producto WHERE `cantidad` > 1 AND `estado`='activo' ORDER BY id DESC  ";
        $consultapro = mysqli_query($conexion, $sqlproductos);
    ?>
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
    <div class="baner " style="background-image: url(assets/images/);">
        <div class="container">
            <div class="row">
                <div class="col text-center" style="background:rgba(0,0,0,0.4);margin-top: 10px;">
                    <font size="16" color="#fff"><i>!Conoce todos nuestros productos¡</i></font>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    
   
    <div class="section"    >
        <div class="container"  >
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
    </div>
   

    <!-- seccion clara -->
    
    <!-- fin seccion clara -->

    <?php include_once "include/footer.php"; ?>
