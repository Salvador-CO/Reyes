<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<?php 
    session_start();
    if (empty($_SESSION['active'])) {
    ?> 
    <div class="header-section section">
            <!-- Header Bottom Start -->
            <div class="header-bottom header-bottom-one header-sticky@">
                <div class="container-fluid">
                    <div class="row menu-center align-items-center justify-content-between">

                        <div class="col mt-15 mb-15">
                            <!-- Logo Start -->
                            <div class="header-logo" align="center">
                                <a href="index.php">
                                    <img src="assets/images/cannabis.png" width="65%" >
                                </a>
                            </div><!-- Logo End -->
                        </div>

                        <!-- menu de dibujos -->
                        <div class="col order-2 order-lg-3" >
                            <!-- Header Advance Search Start -->
                            <div class="header-shop-links" align="center" >

                                <div class="header-mini-cart" align="center" >
                                    <a class="enlacedes" href="login-register.php" ><i class="fas fa-sign-in-alt"></i> Iniciar secion</a>
                                </div>

                            </div>
                            <!-- Header Advance Search End -->
                        </div>

                        <!-- menu Normal -->
                        <div class="col order-3 order-lg-2">
                            <div class="main-menu" id="menu">
                                <nav>
                                    <ul >
                                        <li >
                                            <a href="index.php"> <i class="fas fa-home"></i> Inicio</a>
                                        </li>
                                        <li><a href="conocenos.php"><i class="fas fa-mobile-alt"></i> Conocenos</a></li>

                                        <li><a href="blog.php"><i class="fab fa-blogger"></i> BLOG</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="single-blog.php">Single Blog</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            <a href="conocenos.php"><i class="fas fa-mobile-alt"></i> Galeria</a>
                                        </li>

                                        <li><a href="#"><i class="fas fa-plus-circle"></i> Mas..</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.php">Cart</a></li>
                                                <li><a href="checkout.php">Checkout</a></li>
                                                <li><a href="login-register.php">Login & Register</a></li>
                                                <li><a href="wishlist.php">Wishlist</a></li>
                                            </ul>
                                        </li>

                                        
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="mobile-menu order-12 d-block d-lg-none col"></div>

                    </div>
                </div>
            </div>
            <!-- Header BOttom End -->
    </div>
    <?php
    }else{
    ?>
    <div class="header-section section">
            <!-- Header Top Start -->
            <div class="header-top header-top-one bg-theme-two">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-center">

                        <div class="col mt-10 mb-10">
                            <!-- Header Shop Links Start -->
                            <div class="header-top-right">
                                <p><a href="login-register.php">Register</a><a href="login-register.php">Login</a></p>
                            </div><!-- Header Shop Links End -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- Header Top End -->

            <!-- Header Bottom Start -->
            <div class="header-bottom header-bottom-one header-sticky@">
                <div class="container-fluid">
                    <div class="row menu-center align-items-center justify-content-between">

                        <div class="col mt-15 mb-15">
                            <!-- Logo Start -->
                            <div class="header-logo" align="center">
                                <a href="index.php">
                                    <img src="assets/images/cannabis.png" width="65%" >
                                </a>
                            </div><!-- Logo End -->
                        </div>

                        <!-- menu de dibujos -->
                        <div class="col order-2 order-lg-3">
                            <!-- Header Advance Search Start -->
                            <div class="header-shop-links">

                                <div class="header-wishlist">
                                    <a href="wishlist.php"><img src="assets/images/icons/wishlist.png" alt="Wishlist"> <span>02</span></a>
                                </div>

                                <div class="header-mini-cart">
                                    <a href="cart.php"><img src="assets/images/icons/cart.png" alt="Cart"> <span>02($250)</span></a>
                                </div>

                            </div>
                            <!-- Header Advance Search End -->
                        </div>

                        <!-- menu Normal -->
                        <div class="col order-3 order-lg-2">
                            <div class="main-menu" id="menu">
                                <nav>
                                    <ul >
                                        <li >
                                            <a href="index.php"> <i class="fas fa-home"></i> Inicio</a>
                                        </li>
                                        <li><a href="conocenos.php"><i class="fas fa-mobile-alt"></i> Conocenos</a></li>

                                        <li><a href="blog.php"><i class="fab fa-blogger"></i> BLOG</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="single-blog.php">Single Blog</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            <a href="shop.php"><i class="fas fa-store"></i> Tienda</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.php">Tienda</a></li>
                                                <li><a href="categorias.php">Categoria</a></li>
                                                <li><a href="productoUnico.php">Solo uno</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fas fa-plus-circle"></i> Mas..</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.php">Cart</a></li>
                                                <li><a href="checkout.php">Checkout</a></li>
                                                <li><a href="login-register.php">Login & Register</a></li>
                                                <li><a href="wishlist.php">Wishlist</a></li>
                                            </ul>
                                        </li>

                                        
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="mobile-menu order-12 d-block d-lg-none col"></div>

                    </div>
                </div>
            </div>
            <!-- Header BOttom End -->
    </div>
    <?php  
    }
    ?>
