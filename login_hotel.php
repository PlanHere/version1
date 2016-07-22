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
    <title>PlanHere Login_hotel</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

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
            	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                	<div id="login">
                    		<div class="text-center"><img src="img/logo_sticky.png" alt="" data-retina="true" ></div>
                            <hr>
                            <form method="post" class="form-horizontal form-label-left" action="signuphotelbe.php">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Name of the Organization</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="name" class="form-control required" placeholder="Name">
                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="username" class="form-control" placeholder="username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" name="password" class="form-control required" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" name="confirmpassword" class="form-control required" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email address</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="emailid" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="phno" class="form-control" placeholder="Phone number">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">City </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="city" class="form-control" disabled="disabled" placeholder="Hyderabad">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Area</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select class="select2_single form-control required" tabindex="-1">
                                                    <option value="" selected>Sort by Area</option>
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
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Street Address<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control required" name="streetaddress" rows="3" placeholder='rows="3"'></textarea>
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
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Hotel
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value=""> Resort
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value=""> Gardens
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value=""> Pubs
                                                    </label>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                      <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Meal
                                            </label>

                                            <div class="col-md-3 col-sm-3 col-xs-12 required">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Breakfast 
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Lunch
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value=""> dinner
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Midnight
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Buffet
                                                    </label>
                                                </div>
                                        </div>
                                         </div>
                                          <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Cusines
                                            </label>

                                            <div class="col-md-3 col-sm-3 col-xs-12 required">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Italian 
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Chinese
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value=""> Thai
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Mexican
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">French
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
                                                        <input type="checkbox" value="">Punjabi
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Gujarati
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value=""> Benjali
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Andhra
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Tamilian
                                                    </label>
                                                </div>
                                                 <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Rajasthani
                                                    </label>
                                                </div>
                                                 <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Sindhi
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
                                                        <input type="checkbox" value="">Biryani
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Desserts
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Juices
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Street Food
                                                    </label>
                                                </div>
                                                
                                                 
                                        </div>
                                         </div>
                                         <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Facillities
                                            </label>

                                            <div class="col-md-3 col-sm-3 col-xs-12 required">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Pool
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Wifi
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Home Delivery
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Live Music
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Hookha
                                                    </label>
                                                </div>
                                                 <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Valet Parking
                                                    </label>
                                                </div>
                                                 <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Vine
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">Lodging
                                                    </label>
                                                </div>
                                                 
                                        </div>
                                         </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Website</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="website" class="form-control required" placeholder="WWW.Planhere.in">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Facebook Page</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="fb" class="form-control required" >
                                            </div>
                                        </div> 
                                        
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Upload photo* <span class="required"></span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="file" />
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Menu photo* <span class="required"></span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="file" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">About <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control required" name="about" rows="3" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
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