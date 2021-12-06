    <?php include_once "include/header.php"; 
    require_once "conexion.php";?>
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
    <div class="baner " style="background-image: url(assets/images/baner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col text-center" style="background:rgba(0,0,0,0.4);margin-top: 10px;">
                    <font size="16" color="#fff"><i>!Blog¡</i></font>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    
   
    <div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
  
        <div class="card-group">
           <div class="container">
              <div class="row mt-4">
                 <?php 
                    $sql1 ="SELECT * FROM blog  ORDER BY date DESC";
                    $consulta1 = mysqli_query($conexion, $sql1);
                    while($row = mysqli_fetch_array($consulta1)){
                ?>
                 <div class="col-md-4">

                    <div class="card">
                    <img src="<?php echo $row['file'];?>" width="auto" height="auto" >
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
   

    <!-- seccion clara -->
    
    <!-- fin seccion clara -->

    <?php include_once "include/footer.php"; ?>
