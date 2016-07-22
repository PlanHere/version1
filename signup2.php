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
    <title>Sign Up | Plan Here</title>
    
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
    <link href="css/flickity.css" rel="stylesheet">
    
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
    
    <section id="hero" class="login">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                	<div id="login">
                    		<!--div class="text-center"><img src="img/logo_sticky.png" alt="" data-retina="true" ></div-->
                        <center><h1>Sign Up</h1></center>
                            <hr>
                           <form method="post" action="signupbe.php">
                               
                               <div class="form-group">
                                	<label>Phone number</label>
                                    <input type="text" class=" form-control" name="phno" placeholder="Phone number">
                                </div>
								<div class="form-group">
                                            <label >City<span class="required">*</span></label>
                                            <div>
                                                <input type="text" name="city" class="form-control" disabled="disabled" placeholder="Hyderabad">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label >Select Area<span class="required">*</span></label>
                                            <div >
                                                <select class="select2_single form-control required" name="area" tabindex="-1">
                                                    <option value="banj">Banjara Hills  </option>
								<option value="kukat">Kukatpally</option>
								<option value="gach">Gachibowli </option>
								<option value="madha">Madhapur</option>
								<option value="jubil">Jubilee Hills </option>
								<option value="hitech">Hitech City </option>
								<option value="kondapur">Kondapur</option>
								<option value="begumpet">Begumpet </option>
								<option value="mehidi">Mehdipatnam </option>
								<option value="ameer">Ameerpet </option>
								<option value="abids">Abids</option>
								<option value="asrao">A S Rao Nagar </option>
								<option value="charminar">Charminar </option>
								<option value="bowen">Bowenpally </option>
								<option value="dilsuk">Dilsukhnagar </option>
								<option value="manik">Manikonda </option>
								<option value="himayath">Himayath Nagar </option>
								<option value="panja">Panjagutta</option>
								<option value="marred">Marredpally</option>
								<option value="lakdi">Lakdikapul </option>
								<option value="shamsha">Shamshabad </option>
								<option value="toli">Tolichowki</option>
								<option value="srnagar">S R Nagar</option>
								
								
								<option value="nallakunta">Nallakunta</option>
								<option value="kache">Kacheguda</option>
								<option value="nampally">Nampally</option>
								<option value="sainik">Sainikpuri</option>
								<option value="alwal">Alwal</option>
								<option value="sdroad">S D Road </option>
								<option value="malakpet">Malakpet</option>
								<option value="masab">Masab Tank</option>
								<option value="somaji">Somajiguda</option>
								<option value="amberpet">Amberpet</option>
								<option value="koti">Koti</option>
								<option value="miyapur">Miyapur</option>
								<option value="filmnagar">Film Nagar </option>
								<option value="chanda">Chanda Nagar </option>
								<option value="nizampet">Nizampet </option>
								<option value="neclace">Necklace Road  </option>
								<option value="Chandrayan">Chandrayanagutta</option>
								<option value="yosuf">Yousufguda </option>
								<option value="lingam">Lingampally</option>
								<option value="attapur">Attapur</option>
								<option value="karkhana">Karkhana </option>
								<option value="pgroad">PG Road  </option>
								<option value="adikpet">Adikmet</option>
								<option value="basheer">Basheer Bagh </option>
								<option value="padmarao">Padmarao Nagar </option>
								<option value="habsiguda">Habsiguda</option>
								<option value="uppal">Uppal</option>
								<option value="trimul">Trimulgherry</option>
								<option value="tarnaka">Tarnaka</option>
								<option value="srinagar">Srinagar Colony</option>
								<option value="langer">Langer Houz</option>
								<option value="kothapet">Kothapet</option>
								<option value="falaknuma">Falaknuma</option>
								<option value="shamirpet">Shamirpet</option>
								<option value="balanagar">Balanagar</option>
								<option value="vanasthali">Vanasthalipuram</option>
								<option value="moti">Moti Nagar </option>
								<option value="railway">Railway Station Road</option>
								<option value="saroor">Saroor Nagar</option>
								
								
								<option value="jeedi">Jeedimetla</option>
								<option value="medchal">Medchal Road</option>
								<option value="hafeez">Hafeezpet</option>
								<option value="ecil">ECIL </option>
								<option value="malkaj">Malkajgiri</option>
								<option value="khairata">Khairatabad</option>
								<option value="begum">Begum Bazaar</option>
								<option value="kompally">Kompally </option>
								<option value="kothaguda">Kothaguda </option>
								<option value="lbnagar">L B Nagar</option>
								<option value="nacharam">Nacharam </option>
								<option value="boiguda">Boiguda </option>
								<option value="sproad">S P Road</option>
								

                                                </select>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control required" required name="address" rows="3" placeholder='Organization Address'></textarea>
                                            </div>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label >Pincode</label>
                                            <div>
                                                <input type="text" name="pincode" class="form-control" placeholder="Pincode">
                                            </div>
                                        </div>
										 <div class="form-group">
                                            <label >Upload Image</label>
                                            <div >
                                                <input type="file" name="logo" />
                                            </div>
                                        </div>
                                <div id="pass-info" class="clearfix"></div>
                                <button class="btn_full">Finish</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start footer -->
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
<script src="js/pw_strenght.js"></script>

  </body>
</html>