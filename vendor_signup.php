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
    <title>Vendor Sign Up | Plan Here</title>

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
    <style>
        textarea{
            resize:none;
        }
    </style>

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
    <?php include 'header.php'; ?>
    <!-- End Header -->

    <section id="hero" class="login">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                	<div id="login">
                        <center><h1>Vendor Sign Up</h1></center>
                    		<!--div class="text-center"><img src="img/logo_sticky.png" alt="" data-retina="true" ></div-->
                            <hr>

                            <section id="search_container">
 	<div id="search">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#hotel" data-toggle="tab">Hotel </a></li>
                        <li><a href="#marriage" data-toggle="tab">Marriage</a></li>
                        <li><a href="#halls" data-toggle="tab">Halls</a></li>
                        <li><a href="#others" data-toggle="tab">Others</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="hotel">

                        	<form method="post" class="form-horizontal form-label-left" enctype="multipart/form-data" action="vendor_hotelbe.php">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Name of the Organization<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="name" required class="form-control required" placeholder="Organisation Name (eg: Hotel XYZ)">
                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Username<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="username" required class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" name="password" required class="form-control required" min="6"  placeholder="minimum 6 characters">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" name="confirmpassword" required class="form-control required" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="email" name="email" class="form-control" required placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="phno" class="form-control" min="10" maxlength="10" placeholder="Phone Number">
                                            </div></div>

                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">City<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="city" class="form-control" disabled="disabled" placeholder="Hyderabad">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Area<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Landmark</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="landmark"  class="form-control" placeholder="Landmark">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pincode</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="pincode" class="form-control" placeholder="Pincode">
                                            </div>
                                        </div>


                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Meal
                                            </label>

                                            <div class="col-md-3 col-sm-3 col-xs-12 required">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="breakfast" name="meal[]">Breakfast
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="lunch" name="meal[]">Lunch
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="dinner" name="meal[]"> Dinner
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="midnight" name="meal[]">Midnight
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="buffet" name="meal[]">Buffet
                                                    </label>
                                                </div>
                                        </div>
                                         </div>
                                          <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">International Cusines
                                            </label>

                                            <div class="col-md-3 col-sm-3 col-xs-12 required">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="italian" name="intcus[]">Italian
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="chinese" name="intcus[]">Chinese
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="thai" name="intcus[]"> Thai
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="mex" name="intcus[]">Mexican
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="french" name="intcus[]">French
                                                    </label>
                                                </div>
                                        </div>
                                         </div>
                                         <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Indian Cusines
                                            </label>

                                            <div class="col-md-3 col-sm-3 col-xs-12 required">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="punjabi" name="indcus[]">Punjabi
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="gujarathi" name="indcus[]">Gujarati
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="bengali" name="indcus[]"> Bengali
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="andra" name="indcus[]">Andhra
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="tamil" name="indcus[]">Tamil Nadu
                                                    </label>
                                                </div>
                                                 <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="raj" name="indcus[]">Rajasthani
                                                    </label>
                                                </div>
                                                 <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="sindh" name="indcus[]">Sindhi
                                                    </label>
                                                </div>

                                        </div>
                                         </div>
                                         <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Specials
                                            </label>

                                            <div class="col-md-3 col-sm-3 col-xs-12 required">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="bir" name="spl[]">Biryani
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="desserts" name="spl[]">Desserts
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="juices" name="spl[]">Juices
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="street" name="spl[]">Street Food
                                                    </label>
                                                </div>


                                        </div>
                                         </div>
                                         <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Facilities
                                            </label>

                                            <div class="col-md-3 col-sm-3 col-xs-12 required">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="pool" name="fac[]">Pool
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="wifi" name="fac[]">Wifi
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="home" name="fac[]">Home Delivery
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="music" name="fac[]">Live Music
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="hookah" name="fac[]">Hookha
                                                    </label>
                                                </div>
                                                 <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="valet" name="fac[]">Valet Parking
                                                    </label>
                                                </div>
                                                 <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="alcohol" name="fac[]">Alcohol
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="lodge" name="fac[]">Lodging
                                                    </label>
                                                </div>

                                        </div>
                                         </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Website</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="website" class="form-control required" placeholder="www.planhere.in">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Facebook Page Link</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="fb" class="form-control required" placeholder="www.facebook.com/planhere" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Price per Night in ₹</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="price" class="form-control required" placeholder="Price per Night in ₹" >
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Upload Image</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="file" name="logo" />
                                            </div>
                                        </div>
                                         <!--div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Menu photo* <span class="required"></span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="file" />
                                            </div>
                                        </div-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">About Your Organization<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control required" required name="about" rows="3" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success btn_full" name="submit">Submit</button>
                                            </div>
                                        </div>

                                    </form>

                        </div><!-- End rab -->
                        <div class="tab-pane" id="marriage">
                         <!-- End row -->
                        	<form method="post" class="form-horizontal form-label-left" action="vendor_marriagebe.php">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Name of the Organization<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="name" required class="form-control required" placeholder="Organisation Name (eg: Hotel XYZ)">
                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Username<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="username" required class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" name="password" minlen="6" required class="form-control required" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" name="confirmpassword" required class="form-control required" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="email" name="email" required class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="tel" name="phno" required class="form-control" placeholder="Phone Number">
                                            </div></div>

                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">City<span class="required"></span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="city" class="form-control" disabled="disabled" placeholder="Hyderabad">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Area<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Landmark</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="landmark" class="form-control" placeholder="Landmark">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pincode</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="pincode" class="form-control" placeholder="Pincode">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Type of Bussiness
                                            </label>

                                            <div class="col-md-9 col-sm-9 col-xs-12 required">
                                                <div class="checkbox" >
                                                    <label>
                                                        <input type="checkbox" value="caterers" name="tags[<?php echo $i;$i++;?>]">Caterers
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="eventplanners" name="tags[<?php echo $i;$i++;?>]"> Event planners
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="photographers" name="tags[<?php echo $i;$i++;?>]"> Photographers
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="makeup" name="tags[<?php echo $i;$i++;?>]"> Makeup
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="dj" name="tags[<?php echo $i;$i++;?>]"> Dj's
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="decorators" name="tags[<?php echo $i;$i++;?>]">Decorators
                                                    </label>
                                                </div>


                                            </div>
                                        </div>


                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Website</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="website" class="form-control required" placeholder="www.planhere.in">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Price per Night in ₹</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="price" class="form-control required" placeholder="Price per Night in ₹" >
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Facebook Page Link</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="fb" class="form-control required" placeholder="www.facebook.com/planhere" >
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Upload Logo</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="files"/>
                                            </div>
                                        </div>
                                         <!--div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Menu photo* <span class="required"></span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="file" />
                                            </div>
                                        </div-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">About Your Organization<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control required" required name="about" rows="3" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success btn_full">Submit</button>
                                            </div>
                                        </div>

                                    </form>

                        </div>
                         <div class="tab-pane" id="halls">
                         <!-- End row -->
                        	<form method="post" class="form-horizontal form-label-left" action="vendor_hallsbe.php">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Name of the Organization<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="name" required class="form-control required" placeholder="Organisation Name (eg: Hotel XYZ)">
                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Username<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="username" required class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" name="password" minlen="6" required class="form-control required" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" name="confirmpassword" required class="form-control required" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="email" name="email" class="form-control" required placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="phno" class="form-control" required placeholder="Phone Number">
                                            </div></div>

                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">City<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="city" class="form-control" disabled="disabled" placeholder="Hyderabad">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Area<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Landmark</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="landmark" class="form-control" placeholder="Landmark">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pincode</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="pincode" class="form-control" placeholder="Pincode">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Type of
                                            </label>

                                            <div class="col-md-9 col-sm-9 col-xs-12 required">
                                                <div class="checkbox" >
                                                    <label>
                                                        <input type="checkbox" value="birthday" name="tags[<?php echo $i;$i++;?>]">Birthday Parties
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="cabin" name="tags[<?php echo $i;$i++;?>]">Cabin
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="conference" name="tags[<?php echo $i;$i++;?>]">Conference
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="gettogether" name="tags[<?php echo $i;$i++;?>]">Get-to-gether
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="convention" name="tags[<?php echo $i;$i++;?>]"> Convention centers
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="banquet" name="tags[<?php echo $i;$i++;?>]">Banquet
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="weddings" name="tags[<?php echo $i;$i++;?>]">Weddings
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="religious" name="tags[<?php echo $i;$i++;?>]">Religious
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="outskirts" name="tags[<?php echo $i;$i++;?>]">Outskirts
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="pickturesque" name="tags[<?php echo $i;$i++;?>]">Picturesque
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="unwind" name="tags[<?php echo $i;$i++;?>]">Unwind
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="farmhouse" name="tags[<?php echo $i;$i++;?>]">Farmhouse
                                                    </label>
                                                </div>


                                            </div>
                                        </div>

                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Website</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="website" class="form-control required" placeholder="www.planhere.in">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Price per Night in ₹</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="price" class="form-control required" placeholder="Price per Night in ₹" >
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Facebook Page Link</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="fb" class="form-control required" placeholder="www.facebook.com/planhere" >
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Upload Logo</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="file" />
                                            </div>
                                        </div>
                                         <!--div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Menu photo* <span class="required"></span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="file" />
                                            </div>
                                        </div-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">About Your Organization<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control required" required  name="about" rows="3" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success btn_full">Submit</button>
                                            </div>
                                        </div>

                                    </form>

                        </div>
                        <div class="tab-pane" id="others">
                        	<form method="post" class="form-horizontal form-label-left" action="vendor_othersbe.php">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Name of the Organization<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="name" required class="form-control required" placeholder="Organisation Name (eg: Hotel XYZ)">
                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Username<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="username" required class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" name="password" minlen="6" class="form-control required" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" name="confirmpassword" required class="form-control required" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="email" name="email" class="form-control" required placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="phno" class="form-control" required placeholder="Phone Number">
                                            </div></div>

                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">City<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="city" class="form-control" disabled="disabled" placeholder="Hyderabad">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Area<span class="required">*</span></label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
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
                                                <textarea class="form-control required" name="address" required rows="3" placeholder='Organization Address'></textarea>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Landmark</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="landmark" class="form-control" placeholder="Landmark">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pincode</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="pincode" class="form-control" placeholder="Pincode">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Type of Bussiness
                                            </label>

                                            <div class="col-md-9 col-sm-9 col-xs-12 required">
                                                <div class="checkbox" >
                                                    <label>
                                                        <input type="checkbox" value="resorts" name="tags[<?php echo $i;$i++;?>]">Resorts
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="events" name="tags[<?php echo $i;$i++;?>]"> Events
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="amusement" name="tags[<?php echo $i;$i++;?>]">Amusement Parks
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="gaming" name="tags[<?php echo $i;$i++;?>]">Gaming Zones
                                                    </label>
                                                </div>
                                                 <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="shop" name="tags[<?php echo $i;$i++;?>]">Shop and dine
                                                    </label>
                                                </div>
                                                 <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="pub" name="tags[<?php echo $i;$i++;?>]">pubs
                                                    </label>
                                                </div>


                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Tags for Resorts
                                            </label>

                                            <div class="col-md-9 col-sm-9 col-xs-12 required">
                                                <div class="checkbox" >
                                                    <label>
                                                        <input type="checkbox" value="new" name="tags[<?php echo $i;$i++;?>]">Newely Opened
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="adventure" name="tags[<?php echo $i;$i++;?>]"> Adventurous
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="family" name="tags[<?php echo $i;$i++;?>]">Family special
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="friends" name="tags[<?php echo $i;$i++;?>]">Friends outing
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Tags for Events
                                            </label>

                                            <div class="col-md-9 col-sm-9 col-xs-12 required">
                                                <div class="checkbox" >
                                                    <label>
                                                        <input type="checkbox" value="upcomming" name="tags[<?php echo $i;$i++;?>]">Upcomming
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="seasonal" name="tags[<?php echo $i;$i++;?>]">Seasonal
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="pubparty" name="tags[<?php echo $i;$i++;?>]">Pub Parties
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="exhibition" name="tags[<?php echo $i;$i++;?>]">Exhibitions
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="workshop" name="tags[<?php echo $i;$i++;?>]"> Workshops
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="conference" name="tags[<?php echo $i;$i++;?>]">Conferences
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="sports" name="tags[<?php echo $i;$i++;?>]">Sports
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Tags for Amusement Parks
                                            </label>

                                            <div class="col-md-9 col-sm-9 col-xs-12 required">
                                                <div class="checkbox" >
                                                    <label>
                                                        <input type="checkbox" value="waterworld" name="tags[<?php echo $i;$i++;?>]">Water worlds
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="filmcity" name="tags[<?php echo $i;$i++;?>]">Film Cities
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="themepark" name="tags[<?php echo $i;$i++;?>]">Theme Parks
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Website</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="website" class="form-control required" placeholder="www.planhere.in">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Facebook Page Link</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="fb" class="form-control required" placeholder="www.facebook.com/planhere" >
                                            </div>
                                        </div>

										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Price per Night in ₹</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="price" class="form-control required" placeholder="Price per Night in ₹" >
                                            </div>
                                        </div>


                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Upload Logo</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="file" />
                                            </div>
                                        </div>
                                         <!--div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Menu photo* <span class="required"></span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="file" />
                                            </div>
                                        </div-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">About Your Organization<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control required" name="about" required rows="3" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success btn_full">Submit</button>
                                            </div>
                                        </div>

                                    </form>

                        </div>
                    </div>
	</div>
</section>


                        </div>
                </div>
            </div>
        </div>
    </section>
<!--footer starts -->
<?php include 'footer.php'; ?>
<!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

 <!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>


  </body>
</html>
