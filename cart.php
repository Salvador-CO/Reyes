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
</head>

<body>

<div class="main-wrapper">

    <!-- Header Section Start -->
    <?php include_once "header.php"; ?>
    <!-- Header Section End -->

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>Cart</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="cart.html">Cart</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">

            <form action="#">				
                <div class="row">
                    <div class="col-12">
                        <div class="cart-table table-responsive mb-40">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-1.jpg" alt="" /></a></td>
                                        <td class="pro-title"><a href="#">Tmart Baby Dress</a></td>
                                        <td class="pro-price"><span class="amount">$25</span></td>
                                        <td class="pro-quantity"><div class="pro-qty"><input type="text" value="1"></div></td>
                                        <td class="pro-subtotal">$25</td>
                                        <td class="pro-remove"><a href="#">×</a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-2.jpg" alt="" /></a></td>
                                        <td class="pro-title"><a href="#">Jumpsuit Outfits</a></td>
                                        <td class="pro-price"><span class="amount">$09</span></td>
                                        <td class="pro-quantity"><div class="pro-qty"><input type="text" value="1"></div></td>
                                        <td class="pro-subtotal">$09</td>
                                        <td class="pro-remove"><a href="#">×</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="cart-buttons mb-30">
                            <input type="submit" value="Update Cart" />
                            <a href="#">Continue Shopping</a>
                        </div>
                        <div class="cart-coupon mb-40">
                            <h4>Coupon</h4>
                            <p>Enter your coupon code if you have one.</p>
                             <div class="cuppon-form">
                                <input type="text" placeholder="Coupon code" />
                                <input type="submit" value="Apply Coupon" />
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="cart-total fix mb-40">
                            <h3>Cart Totals</h3>
                            <table>
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="amount">$306.00</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong><span class="amount">$306.00</span></strong>
                                        </td>
                                    </tr>											
                                </tbody>
                            </table>
                            <div class="proceed-to-checkout section mt-30">
                                <a href="#">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div><!-- Page Section End -->

    <!-- Brand Section Start -->
    <div class="brand-section section mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container-fluid">
            <div class="row">
                <div class="brand-slider">

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-1.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-2.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-3.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-4.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-5.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-6.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div><!-- Brand Section End -->

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