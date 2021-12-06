  <?php include_once "include/header.php"; 
    require_once "conexion.php";?>

<!-- Page Banner Section Start -->
    <div class="baner " style="background-image: url(assets/images/baner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col text-center" style="background:rgba(0,0,0,0.4);margin-top: 10px;">
                    <font size="16" color="#fff"><i>Nuestro Blog</i></font>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->
    <div class="bg_bg">
        

        <!-- end blog -->
        <?php
        $id=$_GET['id'];
        $sql1 ="SELECT * FROM blog where id=$id";
        $consulta1 = mysqli_query($conexion, $sql1);
        while($row = mysqli_fetch_array($consulta1)){
            
    ?>
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section">
        <div class="blog">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                 <h1><?php echo $row['titulo'] ?></h1>                
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!--cuerpo del post-->

    <div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row row-30">

                <div class="col-xl-9 col-lg-8 col-12 order-1 order-lg-2 mb-40">
                    <div class="single-blog"> 
                        <div class="image-wrap" style="align-items: center; display: flex; justify-content: center;">
                                <img src="<?php echo $row['file'];?>" width="600px" height="400px" align="center">
                        </div>
                        <div class="content">
                            <ul class="meta">
                                <li><?php echo $row['date'];?></li>
                            </ul>
                            <hr>

                            
                            <div class="desc">
                                <?php echo $row['contenido'] ?>
                            </div>

                            <div class="blog-footer row mt-45">

                            </div>
                        </div>
                    </div>
        <?php } ?>
                </div>

                <div class="col-xl-3 col-lg-4 col-12 order-2 order-lg-1 mb-40">
                    <div class="sidebar">
                        <h4 class="sidebar-title">Otras publicaciones</h4>
                        <?php
                            
                            $sql1 ="SELECT * FROM blog ";
                            $consulta1 = mysqli_query($conexion, $sql1);
                            while($row = mysqli_fetch_array($consulta1)){
                                    
                        ?>
                        <div class="sidebar">
                            
                            <ul class="sidebar-list">
                                <li><a href="post.php?id=<?php echo $row['id'];?>"><?php echo $row['titulo'] ?></a></li>
                            </ul>
                        </div>
                        <?php  } ?>
                        <hr width="1" size="500"> 
                    </div>
                </div>
        </div>
    </div><!-- Blog Section End -->


    </div>


       

    </div>

     <?php include_once "include/footer.php"; ?>
