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
    <title>Plan Here | Our Plan, Your Joy</title>

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

    <!-- SPECIFIC CSS -->
    <link href="css/skins/square/grey.css" rel="stylesheet">
    <link href="css/date_time_picker.css" rel="stylesheet">

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

<section id="search_container">
 	<div id="search">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#hotels" data-toggle="tab">Restaurant</a></li>
                        <li><a href="#resorts" data-toggle="tab">Resorts</a></li>
                        <li><a href="#halls" data-toggle="tab">Halls</a></li>
                        <li><a href="#wedvenue" data-toggle="tab">Wedding Venue</a></li>
                        <li><a href="#misc" data-toggle="tab">Miscellaneous</a></li>
                        <li><a href="#parks" data-toggle="tab">Amusement Parks</a></li>
                        <li><a href="#more" data-toggle="tab">More</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="hotels">
                        <h3>Reserve a Table in your Favourite Restaurant</h3>
                        <small style="color: red;">*You can search by name or by category</small>
                        	<form name="form1" method="post" action="restaurantsearchbe.php"><div class="row">
                            	<div class="col-md-6">
                                	<div class="form-group">
                                        <label>Restaurant Name</label>
                                        <input type="text" class="form-control" id="firstname_booking" name="hotelname" placeholder="Type your favourite restaurant name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                	<div class="form-group">
                                    	<label>Category</label>
                                        <select class="ddslick" name="category">
                                            <option value="" data-imagesrc="img/icons_search/eat.png" selected>Any</option>
                                            <option value="breakfast" data-imagesrc="img/icons_search/eat.png" >Breakfast</option>
                                            <option value="lunch" data-imagesrc="img/icons_search/eat.png">Lunch</option>
                                            <option value="dinner"  data-imagesrc="img/icons_search/eat.png">Dinner</option>
                                            <option value="midnight" data-imagesrc="img/icons_search/eat.png">Mid Night Mania</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- End row -->
                            <div class="row">
                            	<div class="col-md-3">
                                	<div class="form-group">
                                        <label><i class="icon-calendar-7"></i> Date</label>
                        				<input class="date-pick form-control" data-date-format="M d, D" type="text" name="date">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                	<div class="form-group">
                                        <label><i class=" icon-clock"></i> Time</label>
                        				<input class="time-pick form-control" value="12:00 AM" type="text" name="time">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label>Number of Guests</label>
                                        <div class="numbers-row">
                                            <input type="text" value="1" id="adults" class="qty2 form-control" name="num">
                                        </div>
                                    </div>
                                </div>


                            </div><!-- End row -->
                            <hr>
                            <button class="btn_1 green"><i class="icon-search"></i>Search now</button>
                        </div><!-- End rab -->
                        <div class="tab-pane" id="resorts">
                        <h3>Book your place for fun at your Favourite Resorts</h3>
                        	<div class="row">
                            	<div class="col-md-6">
                                	<div class="form-group">
                                        <label>Resort Name</label>
                                        <input type="text" class="form-control" id="firstname_booking" name="firstname_booking" placeholder="Type your favourite resort name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                	<div class="form-group">
                                    	<label>Category</label>
                                        <select class="ddslick" name="category">
                                            <option value="0" data-imagesrc="img/icons_search/skyline.png" selected>Any</option>
                                            <option value="0" data-imagesrc="img/icons_search/skyline.png" selected>Newly Opened</option>
                                            <option value="1" data-imagesrc="img/icons_search/skyline.png">Adventurous</option>
                                            <option value="2"  data-imagesrc="img/icons_search/skyline.png">Family Special</option>
                                            <option value="3" data-imagesrc="img/icons_search/skyline.png">Friends Special</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- End row -->
                            <div class="row">
                            	<div class="col-md-3">
                                	<div class="form-group">
                                        <label><i class="icon-calendar-7"></i> Date</label>
                        				<input class="date-pick form-control" data-date-format="M d, D" type="text">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                	<div class="form-group">
                                        <label><i class=" icon-clock"></i> Time</label>
                        				<input class="time-pick form-control" value="12:00 AM" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label>Adult</label>
                                        <div class="numbers-row">
                                            <input type="text" value="1" id="adults" class="qty2 form-control" name="adults">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label>Children</label>
                                        <div class="numbers-row">
                                            <input type="text" value="0" id="child" class="qty2 form-control" name="child">
                                        </div>
                                    </div>
                                </div>


                            </div><!-- End row -->
                            <hr>
                            <button type="submit" form="form1" class="btn_1 green"><i class="icon-search"></i>Search now</button>
                        </form></div><!-- End rab -->
                        <div class="tab-pane" id="halls">
                        <h3>Reserve a Hall / Convention Centre for Meetings, Conferences...</h3>
                        <div class="row">
                            	<div class="col-md-6">
                                	<div class="form-group">
                                        <label>Venue Name</label>
                                        <input type="text" class="form-control" id="hotel_name" name="hotel_name" placeholder="Type your venue name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                	<div class="form-group">
                                    <label>Location</label>
                                        <select class="form-control" name="area">
                                            <option value="lower" selected>Any</option>
                                            <option value="lower">Banjara Hills  </option>
								<option value="higher">Kukatpally</option>
								<option value="lower">Gachibowli </option>
								<option value="higher">Madhapur</option>
								<option value="lower">Jubilee Hills </option>
								<option value="higher">Hitech City </option>
								<option value="lower">Kondapur</option>
								<option value="higher">Begumpet </option>
								<option value="lower">Mehdipatnam </option>
								<option value="higher">Ameerpet </option>
								<option value="lower">Abids</option>
								<option value="higher">A S Rao Nagar </option>
								<option value="lower">Charminar </option>
								<option value="higher">Bowenpally </option>
								<option value="lower">Dilsukhnagar </option>
								<option value="lower">Manikonda </option>
								<option value="higher">Himayath Nagar </option>
								<option value="lower">Panjagutta</option>
								<option value="higher">Marredpally</option>
								<option value="lower">Lakdikapul </option>
								<option value="higher">Shamshabad </option>
								<option value="lower">Tolichowki</option>
								<option value="higher">S R Nagar</option>


								<option value="lower">Nallakunta</option>
								<option value="higher">Kacheguda</option>
								<option value="higher">Nampally</option>
								<option value="lower">Sainikpuri</option>
								<option value="higher">Alwal</option>
								<option value="lower">S D Road </option>
								<option value="higher">Malakpet</option>
								<option value="lower">Masab Tank</option>
								<option value="higher">Somajiguda</option>
								<option value="lower">Amberpet</option>
								<option value="higher">Koti</option>
								<option value="lower">Miyapur</option>
								<option value="higher">Film Nagar </option>
								<option value="lower">Chanda Nagar </option>
								<option value="higher">Nizampet </option>
								<option value="higher">Necklace Road  </option>
								<option value="lower">Chandrayanagutta</option>
								<option value="higher">Yousufguda </option>
								<option value="lower">Lingampally</option>
								<option value="higher">Attapur</option>
								<option value="lower">Karkhana </option>
								<option value="higher">PG Road  </option>
								<option value="lower">Adikmet</option>
								<option value="higher">Basheer Bagh </option>
								<option value="lower">Padmarao Nagar </option>
								<option value="higher">Habsiguda</option>
								<option value="lower">Uppal</option>
								<option value="higher">Trimulgherry</option>
								<option value="higher">Tarnaka</option>
								<option value="lower">Srinagar Colony</option>
								<option value="higher">Langer Houz</option>
								<option value="lower">Kothapet</option>
								<option value="higher">Falaknuma</option>
								<option value="lower">Shamirpet</option>
								<option value="higher">Balanagar</option>
								<option value="lower">Vanasthalipuram</option>
								<option value="higher">Moti Nagar </option>
								<option value="lower">Railway Station Road</option>
								<option value="higher">Saroor Nagar</option>


								<option value="lower">Jeedimetla</option>
								<option value="higher">Medchal Road</option>
								<option value="lower">Hafeezpet</option>
								<option value="higher">ECIL </option>
								<option value="lower">Malkajgiri</option>
								<option value="higher">Khairatabad</option>
								<option value="lower">Begum Bazaar</option>
								<option value="higher">Kompally </option>
								<option value="lower">Kothaguda </option>
								<option value="higher">L B Nagar</option>
								<option value="higher">Nacharam </option>
								<option value="lower">Boiguda </option>
								<option value="higher">S P Road</option>
                                        </select>
                                    </div>
                                </div>
                            </div> <!-- End row -->
                        	<div class="row">
                            	<div class="col-md-3">
                                	<div class="form-group">
                                        <label><i class="icon-calendar-7"></i>Date</label>
                        				<input class="date-pick form-control" data-date-format="M d, D" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                	<div class="form-group">
                                    	<label>Category</label>
                                        <select class="ddslick" name="category">
                                            <option value="0" data-imagesrc="img/icons_search/museums.png" selected>Any</option>
                                            <option value="0" data-imagesrc="img/icons_search/museums.png" selected>Birthday Party</option>
                                            <option value="3" data-imagesrc="img/icons_search/churches.png">Religious Special</option>
                                            <option value="1" data-imagesrc="img/icons_search/museums.png">Cabin Party</option>
                                            <option value="2"  data-imagesrc="img/icons_search/museums.png">Conference Halls</option>
                                            <option value="3" data-imagesrc="img/icons_search/museums.png">Get Together</option>
                                            <option value="3" data-imagesrc="img/icons_search/museums.png">Banquet Halls</option>
                                            <option value="3" data-imagesrc="img/icons_search/museums.png">Convention Centres</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-5">
                                    <div class="form-group">
                                        <label>Guest Count</label>
                                        <div class="numbers-row">
                                            <input type="text" value="100" id="children" class="qty2 form-control" name="children_2">
                                        </div>
                                    </div>
                                </div>

                            </div><!-- End row -->

                            <hr>
                            <button class="btn_1 green"><i class="icon-search"></i>Search now</button>
                        </div>
                        <div class="tab-pane" id="wedvenue">
                        <h3>Reserve a Wedding Venue for your Memorable Moments</h3>
                        <div class="row">
                            	<div class="col-md-6">
                                	<div class="form-group">
                                        <label>Venue Name</label>
                                        <input type="text" class="form-control" id="hotel_name" name="hotel_name" placeholder="Type your venue name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                	<div class="form-group">
                                    <label>Location</label>
                                        <select class="form-control" name="area">
                                          <option value="lower" selected>Any</option>
                                            <option value="lower">Banjara Hills  </option>
								<option value="higher">Kukatpally</option>
								<option value="lower">Gachibowli </option>
								<option value="higher">Madhapur</option>
								<option value="lower">Jubilee Hills </option>
								<option value="higher">Hitech City </option>
								<option value="lower">Kondapur</option>
								<option value="higher">Begumpet </option>
								<option value="lower">Mehdipatnam </option>
								<option value="higher">Ameerpet </option>
								<option value="lower">Abids</option>
								<option value="higher">A S Rao Nagar </option>
								<option value="lower">Charminar </option>
								<option value="higher">Bowenpally </option>
								<option value="lower">Dilsukhnagar </option>
								<option value="lower">Manikonda </option>
								<option value="higher">Himayath Nagar </option>
								<option value="lower">Panjagutta</option>
								<option value="higher">Marredpally</option>
								<option value="lower">Lakdikapul </option>
								<option value="higher">Shamshabad </option>
								<option value="lower">Tolichowki</option>
								<option value="higher">S R Nagar</option>


								<option value="lower">Nallakunta</option>
								<option value="higher">Kacheguda</option>
								<option value="higher">Nampally</option>
								<option value="lower">Sainikpuri</option>
								<option value="higher">Alwal</option>
								<option value="lower">S D Road </option>
								<option value="higher">Malakpet</option>
								<option value="lower">Masab Tank</option>
								<option value="higher">Somajiguda</option>
								<option value="lower">Amberpet</option>
								<option value="higher">Koti</option>
								<option value="lower">Miyapur</option>
								<option value="higher">Film Nagar </option>
								<option value="lower">Chanda Nagar </option>
								<option value="higher">Nizampet </option>
								<option value="higher">Necklace Road  </option>
								<option value="lower">Chandrayanagutta</option>
								<option value="higher">Yousufguda </option>
								<option value="lower">Lingampally</option>
								<option value="higher">Attapur</option>
								<option value="lower">Karkhana </option>
								<option value="higher">PG Road  </option>
								<option value="lower">Adikmet</option>
								<option value="higher">Basheer Bagh </option>
								<option value="lower">Padmarao Nagar </option>
								<option value="higher">Habsiguda</option>
								<option value="lower">Uppal</option>
								<option value="higher">Trimulgherry</option>
								<option value="higher">Tarnaka</option>
								<option value="lower">Srinagar Colony</option>
								<option value="higher">Langer Houz</option>
								<option value="lower">Kothapet</option>
								<option value="higher">Falaknuma</option>
								<option value="lower">Shamirpet</option>
								<option value="higher">Balanagar</option>
								<option value="lower">Vanasthalipuram</option>
								<option value="higher">Moti Nagar </option>
								<option value="lower">Railway Station Road</option>
								<option value="higher">Saroor Nagar</option>


								<option value="lower">Jeedimetla</option>
								<option value="higher">Medchal Road</option>
								<option value="lower">Hafeezpet</option>
								<option value="higher">ECIL </option>
								<option value="lower">Malkajgiri</option>
								<option value="higher">Khairatabad</option>
								<option value="lower">Begum Bazaar</option>
								<option value="higher">Kompally </option>
								<option value="lower">Kothaguda </option>
								<option value="higher">L B Nagar</option>
								<option value="higher">Nacharam </option>
								<option value="lower">Boiguda </option>
								<option value="higher">S P Road</option>
                                        </select>
                                    </div>
                                </div>
                            </div> <!-- End row -->
                        	<div class="row">
                            	<div class="col-md-3">
                                	<div class="form-group">
                                        <label><i class="icon-calendar-7"></i>Date</label>
                        				<input class="date-pick form-control" data-date-format="M d, D" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                	<div class="form-group">
                                    	<label>Category</label>
                                        <select class="ddslick" name="category">
                                            <option value="0" data-imagesrc="img/icons_search/churches.png" selected>Any</option>
                                            <option value="0" data-imagesrc="img/icons_search/churches.png" selected>Convention Centres</option>
                                            <option value="1" data-imagesrc="img/icons_search/churches.png">Weddings Exclusive</option>
                                            <option value="2"  data-imagesrc="img/icons_search/churches.png">Outskirts</option>
                                            <option value="3" data-imagesrc="img/icons_search/churches.png">Picturesque</option>
                                            <option value="3" data-imagesrc="img/icons_search/churches.png">Unwind</option>
                                            <option value="3" data-imagesrc="img/icons_search/churches.png">Farm House</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-xs-5">
                                    <div class="form-group">
                                        <label>Guest Count</label>
                                        <div class="numbers-row">
                                            <input type="text" value="100" id="children" class="qty2 form-control" name="children_2">
                                        </div>
                                    </div>
                                </div>

                            </div><!-- End row -->

                            <hr>
                            <button class="btn_1 green"><i class="icon-search"></i>Search now</button>
                        </div>
                        <div class="tab-pane" id="misc">
                        <h3>Make your any event Memorable with these</h3>
                        <div class="row">
                            	<div class="col-md-6">
                                	<div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="hotel_name" name="hotel_name" placeholder="Type a name / Leave blank">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                	<div class="form-group">
                                    	<label>Category</label>
                                        <select class="ddslick" name="category">
                                            <option value="0" data-imagesrc="img/icons_search/all_tours.png" selected>Event Planners</option>
                                            <option value="0" data-imagesrc="img/icons_search/all_tours.png" selected>Caterers</option>
                                            <option value="1" data-imagesrc="img/icons_search/all_tours.png">Photographers</option>
                                            <option value="2"  data-imagesrc="img/icons_search/all_tours.png">Make Up Artists</option>
                                            <option value="3" data-imagesrc="img/icons_search/all_tours.png">DJ's & Audio Systems</option>
                                            <option value="3" data-imagesrc="img/icons_search/all_tours.png">Decorators / Crafters</option>
                                            <option value="3" data-imagesrc="img/icons_search/all_tours.png">Miscellaneous</option>
                                        </select>
                                    </div>
                                </div>
                            </div> <!-- End row -->
                        	<div class="row">
                            	<div class="col-md-3">
                                	<div class="form-group">
                                        <label><i class="icon-calendar-7"></i>Date</label>
                        				<input class="date-pick form-control" data-date-format="M d, D" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                	<div class="form-group">
                                        <label><i class=" icon-clock"></i> Time</label>
                        				<input class="time-pick form-control" value="12:00 AM" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                	<div class="form-group">
                                    <label>Location</label>
                                        <select class="form-control" name="area">
                                            <option value="lower" selected>Any</option>
                                            							<option value="lower">Banjara Hills  </option>
								<option value="higher">Kukatpally</option>
								<option value="lower">Gachibowli </option>
								<option value="higher">Madhapur</option>
								<option value="lower">Jubilee Hills </option>
								<option value="higher">Hitech City </option>
								<option value="lower">Kondapur</option>
								<option value="higher">Begumpet </option>
								<option value="lower">Mehdipatnam </option>
								<option value="higher">Ameerpet </option>
								<option value="lower">Abids</option>
								<option value="higher">A S Rao Nagar </option>
								<option value="lower">Charminar </option>
								<option value="higher">Bowenpally </option>
								<option value="lower">Dilsukhnagar </option>
								<option value="lower">Manikonda </option>
								<option value="higher">Himayath Nagar </option>
								<option value="lower">Panjagutta</option>
								<option value="higher">Marredpally</option>
								<option value="lower">Lakdikapul </option>
								<option value="higher">Shamshabad </option>
								<option value="lower">Tolichowki</option>
								<option value="higher">S R Nagar</option>


								<option value="lower">Nallakunta</option>
								<option value="higher">Kacheguda</option>
								<option value="higher">Nampally</option>
								<option value="lower">Sainikpuri</option>
								<option value="higher">Alwal</option>
								<option value="lower">S D Road </option>
								<option value="higher">Malakpet</option>
								<option value="lower">Masab Tank</option>
								<option value="higher">Somajiguda</option>
								<option value="lower">Amberpet</option>
								<option value="higher">Koti</option>
								<option value="lower">Miyapur</option>
								<option value="higher">Film Nagar </option>
								<option value="lower">Chanda Nagar </option>
								<option value="higher">Nizampet </option>
								<option value="higher">Necklace Road  </option>
								<option value="lower">Chandrayanagutta</option>
								<option value="higher">Yousufguda </option>
								<option value="lower">Lingampally</option>
								<option value="higher">Attapur</option>
								<option value="lower">Karkhana </option>
								<option value="higher">PG Road  </option>
								<option value="lower">Adikmet</option>
								<option value="higher">Basheer Bagh </option>
								<option value="lower">Padmarao Nagar </option>
								<option value="higher">Habsiguda</option>
								<option value="lower">Uppal</option>
								<option value="higher">Trimulgherry</option>
								<option value="higher">Tarnaka</option>
								<option value="lower">Srinagar Colony</option>
								<option value="higher">Langer Houz</option>
								<option value="lower">Kothapet</option>
								<option value="higher">Falaknuma</option>
								<option value="lower">Shamirpet</option>
								<option value="higher">Balanagar</option>
								<option value="lower">Vanasthalipuram</option>
								<option value="higher">Moti Nagar </option>
								<option value="lower">Railway Station Road</option>
								<option value="higher">Saroor Nagar</option>


								<option value="lower">Jeedimetla</option>
								<option value="higher">Medchal Road</option>
								<option value="lower">Hafeezpet</option>
								<option value="higher">ECIL </option>
								<option value="lower">Malkajgiri</option>
								<option value="higher">Khairatabad</option>
								<option value="lower">Begum Bazaar</option>
								<option value="higher">Kompally </option>
								<option value="lower">Kothaguda </option>
								<option value="higher">L B Nagar</option>
								<option value="higher">Nacharam </option>
								<option value="lower">Boiguda </option>
								<option value="higher">S P Road</option>
                                        </select>
                                    </div>
                                </div>


                            </div><!-- End row -->

                            <hr>
                            <button class="btn_1 green"><i class="icon-search"></i>Search now</button>
                        </div>
                        <div class="tab-pane" id="parks">
                        <h3>Ready to be amused at your Favourite Amusement Parks !</h3>
                        	<div class="row">
                            	<div class="col-md-6">
                                	<div class="form-group">
                                        <label>Amusement Park Name</label>
                                        <input type="text" class="form-control" id="firstname_booking" name="firstname_booking" placeholder="Type your favourite restaurant name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                	<div class="form-group">
                                    	<label>Category</label>
                                        <select class="ddslick" name="category">
                                            <option value="0" data-imagesrc="img/icons_search/sightseeing.png" selected>Water World</option>
                                            <option value="1" data-imagesrc="img/icons_search/sightseeing.png">Film Cities</option>
                                            <option value="2"  data-imagesrc="img/icons_search/sightseeing.png">Theme Parks</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- End row -->
                            <div class="row">
                            	<div class="col-md-3">
                                	<div class="form-group">
                                        <label><i class="icon-calendar-7"></i> Date</label>
                        				<input class="date-pick form-control" data-date-format="M d, D" type="text">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                	<div class="form-group">
                                        <label><i class=" icon-clock"></i> Time</label>
                        				<input class="time-pick form-control" value="12:00 AM" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label>Adult</label>
                                        <div class="numbers-row">
                                            <input type="text" value="1" id="adults" class="qty2 form-control" name="adults">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label>Children</label>
                                        <div class="numbers-row">
                                            <input type="text" value="0" id="child" class="qty2 form-control" name="child">
                                        </div>
                                    </div>
                                </div>


                            </div><!-- End row -->
                            <hr>
                            <button class="btn_1 green"><i class="icon-search"></i>Search now</button>
                        </div><!-- End rab -->
                        <div class="tab-pane" id="more">
                        <h3>Find & Reserve your place for Fun, Joy and Memorable Moments</h3>
                        	<div class="row">
                            	 <div class="col-md-6">
                                	<div class="form-group">
                                    	<label>Category</label>
                                        <select class="ddslick" name="category">
                                            <option value="0" data-imagesrc="img/icons_search/historic.png" selected>Events</option>
                                            <option value="0" data-imagesrc="img/icons_search/historic.png" selected>Pubs</option>
                                            <option value="1" data-imagesrc="img/icons_search/historic.png">Shop &amp; Dine</option>
                                            <option value="2"  data-imagesrc="img/icons_search/historic.png">Gaming Zones</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                	<div class="form-group">
                                	<label class="select-label">Location</label>
                                        <select class="form-control">
                                            <option value="" selected>Any</option>
								<option value="lower">Banjara Hills  </option>
								<option value="higher">Kukatpally</option>
								<option value="lower">Gachibowli </option>
								<option value="higher">Madhapur</option>
								<option value="lower">Jubilee Hills </option>
								<option value="higher">Hitech City </option>
								<option value="lower">Kondapur</option>
								<option value="higher">Begumpet </option>
								<option value="lower">Mehdipatnam </option>
								<option value="higher">Ameerpet </option>
								<option value="lower">Abids</option>
								<option value="higher">A S Rao Nagar </option>
								<option value="lower">Charminar </option>
								<option value="higher">Bowenpally </option>
								<option value="lower">Dilsukhnagar </option>
								<option value="lower">Manikonda </option>
								<option value="higher">Himayath Nagar </option>
								<option value="lower">Panjagutta</option>
								<option value="higher">Marredpally</option>
								<option value="lower">Lakdikapul </option>
								<option value="higher">Shamshabad </option>
								<option value="lower">Tolichowki</option>
								<option value="higher">S R Nagar</option>


								<option value="lower">Nallakunta</option>
								<option value="higher">Kacheguda</option>
								<option value="higher">Nampally</option>
								<option value="lower">Sainikpuri</option>
								<option value="higher">Alwal</option>
								<option value="lower">S D Road </option>
								<option value="higher">Malakpet</option>
								<option value="lower">Masab Tank</option>
								<option value="higher">Somajiguda</option>
								<option value="lower">Amberpet</option>
								<option value="higher">Koti</option>
								<option value="lower">Miyapur</option>
								<option value="higher">Film Nagar </option>
								<option value="lower">Chanda Nagar </option>
								<option value="higher">Nizampet </option>
								<option value="higher">Necklace Road  </option>
								<option value="lower">Chandrayanagutta</option>
								<option value="higher">Yousufguda </option>
								<option value="lower">Lingampally</option>
								<option value="higher">Attapur</option>
								<option value="lower">Karkhana </option>
								<option value="higher">PG Road  </option>
								<option value="lower">Adikmet</option>
								<option value="higher">Basheer Bagh </option>
								<option value="lower">Padmarao Nagar </option>
								<option value="higher">Habsiguda</option>
								<option value="lower">Uppal</option>
								<option value="higher">Trimulgherry</option>
								<option value="higher">Tarnaka</option>
								<option value="lower">Srinagar Colony</option>
								<option value="higher">Langer Houz</option>
								<option value="lower">Kothapet</option>
								<option value="higher">Falaknuma</option>
								<option value="lower">Shamirpet</option>
								<option value="higher">Balanagar</option>
								<option value="lower">Vanasthalipuram</option>
								<option value="higher">Moti Nagar </option>
								<option value="lower">Railway Station Road</option>
								<option value="higher">Saroor Nagar</option>


								<option value="lower">Jeedimetla</option>
								<option value="higher">Medchal Road</option>
								<option value="lower">Hafeezpet</option>
								<option value="higher">ECIL </option>
								<option value="lower">Malkajgiri</option>
								<option value="higher">Khairatabad</option>
								<option value="lower">Begum Bazaar</option>
								<option value="higher">Kompally </option>
								<option value="lower">Kothaguda </option>
								<option value="higher">L B Nagar</option>
								<option value="higher">Nacharam </option>
								<option value="lower">Boiguda </option>
								<option value="higher">S P Road</option>


                                        </select>
                                        </div>
                                </div>
                            </div><!-- End row -->
                            <div class="row">
                            	<div class="col-md-3 col-sm-3">
                                	<div class="form-group">
                                        <label><i class="icon-calendar-7"></i> Date</label>
                        				<input class="date-pick form-control" data-date-format="M d, D" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <div class="form-group">
                                        <label>Adults</label>
                                        <div class="numbers-row">
                                            <input type="text" value="1" id="adults" class="qty2 form-control" name="quantity">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <div class="form-group">
                                        <label>Children</label>
                                        <div class="numbers-row">
                                            <input type="text" value="0" id="children" class="qty2 form-control" name="quantity">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-9">
                                    <div class="form-group">
                                    	<div class="radio_fix">
                                        <label class="radio-inline" style="padding-left:0">
                                          <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>Paid
                                        </label>
                                        </div>
                                        <div class="radio_fix">
                                        <label class="radio-inline">
                                          <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Free
                                        </label>
                                        </div>
                                         <div class="radio_fix">
                                        <label class="radio-inline">
                                          <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option3">Both
                                        </label>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End row -->
                            <hr>
                            <button class="btn_1 green"><i class="icon-search"></i>Search now</button>
                        </div>
                    </div>
	</div>
