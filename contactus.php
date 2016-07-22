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
    <title>Contact Us | Plan Here</title>

    <!-- Favicons -->
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
    <?php
        include('./header.php');
    ?>
    <!-- End Header -->

    <section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
            <h1>Contact us</h1>
            <p></p>
            </div>
        </div>
    </section><!-- End Section -->

    <div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li>Contact Us</li>
                    </ul>
        </div>
    </div><!-- End Position -->

<div class="container margin_60">
	<div class="row">
		<div class="col-md-8 col-sm-8">
			<div class="form_title">
				<h3><strong><i class="icon-pencil"></i></strong>Drop us a line</h3>
				<p>
					by filling this form and we will get to you back.
				</p>
			</div>
			<div class="step">

				<div id="message-contact"></div>
				<form method="post" action="assets/contact.php" id="contactform">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Name<sup>*</sup></label>
								<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Enter Name">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" id="username_contact" name="username_contact" placeholder="Enter Username (If Registered)">
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Email<sup>*</sup></label>
								<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Enter Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Phone<sup>*</sup></label>
								<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Enter Phone Number (With Country Code)">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Message<sup>*</sup></label>
								<textarea rows="5" id="message_contact" name="message_contact" class="form-control" placeholder="Write your message" style="height:200px;"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Verification<sup>*</sup></label>
							<input type="text" id="verify_contact" class=" form-control add_bottom_30" placeholder="Are you human? 3 + 1 =">
							<input type="submit" value="Submit" class="btn_1" id="submit-contact">
						</div>
					</div>
				</form>
			</div>
		</div><!-- End col-md-8 -->

		<div class="col-md-4 col-sm-4">
			<div class="box_style_1">
				<span class="tape"></span>
				<h4>Address <span><i class="icon-pin pull-right"></i></span></h4>
				<p>
					Plot No 47, HNo: 1-8-50/3/4, 1st Floor, <br>Krishna Nagar Colony, P G Road, <br>Secunderabad, Telangana, <br>INDIA, 500003
				</p>
				<hr>
				<h4>Help center <span><i class="icon-help pull-right"></i></span></h4>
				<p>
					Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie.
				</p>
				<ul id="contact-info">
					<center><li><h4><a href="mailto:support@planhere.in">support@planhere.in</a></h4></li></center>
				</ul>
			</div>
			<div class="box_style_4">
				<i class="icon_set_1_icon-57"></i>
				<h4>Need <span>Help?</span></h4>
				<a href="tel://+919849697174" class="phone">+91 98496 97174</a>
				<small>Monday to Sunday <br>9.00am to 9.00pm</small>
			</div>
		</div><!-- End col-md-4 -->
	</div><!-- End row -->
</div><!-- End container -->

<div id="map_contact"></div><!-- end map-->
<div id="directions">
  	<div class="container">
    	<div class="row">
        <div class="col-md-8 col-md-offset-2">
       <form action="http://maps.google.com/maps" method="get" target="_blank">
				<div class="input-group">
					<input type="text" name="saddr" placeholder="Enter your starting point" class="form-control style-2" />
					<input type="hidden" name="daddr" value="17.439534, 78.482548"/><!-- Write here your end point -->
					<span class="input-group-btn">
					<button class="btn" type="submit" value="Get directions" style="margin-left:0;">GET DIRECTIONS</button>
					</span>
				</div><!-- /input-group -->
			</form>
          </div>
        </div>
    </div>
  </div><!-- end directions-->

<!--Footer Start-->
        <?php
           include('./footer.php');
        ?>
	    <!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

 <!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

 <!-- Specific scripts -->
<script src="assets/validate.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/map_contact.js"></script>
<script src="js/infobox.js"></script>


  </body>
</html>
