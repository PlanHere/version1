<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="keywords" content="Hotel,Table Reservation,Booking,Marriage,Halls,Gardens,Decorators,Music,Dj,Resorts,Function halls" />
    <meta name="description" content="Our Plan, Your Joy.Table reservation app,custom search for any restaurant,marriage is made easier">
    <meta name="author" content="Plan Here">
    <title>Your Cart | Plan Here</title>
    
    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="./favicons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="./favicons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="./favicons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="./favicons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="./favicons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="./favicons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="./favicons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="./favicons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="./favicons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="./favicons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="./favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="./favicons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
		<link rel="manifest" href="./favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="./favicons/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">
    
    <!-- CSS -->
    <link href="css/jquery.switch.css" rel="stylesheet">
	
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <?php
        include('./head_fun.php');
    ?>
        
</head>
<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
     <!-- Header================================================== -->
    <?php
        include('./header.php');
    ?>
    <!-- End Header -->

<section id="hero_2">
	<div class="intro_title animated fadeInDown">
           <h1>Order Your Happiness</h1>
            <div class="bs-wizard">
  			
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum">Your cart</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="./cart.php" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum">Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="./payment.php" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum">Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="./confirmation.php" class="bs-wizard-dot"></a>
                </div>  
                   
		</div>  <!-- End bs-wizard --> 
    </div>   <!-- End intro-title --> 
</section><!-- End Section hero_2 -->
    
    <div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li>Your Cart</li>
                    </ul>
        </div>
    </div><!-- End position -->

    <div class="container margin_60">
    <div class="row">
    <div class="col-md-8">
    	<table class="table table-striped cart-list add_bottom_30">
            <thead>
            <tr>
                <th>
                    Product / Service
                </th>
                <th>
                    Number of Persons
                </th>
                <th>
                    Price
                </th>
                <th>
                    Total
                </th>
                <th>
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div class="thumb_cart">
                        <img src="img/thumb_cart_1.jpg" alt="">
                    </div>
                     <span class="item_cart">Louvre Museum tickets</span>
                </td>
                <td>
                    <div class="numbers-row">
                        <input type="text" value="1" id="quantity_1" class="qty2 form-control" name="quantity_1">
                    </div>
                </td>
                <td>
                    0
                </td>
                <td>
                    <strong>₹24,71</strong>
                </td>
                <td class="options">
                    <a href="#"><i class=" icon-trash"></i></a><a href="#"><i class="icon-ccw-2"></i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="thumb_cart">
                        <img src="img/thumb_cart_1.jpg" alt="">
                    </div>
                    <span class="item_cart">Eiffell tour</span>
                </td>
                <td>
                    <div class="numbers-row">
                        <input type="text" value="0" id="quantity_2" class="qty2 form-control" name="quantity_2">
                    </div>
                </td>
                <td>
                    0
                </td>
                <td>
                    <strong>₹0,0</strong>
                </td>
                <td class="options">
                    <a href="#"><i class=" icon-trash"></i></a><a href="#"><i class="icon-ccw-2"></i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="thumb_cart">
                        <img src="img/thumb_cart_1.jpg" alt="">
                    </div>
                     <span class="item_cart">Senna river Tour</span>
                </td>
                <td>
                    <div class="numbers-row">
                        <input type="text" value="1" id="quantity_3" class="qty2 form-control" name="quantity_3">
                    </div>
                </td>
                <td>
                    0
                </td>
                <td>
                    <strong>₹24,71</strong>
                </td>
                <td class="options">
                    <a href="#"><i class=" icon-trash"></i></a><a href="#"><i class="icon-ccw-2"></i></a>
                </td>
            </tr>
            </tbody>
            </table>
            <!--table class="table table-striped options_cart">
            <thead>
            <tr>
                <th colspan="3">
                    Add options / Services
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="width:10%">
                    <i class="icon_set_1_icon-16"></i>
                </td>
                <td style="width:60%">
                    Dedicated Tour guide <strong>+₹34</strong>
                </td>
                <td style="width:35%">
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_1" id="option_1" checked value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-26"></i>
                </td>
                <td>
                    Pick up service <strong>+₹34*</strong>
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_2" id="option_2" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-71"></i>
                </td>
                <td>
                    Insurance <strong>+₹24*</strong>
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_3" id="option_3" value="" checked>
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-15"></i>
                </td>
                <td>
                    Welcome bottle <strong>+₹24</strong>
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_4" id="option_4" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-59"></i>
                </td>
                <td>
                    Coffe break <strong>+₹12*</strong>
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_5" id="option_5" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-58"></i>
                </td>
                <td>
                    Dinner <strong>+₹26*</strong>
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_6" id="option_6" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-40"></i>
                </td>
                <td>
                    Bike rent <strong>+₹26*</strong>
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_7" id="option_7" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            </tbody>
            </table-->
            <big>* Prices For One Person.</big>    
    </div><!-- End col-md-8 -->
    
    <aside class="col-md-4">
    <div class="box_style_1">
        <h3 class="inner">- Summary -</h3>
        <table class="table table_summary">
        <tbody>
        <!--tr>
            <td>
                Adults
            </td>
            <td class="text-right">
                2
            </td>
        </tr>
        <tr>
            <td>
                Children
            </td>
            <td class="text-right">
                0
            </td>
        </tr>
        <tr>
            <td>
                Dedicated tour guide
            </td>
            <td class="text-right">
                ₹34
            </td>
        </tr>
        <tr>
            <td>
                Insurance
            </td>
            <td class="text-right">
                ₹34
            </td>
        </tr-->
        <tr class="total">
            <td>
                Total cost
            </td>
            <td class="text-right">
                ₹154
            </td>
        </tr>
        </tbody>
        </table>
        <a class="btn_full" href="./payment.php">Check out</a>
        <a class="btn_full_outline" href="./index.php"><i class="icon-right"></i> Continue shopping</a>
    </div>
    <div class="box_style_4">
				<i class="icon_set_1_icon-57"></i>
				<h4>Need <span>Help?</span></h4>
				<a href="tel://+919849697174" class="phone">+91 98496 97174</a>
				<small>Monday to Sunday <br>9.00am to 9.00pm</small>
			</div>
    </aside><!-- End aside -->

</div><!--End row -->
</div><!--End container -->
<?php
        include('./footer.php');
    ?>
<!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Jquery -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>


<script>  
//Incrementer
$(function () {
	"use strict";
    $(".numbers-row").append('<div class="inc button_inc">+</div><div class="dec button_inc">-</div>');
    $(".button_inc").on("click", function () {

        var $button = $(this);
        var oldValue = $button.parent().find("input").val();

        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
    });
});
 </script>





  </body>
</html>