</section><!-- End hero -->

<div class="container margin_60">

        <div class="main_title">
            <h2><span>Trending </span>Now</h2>
            <p>Trending Restaurants, Resorts, Amusement Parks, Halls, Convention Centres, Events, Pubs, Caterers &amp; Many More<!--br>To make your events and plans with your friends and loved ones more valuable and memorable<br>Because every place has a story for you, every moment is an experience for you.<--></p>
        </div>
<?php
include 'connection.php';
        $q1="SELECT * FROM hotel_data ORDER BY RAND() LIMIT 8";

        $result=mysql_query($q1);
        $count=mysql_num_rows($result);
                  while ($row=mysql_fetch_array($result)) {
                    $id=$row['id'];
                      $name=$row['name'];
                      $rating=$row['rating'];
                      $price=$row['price'];
                      $img=mysql_query("select logo from vendor_login where id='$id'");
                      $logo=mysql_fetch_array($img);
                      $url=$logo['logo'];?>
                      <div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="hotel_container">
                      <div class="img_container">
                        <a href="single_hotel_working_booking.php?id=<?=$id?>">
                        <img src="  <?php echo $url; ?>" width="800px" height="533px" class="img-responsive" alt="">
                        <div class="ribbon top_rated"></div>
                                      <div id="score"><span><?php echo $rating; ?></span>Good</div>
                        <div class="short_info hotel">
                          From/Per night<span class="price"><sup>$</sup><?php echo $price;?></span>
                        </div>
                        </a>
                      </div>
                      <div class="hotel_title">
                        <h3><?php echo "<strong>$name</strong> Hotel</h3>";?>
                        <div class="rating">
                          <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                        </div><!-- end rating -->
                        <div class="wishlist">
                          <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                        </div><!-- End wish list-->
                      </div>
                    </div><!-- End box tour -->
                    </div><!-- End col-md-6 --><?php }?>

    </div><!-- End container -->
    <div class='row'>
