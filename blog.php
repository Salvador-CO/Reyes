<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jadusona - eCommerce Baby shop Bootstrap4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icon-font.min.css">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="assets/librerias/alertifyjs/css/alertify.css">

</head>

<body>

<div class="main-wrapper">

    <!-- Header Section Start -->
    <?php include_once "header.php"; require_once "conexion.php";?>
    
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/blog/industria.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1 style="color:#FFFFFF">Blog</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php" style="color:#FFFFFF">Inicio</a></li>
                        <li><a href="blog.html" style="color:#FFFFFF">Blog</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Blog Section Start -->

        <div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
            <?php 
                $sql1 ="SELECT * FROM blog  ORDER BY id ASC";
                $consulta1 = mysqli_query($conexion, $sql1);
                while($row = mysqli_fetch_array($consulta1)){
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-60 mb-xs-40">
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a class= "image" href="post.php?id=<?php echo $row['id'];?>"><img src="<?php echo $row['file'];?>" width="177px" height="209px"></a>
                            </div>
                            <div class="content">
                                    <h4 class="title"><a href="post.php?id=<?php echo $row['id'];?>"><?php echo $row['titulo'] ?></a></h4>
                                <div class="desc">
                                    <?php echo strip_tags(substr($row['contenido'],0,100)); echo "..."; ?>
                                </div>
                                <ul class="meta">
                                    <h4 class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $row['date'] ?></h4>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-60 mb-xs-40">
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a class= "image" href="post.php?id=<?php echo $row['id'];?>"><img src="assets/images/blog/industria.jpg<?php //echo $row['file'];?>" width="177px" height="209px"></a>
                            </div>
                            <div class="content">
                                    <h4 class="title"><a href="post.php?id=<?php echo $row['id'];?>"><?php echo $row['titulo'] ?></a></h4>
                                <div class="desc">
                                    <?php echo strip_tags(substr($row['contenido'],0,100)); echo "..."; ?>
                                </div>
                                <ul class="meta">
                                    <h4 class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $row['date'] ?></h4>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        <!--
            <article class="post">
              <div class="row">
                <div class="col-md-4 col-sm-4"> <a href="news_post.php?id=<?php echo $row['id'];?>"><img src="assets/images/blog/industria.jpg<?php //echo $row['file'];?>" alt="" class="img-thumbnail img-responsive"></a> </div>
                <div class="col-md-8 col-sm-8">
                  <h3><a href="news_post.php?id=<?php echo $row['id'];?>"><?php echo $row['news_title']; ?></a></h3>
                  <span class="post-meta meta-data"> <span><i class="fa fa-calendar"></i> <?php echo $row['date'];?></span></span>
                  <?php echo strip_tags(substr($row['news_detail'],0,180)) ;?>...
                  <p><a href="news_post.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Continue reading <i class="fa fa-long-arrow-right"></i></a></p>
                </div>
              </div>
            </article>--->

        <?php } ?>

    <!-- Footer -->
    <?php include_once "footer.php"; ?>
    <!-- Footer -->

</div>

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>