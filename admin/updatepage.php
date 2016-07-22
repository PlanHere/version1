<!DOCTYPE html>
<html>


<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>Plan Here Admin</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="AdminK - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Angular material -->
    <link rel="stylesheet" type="text/css" href="assets/skin/css/angular-material.min.css">

    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/icomoon/icomoon.css">

    <!-- AnimatedSVGIcons -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/animatedsvgicons/css/codropsicons.css">

    <!-- Iconsweets CSS -->


    <!-- Octicons CSS -->


    <!-- Stateface CSS -->


    <!-- FullCalendar -->


    <!-- Magnific popup -->


    <!-- c3charts -->


    <!-- Highlight.js CSS -->



    <!-- Ladda CSS -->


    <!-- Zocial CSS -->


    <!-- Slick CSS -->


    <!-- Dropzone CSS -->


    <!-- Nestable CSS -->


    <!-- Datatables CSS -->




    <!-- Fancytree CSS -->


    <!-- X-edit CSS -->




    <!-- FooTable CSS -->


    <!-- Summernote -->


    <!-- Stateface CSS -->


    <!-- Daterange CSS -->


    <!-- Tagmanager CSS -->


    <!-- Datetimepicker CSS -->


    <!-- Colorpicker CSS -->


    <!-- select2 CSS -->



    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" type="text/css" href="assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/less/theme.css">

    <!-- IE8 HTML5 support -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page">

<!-- Body Wrap  -->
<div id="main">

      <?php error_reporting(0);
	  require('../connection.php');
	  session_start();
	  $username=$_SESSION['username'];
	  $q1="select * from vendor_login where username = '$username'";
	$r1=mysql_query($q1);
	$row=mysql_fetch_array($r1);
    $name=$row['vname'];
	$email=$row['email'];
	$phone=$row['phone'];
	$website=$row['website'];
	$fbpage=$row['fbpage'];
	$about=$row['about'];
	$vid=$row['id'];
  $logo=$row['logo'];
	 $q2="select * from v_address where vid = '$vid'";
	$r2=mysql_query($q2);
	$row1=mysql_fetch_array($r2);
  $area=$row1['area'];
	$address=$row1['address'];
	$landmark=$row1['landmark'];
	$pincode=$row1['pincode'];