<?php
$q1="select * from hotel_data";
 $r1=mysql_query($q1);
 $cou=mysql_num_rows($r1);
 ?>
      <p class="text-center nopadding">
        <a href="admink/index.html" class="btn_1 medium"><i class="icon-eye-7"></i>View all (<?php echo $cou ?>) </a>

    </p></div>
	<br/>
    <div class="white_bg">
        <div class="container margin_60">
            <div class="main_title">
                <h2><span>Quick</span> Searches</h2>
                <!--p>
                    Trending Search Terms
                </p-->
            </div>
            <div class="row add_bottom_45">
                <div class="col-md-2 other_tours">
                    <ul>
                        <li><a href="http://www.planhere.in/final/hotel_grid_filter.php?sort_price=&sort_area=&incusine%5B%5D=chinese&price%5B%5D=50"><i class="icon_set_1_icon-14"></i>Chineese</a>
                        </li>
                        <li><a href="hotel_grid_filter.php?indcusine[]=andhra"><i class="icon_set_1_icon-14"></i>Andhra</a>
                        </li>
                        <li><a href="hotel_grid_filter.php?sort_area=banjarahills"><i class="icon_set_1_icon-41"></i>Banjara Hills</a>
                        </li>
                        <li><a href="hotel_grid_filter.php?sort_area=kukatpally"><i class="icon_set_1_icon-41"></i>Kukatpally</a>
                        </li>
                        <li><a href="hotel_grid_filter.php?spl[]=bir"><i class="icon_set_1_icon-58"></i>Biryani</a>
                        </li>
                        <li><a href="hotel_grid_filter.php?spl[]=desserts"><i class="icon_set_1_icon-58"></i>Desserts</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 other_tours">
                    <ul>
                        <li><a href="hotel_grid_filter.php?incusine[]=italian"><i class="icon_set_1_icon-14"></i>Italian</a>
                        </li>
                        <li><a href="hotel_grid_filter.php?indcusine[]=punjabi"><i class="icon_set_1_icon-14"></i>Punjabi</a>
                        </li>
                        <li><a href="hotel_grid_filter.php?sort_area=necklaceroad"><i class="icon_set_1_icon-41"></i>Necklace Road</a>
                        </li>
                        <li><a href="hotel_grid_filter.php?sort_area=secunderabad"><i class="icon_set_1_icon-41"></i>Secunderabad</a>
                        </li>
                        <li><a href="hotel_grid_filter.php?spl[]=juices"><i class="icon_set_1_icon-58"></i>Fruit Juice</a>
                        </li>
                        <li><a href="hotel_grid_filter.php?spl[]=streetfood"><i class="icon_set_1_icon-58"></i>Street Food</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 other_tours">
                    <ul>
                        <li><a href="#"><i class="icon_set_1_icon-23"></i>Weddings Exclusive</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-8"></i>Kitty Parties</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-23"></i>Farm Houses</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-4"></i>Conference Halls</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-20"></i>Pub Parties</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-32"></i>Exhibition</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 other_tours hidden-xs">
                    <ul>
                        <li><a href="#"><i class="icon_set_1_icon-40"></i>Sports Events</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-59"></i>Cofee Shops</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-3"></i>Gaming Zones</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-50"></i>Shop and Dine</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-14"></i>BBQ</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-24"></i>Resorts</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 other_tours hidden-xs">
                    <ul>
                        <li><a href="#"><i class="icon_set_1_icon-40"></i>Sports Events</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-59"></i>Cofee Shops</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-3"></i>Gaming Zones</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-50"></i>Shop and Dine</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-14"></i>BBQ</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-24"></i>Resorts</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 other_tours hidden-xs">
                    <ul>
                        <li><a href="#"><i class="icon_set_1_icon-40"></i>Sports Events</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-59"></i>Cofee Shops</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-3"></i>Gaming Zones</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-50"></i>Shop and Dine</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-14"></i>BBQ</a>
                        </li>
                        <li><a href="#"><i class="icon_set_1_icon-24"></i>Resorts</a>
                        </li>
                    </ul>
                </div>
            </div><!-- End row -->

            <div class="banner colored add_bottom_30">
                <h4>Marriages are already fixed in the heaven   <span></span></h4>
                <p>
                   <b>You just need to decide how it's gonna happen and you are in the right place to think over and plan it!</b>
                </p>
                <a href="./plan_marriage.php" class="btn_1 white">Plan Now</a>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="#"><img src="img/eventplanner.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>Event Planners</span></h4>
                    <!--p>
                        Get Event Planners to plan your memorable moment but just not a event
                    </p-->
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="#"><img src="img/wedhalls.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>Wedding Halls</span></h4>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="#"><img src="img/caterers.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>Caterers</span></h4>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="#"><img src="img/photographer.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>Photographers</span></h4>
                </div>
            </div>
             <div class="row">
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="#"><img src="img/makeup.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>MakeUp Artists</span></h4>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="#"><img src="img/audio.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>D.J's / Audio Systems</span></h4>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="#"><img src="img/decorators.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>Decorators / Crafters</span></h4>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <p>
                        <a href="#"><img src="img/miscellaneous.jpg" alt="Pic" class="img-responsive"></a>
                    </p>
                    <h4><span>Miscellaneous</span></h4>
                </div>
            </div>
            <!-- End row -->
        </div><!-- End container -->
    </div><!-- End white_bg -->
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/home_video.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1 magnific">
        <div>
            <h3>Our Plan, Your Joy</h3>
            <p>With Plan Here, all your Dinners, Weddings, Adventurous and Fun moments will turn more appealing and enthralling. We make your plan into action and make your events and plans with your friends and loved ones more valuable and memorable because every place has a story for you, every moment is an experience for you.
                </p>
            <a href="https://www.youtube.com/" class="video hidden-xs"><i class="icon-play-circled2-1"></i></a>
        </div>
    </div>
    </section><!-- End section -->

    <div class="container margin_60">

        <div class="main_title">
            <h2><span>Why</span> Plan Here ?</h2>
            <p>
                Some good reasons for redefining your moments and write them in gold with diamonds studded
            </p>
        </div>

        <div class="row">

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-41"></i>
                    <h3><span>+120</span> Premium tours</h3>
                    <p>
                         Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                    </p>
                    <a href="about.html" class="btn_1 outline">Read more</a>
                </div>
            </div>

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-30"></i>
                    <h3><span>+1000</span> Customers</h3>
                    <p>
                         Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                    </p>
                    <a href="about.html" class="btn_1 outline">Read more</a>
                </div>
            </div>

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-57"></i>
                    <h3><span>H24 </span> Support</h3>
                    <p>
                         Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                    </p>
                    <a href="about.html" class="btn_1 outline">Read more</a>
                </div>
            </div>

        </div><!--End row -->

        <hr>

        <div class="row">
            <div class="col-md-7 col-sm-6">
                <img src="img/laptop.png" alt="Laptop" class="img-responsive laptop">
            </div>
            <div class="col-md-5 col-sm-6">
                <!--h3><center>Get started with <span>Plan Here</span></center></h3-->
                <!--p>
                    With <b>Plan Here</b> all your Dinners, Weddings, Adventurous and Fun moments will turn more appealing and enthralling. We make your plan into action and make your events and plans with your friends and loved ones more valuable and memorable because every place has a story for you, every moment is an experience for you.
                    </p-->
                <ul class="list_order">
                    <li><span>1</span>Book a Table at your Favourite Restaurant and also Make your table to surprise your loved ones</li>
                    <li><span>2</span>Make your Marriage a Memorable Moment with ease</li>
                    <li><span>3</span>Grab Passes &amp; Tickets of Parties, Events, Pubs &amp Many More happening around you</li>
                    <li><span>4</span>Find and Reserve your place for fun &amp joy at Amazing Places, Amusement Parks, Adventurous locations &amp; Resorts</li>
                    <li><span>#</span>We are not limited to these. We provide you infinite fun, joy &amp; memories with many more services to keep you enthralled &amp young</li>
                </ul>
            </div>
        </div><!-- End row -->

    </div><!-- End container -->
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
 <script src="js/bootstrap-datepicker.js"></script>
 <script src="js/bootstrap-timepicker.js"></script>
 <script>
  $('input.date-pick').datepicker('setDate', 'today');
  $('input.time-pick').timepicker({
    minuteStep: 15,
    showInpunts: false
})
  </script>
  <script src="js/jquery.ddslick.js"></script>
   <script>
   $("select.ddslick").each(function(){
            $(this).ddslick({
                showSelectedHTML: true
            });
        });
        </script>
  </body>
</html>
