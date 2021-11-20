<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jadusona - eCommerce Baby shop Bootstrap4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS  -->
   
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
</head>

<body>

<div class="main-wrapper">

    <!-- Header Section Start -->
    <?php 
    include_once "header.php";
    require_once "conexion.php";
    ?>
    <!-- Header Section End -->
    <?php
        $id=$_GET['id'];
        $sql1 ="SELECT * FROM blog where id=$id";
        $consulta1 = mysqli_query($conexion, $sql1);
        while($row = mysqli_fetch_array($consulta1)){
            
    ?>
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/blog/industria.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col text-center">
                    <h1 style="color:#FFFFFF"><?php echo $row['titulo'] ?></h1>
                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Blog Section Start -->
    
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
                                <li><a href="#"><img src="<?php echo $row['file'];?>" alt="Blog Author"></a></li>
                                <li><?php echo $row['date'];?></li>
                            </ul>

                            
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
                        <h4 class="sidebar-title">Archive</h4>
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
                </div>

            </div>
        </div>
    </div><!-- Blog Section End -->



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