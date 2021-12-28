    <?php include_once "include/header.php"; 

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
                    <font size="16" color="#fff"><i>Información de producto</i></font>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    
   
    <div class="section"   >
        <div class="container"    >

            <?php 
            $idp=$_GET['idpro'];
            $query = mysqli_query($conexion, "SELECT  * FROM `producto` WHERE `id`='$idp'  ");
            $dato = mysqli_fetch_array($query);
            $id=$dato['id'];
            $nombrep=$dato['nom_p'];
            $precio=$dato['precio'];
            $cantidad=$dato['cantidad'];
            $des=$dato['descripcion'];
            $cate=$dato['categoria'];
            $img=$dato['imagen'];
            $estado=$dato['estado'];
            ?>

         <!-- Page Section Start -->
    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container">
            <div class="row row-30">

                <div class="col-12">
                    <div class="row row-20 mb-20 mb-xs-0">

                        <div class="col-lg-6 col-12 mb-40">

                            <div class="pro-large-img mb-10 fix easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                                    <!-- cambio -->
                                <a href="../<?php echo $img; ?> ">
                                    <img src="../<?php echo $img; ?> " alt=""/>
                                </a>
                            </div>
                          
                        </div>

                        <div class="col-lg-6 col-12 mb-40">
                            <form onsubmit="return addCarro();" method="post">
                            <div class="single-product-content">
                                <div class="head">
                                    <div class="head-left">
                                        <!-- cambio -->
                                        <h1 class="title"  > <font size="7"> <?php echo $nombrep; ?></font> </h1>
                                        <input type="text" id="nomp" name="nomp" value="<?php echo $nombrep; ?>" hidden>

                                        <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>

                                    </div>
                                        <!-- cambio -->
                                    <div class="head-right">
                                        <span class="price"> <font size="7"> $<?php echo $precio; ?> </font></span>
                                         <input type="text" id="prep" name="prep" value="<?php echo $precio; ?>" hidden>
                                    </div>
                                </div>
                                    <!-- cambio -->
                                <div class="description">
                                    <p><?php echo $des; ?></p>
                                </div>
                                    <!-- cambio -->
                                <span class="availability">Disponibles: <span><?php echo $cantidad; ?></span></span>
                                <span class="availability">Categoria: <span><?php echo $cate; ?></span></span>
                                <div class="quantity-colors">
                                <!-- agregar al carro -->
                                
                                    <div class="quantity">
                                        <h5>Cantidad:</h5>
                                        <div class="pro-qty">
                                            <input type="number" value="1" id="cant" name="cant" >
                                             
                                        </div>
                                    </div>                            

                                    <div class="colors">
                                        <h5>Color:</h5>
                                        <div class="color-options">
                                            <button style="background-color: #ff502e"></button>
                                            <button style="background-color: #fff600"></button>
                                            <button style="background-color: #1b2436"></button>
                                        </div>
                                    </div>  
                                    <input type="text" name="id_us" id="id_us" value="<?php echo $nombre; ?>" hidden>


                                </div>

                                    <div class="actions">
                                        <button type="submit"><i class="ti-shopping-cart"></i><span>Agregar al carrito</span></button>

                                        <a href="tienda.php"  ><i class="fas fa-store fa-3x"></i></a>

                                         
                                    </div>
                                 

                                
                                <!-- 
                                <div class="tags">
                                    <h5>Categorias:</h5>
                                    <a href="#">Electronic</a>
                                    <a href="#">Smartphone</a>
                                    <a href="#">Phone</a>
                                    <a href="#">Charger</a>
                                    <a href="#">Powerbank</a>

                                </div>
                                -->
                            </div>
                             </form>
                        </div>

                    </div>
 

                </div>

            </div>
        </div>
    </div><!-- Page Section End -->
            
        
        </div>
    </div>
   

    <!-- seccion clara -->
    
    <!-- fin seccion clara -->
    <script type="text/javascript">
        
    function addCarro() {
        var nom = document.getElementById('nomp').value;
        var pre = document.getElementById('prep').value;
        var cant = document.getElementById('cant').value;id_us
        var id_us = document.getElementById('id_us').value;
        var dataen = 'opcion='+1+'&nom='+nom+'&pre='+pre+'&cant='+cant+'&id_us='+id_us;
        $.ajax({
            type:'POST',
            url:'control/carro.php',
            data:dataen,
            success:function(r){
                if (r==1) {
                    alertify.alert().set({'startMaximized':true, 'message':'<center><b><font size="7" color="red"> Producto agregado</font></b><br><a href="tienda.php" type="button" class="btn btn-outline-primary">Seguir comprando</a><a href="carrito.php" type="button" class="btn btn-outline-success">Ver Carrito</a> </center>',
          'onok': function(){ window.location.href = "tienda.php"; }}).show();
                }else{
                    alertify.error("Fallo el servidor");
                }
            }
        });
        return false;
    }
        
         
    </script>

    <?php include_once "include/footer.php"; ?> 

