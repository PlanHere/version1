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
    <title>Your Payment | Plan Here</title>
    
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
    
    <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">
	
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


    
   <section id="hero_2">
	<div class="intro_title animated fadeInDown">
           <h1>Order Your Happiness</h1>
            <div class="bs-wizard">
  			
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Your cart</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="./cart.php" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum">Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
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
                    <li>Your Payment</li>
                    </ul>
        </div>
    </div><!-- End position -->

<div class="container margin_60">
	<div class="row">
		<div class="col-md-8">
			<div class="form_title">
				<h3><strong>1</strong>Your Details</h3>
				<p>
					Mussum ipsum cacilds, vidis litro abertis.
				</p>
			</div>
			<div class="step">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>First name</label>
							<input type="text" class="form-control" id="firstname_booking" name="firstname_booking">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Last name</label>
							<input type="text" class="form-control" id="lastname_booking" name="lastname_booking">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Email</label>
							<input type="email" id="email_booking" name="email_booking" class="form-control">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Confirm email</label>
							<input type="email" id="email_booking_2" name="email_booking_2" class="form-control">
						</div>
					</div>
				</div>
                <div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Telephone</label>
							<input type="text" id="telephone_booking" name="telephone_booking" class="form-control">
						</div>
					</div>
				</div>
			</div><!--End step -->
            
			<div class="form_title">
				<h3><strong>2</strong>Payment Information</h3>
				<p>
					Mussum ipsum cacilds, vidis litro abertis.
				</p>
			</div>
			<div class="step">
				<div class="form-group">
					<label>Name on card</label>
					<input type="text" class="form-control" id="name_card_bookign" name="name_card_bookign">
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Card number</label>
							<input type="text" id="card_number" name="card_number" class="form-control">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<img src="img/cards.png" width="207" height="43" alt="Cards" class="cards">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label>Expiration date</label>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="MM">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="Year">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Security code</label>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
									</div>
								</div>
								<div class="col-md-8">
									<img src="img/icon_ccv.gif" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
								</div>
							</div>
						</div>
					</div>
				</div><!--End row -->
                
				<hr>
                
				<h4>Or checkout with Paypal</h4>
				<p>
					Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie, reque fierent dissentiunt mel ea.
				</p>
				<p>
					<img src="img/paypal_bt.png" alt="">
				</p>
			</div><!--End step -->
            
			<div class="form_title">
				<h3><strong>3</strong>Billing Address</h3>
				<p>
					Mussum ipsum cacilds, vidis litro abertis.
				</p>
			</div>
			<div class="step">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Country</label>
							<select class="form-control" name="country" id="country">
								<option value="" selected>Select your country</option>
								<option value="Europe">Europe</option>
								<option value="United states">United states</option>
								<option value="Asia">Asia</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Street line 1</label>
							<input type="text" id="street_1" name="street_1" class="form-control">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Street line 2</label>
							<input type="text" id="street_2" name="street_2" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>City</label>
							<input type="text" id="city_booking" name="city_booking" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>State</label>
							<input type="text" id="state_booking" name="state_booking" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Postal code</label>
							<input type="text" id="postal_code" name="postal_code" class="form-control">
						</div>
					</div>
				</div><!--End row -->
			</div><!--End step -->
            
			<div id="policy">

				<div class="form-group">
					<label><input type="checkbox" name="policy_terms" id="policy_terms">I accept terms and conditions and general policy.</label>
				</div>
				<a href="confirmation.php" class="btn_1 green medium">Book now</a>
			</div>
		</div>
        
		<aside class="col-md-4">
		<div class="box_style_1">
			<h3 class="inner">- Summary -</h3>
			<!--table class="table table_summary">
			<tbody>
			<tr>
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
			</tr>
			<tr class="total">
				<td>
					Total cost
				</td>
				<td class="text-right">
					₹154
				</td>
			</tr>
			</tbody>
			</table-->
			<a class="btn_full" href="confirmation.php">Book now</a>
			<a class="btn_full_outline" href="./index.php"><i class="icon-right"></i> Continue shopping</a>
		</div>
		 <div class="box_style_4">
				<i class="icon_set_1_icon-57"></i>
				<h4>Need <span>Help?</span></h4>
				<a href="tel://+919849697174" class="phone">+91 98496 97174</a>
				<small>Monday to Sunday <br>9.00am to 9.00pm</small>
			</div>
		</aside>
        
	</div><!--End row -->
</div><!--End container -->

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
<script src="js/icheck.js"></script>
<script>  
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>

  </body>
</html>