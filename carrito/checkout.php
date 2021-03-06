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

                    <h1>Checkout</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row">

                <div class="col-12">

                    <!-- Checkout Form s-->
                    <form action="#" class="checkout-form">
                       <div class="row row-50">

                           <div class="col-lg-7">

                               <!-- Billing Address -->
                               <div id="billing-form" class="mb-20">
                                   <h4 class="checkout-title">Billing Address</h4>

                                   <div class="row">

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>First Name*</label>
                                           <input type="text" placeholder="First Name">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Last Name*</label>
                                           <input type="text" placeholder="Last Name">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Email Address*</label>
                                           <input type="email" placeholder="Email Address">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Phone no*</label>
                                           <input type="text" placeholder="Phone number">
                                       </div>

                                       <div class="col-12 mb-5">
                                           <label>Company Name</label>
                                           <input type="text" placeholder="Company Name">
                                       </div>

                                       <div class="col-12 mb-5">
                                           <label>Address*</label>
                                           <input type="text" placeholder="Address line 1">
                                           <input type="text" placeholder="Address line 2">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Country*</label>
                                           <select class="nice-select">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                           </select>
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Town/City*</label>
                                           <input type="text" placeholder="Town/City">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>State*</label>
                                           <input type="text" placeholder="State">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Zip Code*</label>
                                           <input type="text" placeholder="Zip Code">
                                       </div>

                                       <div class="col-12 mb-5">
                                           <div class="check-box mb-15">
                                               <input type="checkbox" id="create_account">
                                               <label for="create_account">Create an Acount?</label>
                                           </div>
                                           <div class="check-box mb-15">
                                               <input type="checkbox" id="shiping_address" data-shipping>
                                               <label for="shiping_address">Ship to Different Address</label>
                                           </div>
                                       </div>

                                   </div>

                               </div>

                               <!-- Shipping Address -->
                               <div id="shipping-form" class="mb-20">
                                   <h4 class="checkout-title">Shipping Address</h4>

                                   <div class="row">

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>First Name*</label>
                                           <input type="text" placeholder="First Name">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Last Name*</label>
                                           <input type="text" placeholder="Last Name">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Email Address*</label>
                                           <input type="email" placeholder="Email Address">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Phone no*</label>
                                           <input type="text" placeholder="Phone number">
                                       </div>

                                       <div class="col-12 mb-5">
                                           <label>Company Name</label>
                                           <input type="text" placeholder="Company Name">
                                       </div>

                                       <div class="col-12 mb-5">
                                           <label>Address*</label>
                                           <input type="text" placeholder="Address line 1">
                                           <input type="text" placeholder="Address line 2">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Country*</label>
                                           <select class="nice-select">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                           </select>
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Town/City*</label>
                                           <input type="text" placeholder="Town/City">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>State*</label>
                                           <input type="text" placeholder="State">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Zip Code*</label>
                                           <input type="text" placeholder="Zip Code">
                                       </div>

                                   </div>

                               </div>

                           </div>

                           <div class="col-lg-5">
                               <div class="row">

                                   <!-- Cart Total -->
                                   <div class="col-12 mb-40">

                                       <h4 class="checkout-title">Cart Total</h4>

                                       <div class="checkout-cart-total">

                                           <h4>Product <span>Total</span></h4>

                                           <ul>
                                               <li>Samsome Notebook Pro 5 X 01 <span>$295.00</span></li>
                                               <li>Aquet Drone  D 420 X 02 <span>$550.00</span></li>
                                               <li>Play Station X 22 X 01 <span>$295.00</span></li>
                                               <li>Roxxe Headphone Z 75 X 01 <span>$110.00</span></li>
                                           </ul>

                                           <p>Sub Total <span>$1250.00</span></p>
                                           <p>Shipping Fee <span>$00.00</span></p>

                                           <h4>Grand Total <span>$1250.00</span></h4>

                                       </div>

                                   </div>

                                   <!-- Payment Method -->
                                   <div class="col-12 mb-40">

                                       <h4 class="checkout-title">Payment Method</h4>

                                       <div class="checkout-payment-method">

                                           <div class="single-method">
                                               <input type="radio" id="payment_check" name="payment-method" value="check">
                                               <label for="payment_check">Check Payment</label>
                                               <p data-method="check">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                           </div>

                                           <div class="single-method">
                                               <input type="radio" id="payment_bank" name="payment-method" value="bank">
                                               <label for="payment_bank">Direct Bank Transfer</label>
                                               <p data-method="bank">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                           </div>

                                           <div class="single-method">
                                               <input type="radio" id="payment_cash" name="payment-method" value="cash">
                                               <label for="payment_cash">Cash on Delivery</label>
                                               <p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                           </div>

                                           <div class="single-method">
                                               <input type="radio" id="payment_paypal" name="payment-method" value="paypal">
                                               <label for="payment_paypal">Paypal</label>
                                               <p data-method="paypal">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                           </div>

                                           <div class="single-method">
                                               <input type="radio" id="payment_payoneer" name="payment-method" value="payoneer">
                                               <label for="payment_payoneer">Payoneer</label>
                                               <p data-method="payoneer">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                           </div>

                                           <div class="single-method">
                                               <input type="checkbox" id="accept_terms">
                                               <label for="accept_terms">I???ve read and accept the terms & conditions</label>
                                           </div>

                                       </div>

                                       <button class="place-order">Place order</button>

                                   </div>

                               </div>
                           </div>

                       </div>
                    </form>

                </div>
            </div>
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