$q3="select * from v_hotel where vid= '$vid'";
$r3=mysql_query($q3);
$row2=mysql_fetch_array($r3);
$meal=$row2['meal'];
$international=$row2['internationalcus'];
$indian=$row2['indiancus'];
$specials=$row2['specials'];
$facilities=$row2['facilities'];
	  ?>
    <!-- Header  -->
    <?php include('header.php'); ?>
    <!-- /Header -->

    <!-- Sidebar  -->
    <?php include('sidebar.php'); ?>
    <!-- /Sidebar -->
    <!-- Main Wrapper -->
    <section id="content_wrapper">

                <!-- Topbar Menu Wrapper -->
        <div id="topbar-dropmenu-wrapper">
            <div class="topbar-menu row">
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-danger">
                        <span class="fa fa-music"></span>
                        <span class="service-title">Audio</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-success">
                        <span class="fa fa-picture-o"></span>
                        <span class="service-title">Images</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-primary">
                        <span class="fa fa-video-camera"></span>
                        <span class="service-title">Videos</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-alert">
                        <span class="fa fa-envelope"></span>
                        <span class="service-title">Messages</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-system">
                        <span class="fa fa-cog"></span>
                        <span class="service-title">Settings</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-dark">
                        <span class="fa fa-user"></span>
                        <span class="service-title">Users</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Topbar Menu Wrapper -->

                <!-- Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-link">
                        <a href="index.php">Home</a>
                    </li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Welcome back, <span><?php echo$name;?></span>!

        </div>

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">
           <div class="allcp-form theme-primary tab-pane mw600" id="register" role="tabpanel">
                            <div class="panel">
                                <div class="panel-heading">
                                    <span class="panel-title pn">Registration form</span>
                                </div>
                                <!-- /Panel Heading -->

                                <form method="POST" action="updatepagebe.php" id='update' enctype="multipart/form-data">
                                    <div class="panel-body pn">
                                        <div class="section row mh10m">
                                           <div class="row ">
										   <label class="col-md-3">Name </label>

										   <div class="col-md-9">
                                                <label for="firstname2" class="field prepend-icon">
                                                    <input type="text" name="name" id="firstname2"
                                                           class="gui-input"
                                                           value="<?=$name?>">
                                                    <span class="field-icon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </label>
                                            </div>
											</div>
                                            <!-- /section -->


                                            <!-- /section -->
                                        </div>
                                        <!-- /section -->
                                        <div class="row">
										<label class="col-md-3">Email </label>
                                        <div class="section col-md-9">
                                            <label for="email5" class="field prepend-icon">
                                                <input type="email" name="email" id="email5" class="gui-input"
                                                       value="<?php echo $email; ?>">
                                                <span class="field-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </label>
                                        </div>
										</div>
										<!-- /section -->
										<div class="row">
										<label class="col-md-3">Phone </label>
										<div class="section col-md-9">
                                            <label for="City" class="field prepend-icon">
                                                <input type="text" name="phone" id="email5" class="gui-input"
                                                       value="<?=$phone?>">
                                                <span class="field-icon">
                                                    <i class="fa fa-home"></i>
                                                </span>
                                            </label>
                                        </div>
										</div>
                                        <!-- /section -->
										<div class="row">
										<label class="col-md-3">city </label>
										<div class="section col-md-9">
                                            <label for="City" class="field prepend-icon">
                                                <input type="text" name="city" id="email5" class="gui-input"
                                                       value="Hyderabad" readonly="readonly">
                                                <span class="field-icon">
                                                    <i class="fa fa-home"></i>
                                                </span>
                                            </label>
                                        </div>
										</div>

                                        <!-- /section -->
										<div class="row">
										<label class="col-md-3">Area </label>
										<div class="section col-md-9">
                                            <label class="field select">
                                                <select id="location" name="area">
												    <option>Area</option>
    <option value="banj" <?php if($area=="banj") echo 'selected="selected"'; ?>>Banjara Hills  </option>
		<option value="kukat"<?php if($area=="kukat") echo 'selected="selected"'; ?>>Kukatpally</option>
		<option value="gach" <?php if($area=="gach") echo 'selected="selected"'; ?>>Gachibowli </option>
		<option value="madha" <?php if($area=="madha") echo 'selected="selected"'; ?>>Madhapur</option>
		<option value="jubil" <?php if($area=="jubli") echo 'selected="selected"'; ?>>Jubilee Hills </option>
		<option value="hitech" <?php if($area=="hitech") echo 'selected="selected"'; ?>>Hitech City </option>
		<option value="kondapur" <?php if($area=="kondapur") echo 'selected="selected"'; ?>>Kondapur</option>
		<option value="begumpet" <?php if($area=="begumpet") echo 'selected="selected"'; ?>>Begumpet </option>
		<option value="mehidi" <?php if($area=="mehidi") echo 'selected="selected"'; ?>>Mehdipatnam </option>
		<option value="ameer" <?php if($area=="ameer") echo 'selected="selected"'; ?>>Ameerpet </option>
		<option value="abids" <?php if($area=="abids") echo 'selected="selected"'; ?>>Abids</option>
		<option value="asrao" <?php if($area=="asrao") echo 'selected="selected"'; ?>>A S Rao Nagar </option>
		<option value="charminar" <?php if($area=="charminar") echo 'selected="selected"'; ?>>Charminar </option>
		<option value="bowen" <?php if($area=="bowen") echo 'selected="selected"'; ?>>Bowenpally </option>
		<option value="dilsuk" <?php if($area=="dilsuk") echo 'selected="selected"'; ?>>Dilsukhnagar </option>
		<option value="manik" <?php if($area=="manik") echo 'selected="selected"'; ?>>Manikonda </option>
		<option value="himayath" <?php if($area=="himayath") echo 'selected="selected"'; ?>>Himayath Nagar </option>
		<option value="panja" <?php if($area=="panja") echo 'selected="selected"'; ?>>Panjagutta</option>
		<option value="marred" <?php if($area=="marred") echo 'selected="selected"'; ?>>Marredpally</option>
		<option value="lakdi" <?php if($area=="lakdi") echo 'selected="selected"'; ?>>Lakdikapul </option>
		<option value="shamsha" <?php if($area=="samsha") echo 'selected="selected"'; ?>>Shamshabad </option>
		<option value="toli" <?php if($area=="toli") echo 'selected="selected"'; ?>>Tolichowki</option>
		<option value="srnagar" <?php if($area=="srnagar") echo 'selected="selected"'; ?>>S R Nagar</option>


		<option value="nallakunta" <?php if($area=="nallakunta") echo 'selected="selected"'; ?>>Nallakunta</option>
		<option value="kache" <?php if($area=="kache") echo 'selected="selected"'; ?>>Kacheguda</option>
		<option value="nampally" <?php if($area=="nampally") echo 'selected="selected"'; ?>>Nampally</option>
		<option value="sainik" <?php if($area=="sainik") echo 'selected="selected"'; ?>>Sainikpuri</option>
		<option value="alwal" <?php if($area=="alwal") echo 'selected="selected"'; ?>>Alwal</option>
		<option value="sdroad" <?php if($area=="sdroad") echo 'selected="selected"'; ?>>S D Road </option>
		<option value="malakpet" <?php if($area=="malakpet") echo 'selected="selected"'; ?>>Malakpet</option>
		<option value="masab" <?php if($area=="masab") echo 'selected="selected"'; ?>>Masab Tank</option>
		<option value="somaji" <?php if($area=="somaji") echo 'selected="selected"'; ?>>Somajiguda</option>
		<option value="amberpet" <?php if($area=="amberpet") echo 'selected="selected"'; ?>>Amberpet</option>
		<option value="koti" <?php if($area=="koti") echo 'selected="selected"'; ?>>Koti</option>
		<option value="miyapur" <?php if($area=="miyapur") echo 'selected="selected"'; ?>>Miyapur</option>
		<option value="filmnagar" <?php if($area=="filmnagar") echo 'selected="selected"'; ?>>Film Nagar </option>
		<option value="chanda" <?php if($area=="chanda") echo 'selected="selected"'; ?>>Chanda Nagar </option>
		<option value="nizampet" <?php if($area=="nizampet") echo 'selected="selected"'; ?>>Nizampet </option>
		<option value="neclace" <?php if($area=="naclace") echo 'selected="selected"'; ?>>Necklace Road  </option>
		<option value="Chandrayan" <?php if($area=="Chandrayan") echo 'selected="selected"'; ?>>Chandrayanagutta</option>
		<option value="yosuf" <?php if($area=="yosuf") echo 'selected="selected"'; ?>>Yousufguda </option>
		<option value="lingam" <?php if($area=="lingam") echo 'selected="selected"'; ?>>Lingampally</option>
		<option value="attapur" <?php if($area=="attapur") echo 'selected="selected"'; ?>>Attapur</option>
		<option value="karkhana" <?php if($area=="karkhana") echo 'selected="selected"'; ?>>Karkhana </option>
		<option value="pgroad" <?php if($area=="pgroad") echo 'selected="selected"'; ?>>PG Road  </option>
		<option value="adikpet" <?php if($area=="adikpet") echo 'selected="selected"'; ?>>Adikmet</option>
		<option value="basheer" <?php if($area=="basheer") echo 'selected="selected"'; ?>>Basheer Bagh </option>
		<option value="padmarao" <?php if($area=="padmarao") echo 'selected="selected"'; ?>>Padmarao Nagar </option>
		<option value="habsiguda" <?php if($area=="habsiguda") echo 'selected="selected"'; ?>>Habsiguda</option>
		<option value="uppal" <?php if($area=="uppal") echo 'selected="selected"'; ?>>Uppal</option>
		<option value="trimul" <?php if($area=="trimul") echo 'selected="selected"'; ?>>Trimulgherry</option>
		<option value="tarnaka" <?php if($area=="tarnaka") echo 'selected="selected"'; ?>>Tarnaka</option>
		<option value="srinagar" <?php if($area=="srinagar") echo 'selected="selected"'; ?>>Srinagar Colony</option>
		<option value="langer" <?php if($area=="langer") echo 'selected="selected"'; ?>>Langer Houz</option>
		<option value="kothapet" <?php if($area=="kothapet") echo 'selected="selected"'; ?>>Kothapet</option>
		<option value="falaknuma" <?php if($area=="falaknuma") echo 'selected="selected"'; ?>>Falaknuma</option>
		<option value="shamirpet" <?php if($area=="shamirpet") echo 'selected="selected"'; ?>>Shamirpet</option>
	  <option value="balanagar" <?php if($area=="balanagar") echo 'selected="selected"'; ?>>Balanagar</option>
		<option value="vanasthali" <?php if($area=="vanasthali") echo 'selected="selected"'; ?>>Vanasthalipuram</option>
		<option value="moti" <?php if($area=="moti") echo 'selected="selected"'; ?>>Moti Nagar </option>
		<option value="railway" <?php if($area=="railway") echo 'selected="selected"'; ?>>Railway Station Road</option>
		<option value="saroor" <?php if($area=="saroor") echo 'selected="selected"'; ?>>Saroor Nagar</option>


		<option value="jeedi" <?php if($area=="jeedi") echo 'selected="selected"'; ?>>Jeedimetla</option>
		<option value="medchal" <?php if($area=="medchal") echo 'selected="selected"'; ?>>Medchal Road</option>
		<option value="hafeez" <?php if($area=="hafeez") echo 'selected="selected"'; ?>>Hafeezpet</option>
		<option value="ecil" <?php if($area=="ecil") echo 'selected="selected"'; ?>>ECIL </option>
		<option value="malkaj" <?php if($area=="malkaj") echo 'selected="selected"'; ?>>Malkajgiri</option>
		<option value="khairata" <?php if($area=="khairata") echo 'selected="selected"'; ?>>Khairatabad</option>
		<option value="begum" <?php if($area=="begum") echo 'selected="selected"'; ?>>Begum Bazaar</option>
		<option value="kompally" <?php if($area=="kompally") echo 'selected="selected"'; ?>>Kompally </option>
		<option value="kothaguda" <?php if($area=="kothaguda") echo 'selected="selected"'; ?>>Kothaguda </option>
		<option value="lbnagar" <?php if($area=="lbnagar") echo 'selected="selected"'; ?>>L B Nagar</option>
		<option value="nacharam" <?php if($area=="nacharam") echo 'selected="selected"'; ?>>Nacharam </option>
		<option value="boiguda" <?php if($area=="boiguda") echo 'selected="selected"'; ?>>Boiguda </option>
		<option value="sproad" <?php if($area=="sproad") echo 'selected="selected"'; ?>>S P Road</option>
								</select>
                                                <i class="arrow double"></i>
                                            </label>
                                        </div>
										</div>
										<div class="row">
										<label class="col-md-3">Address </label>
                                        <div class="section col-md-9">
                                            <label for="firstaddr" class="field prepend-icon">
                                                <input type="text" name="address" id="firstaddr" class="gui-input"
                                                       value="<?=$address?>">
                                                <span class="field-icon">
                                                    <i class="fa fa-home"></i>
                                                </span>
                                            </label>
                                        </div>
										</div>
										<div class="row">
										<label class="col-md-3">Landmark </label>
										<div class="section col-md-9">
                                            <label for="firstaddr" class="field prepend-icon">
                                                <input type="text" name="landmark" id="firstaddr" class="gui-input"
                                                       value="<?=$landmark?>">
                                                <span class="field-icon">
                                                    <i class="fa fa-home"></i>
                                                </span>
                                            </label>
                                        </div>
										</div>
										<div class="row">
										<label class="col-md-3">Pincode </label>
										<div class="section col-md-9">
                                            <label for="firstaddr" class="field prepend-icon">
                                                <input type="text" name="pincode" id="firstaddr" class="gui-input"
                                                       value="<?=$pincode?>">
                                                <span class="field-icon">
                                                    <i class="fa fa-home"></i>
                                                </span>
                                            </label>
                                        </div>
										</div>


										<!-- Radios/Checkboxes/Toggle Switches/Review & Rating Widgets -->
                                    <div class="section row" id="spy5">
                                        <div class="col-md-4 pl20 prn">
                                            <h6 class="mt40 mb15">Meal</h6>
                                            <!-- /section -->
                                            <div class="section mt25 mb15">
                                                <div class="option-group field">
                                                    <label class="option block">
                                                        <input type="checkbox" name="meal[]" value="breakfast" <?php if(strpos($meal,'reakfast')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Breakfast </label>
                                                     <label class="option block">
                                                        <input type="checkbox" name="meal[]" value="lunch" <?php if(strpos($meal,'unch')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Lunch</label>

												    <label class="option block">
                                                        <input type="checkbox" name="meal[]" value="dinner" <?php if(strpos($meal,'inner')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Dinner</label>

												    <label class="option block">
                                                        <input type="checkbox" name="meal[]" value="midnight" <?php if(strpos($meal,'idnight')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Midnight</label>
                            <label class="option block">
                                                <input type="checkbox" name="meal[]" value="buffet" <?php if(strpos($meal,'uffet')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Buffet</label>
												   </div>
                                            </div>
                                            <!-- /section -->
                                            <h6 class="mt40 mb15">International Cusines</h6>
                                            <!-- /section -->
                                            <div class="section mt25 mb15">
                                                <div class="option-group field">
                                                    <label class="option block">
                                                        <input type="checkbox" name="intcus[]" value="italian"  <?php if(strpos($international,'talian')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Italian </label>
                                                     <label class="option block">
                                                        <input type="checkbox" name="intcus[]" value="chinese" <?php if(strpos($international,'chinese')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Chinese</label>

												    <label class="option block">
                                                        <input type="checkbox" name="intcus[]" value="thai"  <?php if(strpos($international,'hai')){echo 'checked';} ?> >
                                                        <span class="checkbox"></span>Thai</label>

												    <label class="option block">
                                                        <input type="checkbox" name="intcus[]" value='mexican'  <?php if(strpos($international,'exican')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Mexican</label>

												    <label class="option block">
                                                        <input type="checkbox" name="intcus[]" value='french' <?php if(strpos($international,'rench')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>French</label>
												   </div>
                                            </div>
                                            <!-- /section -->
                                            <h6 class="mt40 mb15">Indian Cusines</h6>
                                            <!-- /section -->
                                            <div class="section mt25 mb15">
                                                <div class="option-group field">
                                                    <label class="option block">
                                                        <input type="checkbox" name="indcus[]" value='punjabi' <?php if(strpos($indian,'unjabi')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Punjabi </label>
                                                     <label class="option block">
                                                        <input type="checkbox" name="indcus[]" value='gujarathi'  <?php if(strpos($indian,'ujarathi')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Gujarathi</label>

												    <label class="option block">
                                                        <input type="checkbox" name="indcus[]" value='bengali' <?php if(strpos($indian,'bengali')){echo 'checked';} ?> >
                                                        <span class="checkbox"></span>Bengali</label>

												    <label class="option block">
                                                        <input type="checkbox" name="indcus[]" value='andra' <?php if(strpos($indian,'andra')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Andhra</label>

												    <label class="option block">
                                                        <input type="checkbox" name="indcus[]" value='tamil' <?php if(strpos($indian,'tamil')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Tamilnadu</label>

												    <label class="option block">
                                                        <input type="checkbox" name="indcus[]" value='raj'  <?php if(strpos($indian,'raj')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Rajasthani</label>
												   <label class="option block">
                                                        <input type="checkbox" name="indcus[]" value='sindh' <?php if(strpos($indian,'sindh')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Sindhi</label>

												   </div>
                                            </div>
                                            <h6 class="mt40 mb15">Specials</h6>
                                            <!-- /section -->
                                            <div class="section mt25 mb15">
                                                <div class="option-group field">
                                                    <label class="option block">
                                                        <input type="checkbox" name="spl[]" value='bir' <?php if(strpos($specials,'ir')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Biryani </label>
                                                     <label class="option block">
                                                        <input type="checkbox"  name="spl[]" value='desserts' <?php if(strpos($specials,'esserts')){echo 'checked';} ?>>
                                                        <span class="checkbox"></span>Desserts</label>

												    <label class="option block">
                                                        <input type="checkbox" name="spl[]" value='juices' <?php if(strpos($specials,'uices')){echo 'checked';} ?> >
                                                        <span class="checkbox"></span>Juices</label>

												    <label class="option block">
                                                        <input type="checkbox" name="spl[]" value='street' <?php if(strpos($specials,'treet')){echo 'checked';} ?> >
                                                        <span class="checkbox"></span>Street food</label>

												    <label class="option block">
                                                        <input type="checkbox" name="spl[]" value='snacksbar' <?php if(strpos($specials,'nacksbar')){echo 'checked';} ?> >
                                                        <span class="checkbox"></span>Snacks Bar</label>

												    <label class="option block">
                                                        <input type="checkbox" name="spl[]" value='bbq' <?php if(strpos($specials,'bq')){echo 'checked';} ?> >
                                                        <span class="checkbox"></span>BBQ</label>
												   </div>
                                            </div>
                                            <!-- /section -->
                                            <h6 class="mt40 mb15">Facilities</h6>
                                            <!-- /section -->
                                            <div class="section mt25 mb15">
                                                <div class="option-group field">
                                                    <label class="option block">
                                                        <input type="checkbox" name="fac[]" value='ool' <?php if(strpos($facilities,'ool')){echo 'checked';} ?> >
                                                        <span class="checkbox"></span>Pool </label>
                                                     <label class="option block">
                                                        <input type="checkbox" name="fac[]" value='wifi' <?php if(strpos($facilities,'ifi')){echo 'checked';} ?>  >
                                                        <span class="checkbox"></span>Wifi</label>

												    <label class="option block">
                                                        <input type="checkbox" name="fac[]" value='home' <?php if(strpos($facilities,'ome')){echo 'checked';} ?> >
                                                        <span class="checkbox"></span>Home Delivery</label>

												    <label class="option block">
                                                        <input type="checkbox" name="fac[]" value='music' <?php if(strpos($facilities,'usic')){echo 'checked';} ?> >
                                                        <span class="checkbox"></span>Live Music</label>

												    <label class="option block">
                                                        <input type="checkbox" name="fac[]" value='hookah' <?php if(strpos($facilities,'ookah')){echo 'checked';} ?> >
                                                        <span class="checkbox"></span>Hookha</label>

												    <label class="option block">
                                                        <input type="checkbox"name="fac[]" value='valet' <?php if(strpos($facilities,'alet')){echo 'checked';} ?> >
                                                        <span class="checkbox"></span>Valet Parking</label>
												   <label class="option block">
                                                        <input type="checkbox" name="fac[]" value='alcohol' <?php if(strpos($facilities,'lcohol')){echo 'checked';} ?> >
                                                        <span class="checkbox"></span>Alchol</label>
                                                   <label class="option block">
                                                        <input type="checkbox" name="fac[]" value='lodge' <?php if(strpos($facilities,'odge')){echo 'checked';} ?> >
                                                        <span class="checkbox"></span>Lodging</label>
                                                   <label class="option block">
                                                        <input type="checkbox" name="fac[]" value='rooftop' <?php if(strpos($facilities,'ooftop')){echo 'checked';} ?> >
                                                        <span class="checkbox"></span>Rooftops</label>

												   </div>
                                            </div>
                                            <!-- /section -->
                                        </div>
                                    </div>
									<div class="row">
									<label class="col-md-3">website </label>
									<div class="section col-md-9">
                                                <label class="field prepend-icon">
                                                    <input type="text" name="website" id="website" class="gui-input"
                                                           value="<?=$website?>">
                                                    <span class="field-icon">
                                                        <i class="fa fa-external-link"></i>
                                                    </span>
                                                </label>
                                            </div>
											</div>
									<div class="row">
									<label class="col-md-3">Fbpage </label>
									<div class="section col-md-9">
                                                <label class="field prepend-icon">
                                                    <input type="text" name="fbpage"  class="gui-input"
                                                           value="<?=$fbpage?>">
                                                    <span class="field-icon">
                                                        <i class="fa fa-external-link"></i>
                                                    </span>
                                                </label>
                                            </div>
											</div>
											<div class="row">
											<label class="col-md-3">change Photo </label>
											<div class="col-md-9 hidden-xs">
                                            <div class="section">
                                                <label class="field append-icon file file-fw ">

                                                    <input type="file" name="logo" class="gui-input">

                                                    <i class="fa fa-upload"></i>
                                                </label>
                                            </div>
                                        </div>
										</div>
                                       <div class="row ">
									   <label class="col-md-3">About </label>
									   <div class="col-md-9">
                                            <div class="section">
                                                <label class="field prepend-icon">
                                                    <textarea class="gui-textarea" id="comment" name="about" ><?=$about?></textarea>
                                                    <span class="field-icon">
                                                        <i class="fa fa-list"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <!-- /section -->

                                    </div>
                                    <!-- /Form -->
                                    <input type="submit" class="btn btn-primary" name="submit1" value="Update">
                                </form>
                            </div>
                            <!-- /Panel -->
                        </div>

        </section>
        <!-- /Content -->



    </section>
    <!-- /Main Wrapper -->

</div>
<!-- /Body Wrap  -->

<!-- Scripts -->

<!-- jQuery -->
<script src="assets/js/jquery/jquery-1.12.3.min.js"></script>
<script src="assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- AnimatedSVGIcons -->

<!-- Scroll -->


<!-- Mixitup -->


<!-- Summernote -->



<!-- HighCharts Plugin -->
<script src="assets/js/plugins/highcharts/highcharts.js"></script>

<!-- Highlight JS -->


<!-- Date/Month - Pickers -->





<!-- Magnific Popup Plugin -->

<!-- FullCalendar Plugin -->



<!-- Plugins -->



<!-- Theme Scripts -->
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/demo/widgets_sidebar.js"></script>





<script src="assets/js/pages/dashboard1.js"></script>
































<script src="assets/js/demo/widgets.js"></script>




<!-- /Scripts -->

</body>


</html>
