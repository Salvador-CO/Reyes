   <!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Reyes</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="assets/librerias/alertifyjs/css/alertify.css">
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="../assets/images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
    <!-- end loader -->

     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li >
                        <a href="../index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="#">¡Conocenos!</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="blanco.php">!Blanco</a>
                    </li>
                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="index.php"><img src="assets/images/logo.png" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul >
                                <li class="dinone menubtn" > 
                                    <a href="../index.php"><img src="../assets/images/home2.jpg" alt="#">Inicio </a>
                                </li>
                                <li class="dinone menubtn" >
                                    <a href="#"><img  src="../assets/images/conocenos.png" alt="#">!Conocenos¡</a>
                                </li>
                                <li class="dinone menubtn" >
                                    <a href="#"><img style="position: relative;top: -2px;" src="../assets/images/blog.png" alt="#">Blog</a>
                                </li>
                                <li class="button_user">
                                    <a class="button " href="login.php">Ingresa</a>
                                    <a class="button" href="#">Regístrate</a>
                                </li>
                                
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="../assets/images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php  require_once "../conexion.php";?>
    <style type="text/css">
        
    h1{
        text-transform: uppercase;
        font-weight: 900;
        border-left: 10px solid #fec500;
        padding-left: 10px;
        margin-bottom: 30px
    }
    </style>
    
    <!-- seccion oscura -->
 
    <!-- end seccion oscura -->

    <div class="bg_bg">
        
        <div class="blog">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                
                  <h1>Blog</h1>
                
              </div>
            </div>
 
          </div>
        </div>
        <!-- end blog -->



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


       

    </div>

    <?php include_once "../include/footer.php"; ?>

        <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/custom.js"></script>
     <script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="../assets/js/login.js"></script>
    <script src="../assets/librerias/alertifyjs/alertify.js"></script>
    
    <script src="../assets/js/jquery-3.0.0.min.js"></script>
