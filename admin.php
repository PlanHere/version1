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
    <title>Admin | Plan Here</title>

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
           <h1>Hello Admin</h1>

    </div>   <!-- End intro-title -->
</section><!-- End Section hero_2 -->

    <div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="#">Login</a></li>
                    <li>Admin Page</li>
                    </ul>
        </div>
    </div><!-- End position -->

    <div class="container margin_60">
    	<div class="row">
    		<div class="col-md-8 col-sm-8">
    			<div class="form_title">
    				<h3><strong><i class="icon-pencil"></i></strong>Edit Board</h3>
    				<p>.
    				</p>
    			</div>
    			<div class="step">

    				<div id="message-contact"></div>
    				<form method="post" action="assets/contact.php" id="contactform">
    					<div class="row">
    						<div class="col-md-6 col-sm-6">
    							<div class="form-group">
    								<label>Name<sup>*</sup></label>
    								<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Enter Name Of the Vendor">
    							</div>
    						</div>
    						<div class="col-md-6 col-sm-6">
    							<div class="form-group">
    								<label>Type</label>
    								<input type="text" class="form-control" id="username_contact" name="username_contact" placeholder="Hotel / Marriage /Halls/ Others">
    							</div>
    						</div>
    					</div>
    					<!-- End row -->
    					<div class="row">
    						<div class="col-md-6 col-sm-6">
    							<div class="form-group">
    								<label>Username<sup>*</sup></label>
    								<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Enter Username">
    							</div>
    						</div>

    					</div>
    					<div class="row">
    						<div class="col-md-12">
    							<div class="form-group">
    								<label>PlanHere Description<sup>*</sup></label>
    								<textarea rows="5" id="message_contact" name="message_contact" class="form-control" placeholder="Write your message" style="height:200px;"></textarea>
    							</div>
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-md-6">
    							<input type="submit" value="Submit" class="btn_1" id="submit-contact">
    						</div>
    					</div>
    				</form>
    			</div>
    		</div><!-- End col-md-8 -->


    	</div><!-- End row -->
    </div><!-- End container -->
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
