<?php
include 'connection.php';
error_reporting(0);
$id=$_GET[id];
$q="SELECT * FROM vendor_login v, v_address a, v_hotel h, hotel_data d WHERE v.id=$id and a.vid=$id and h.vid=$id and d.id=$id";
$r=mysql_query($q);
if($r){
	while($row=mysql_fetch_array($r)){
		$name=$row['name'];
		$city=$row['city'];
		$phone=$row['phone'];
		$desc=$row['planhere_desc'];
		$website=$row['website'];
		$about=$row['about'];
		$area=$row['area'];
		$address=$row['address'];
		$meal=$row['meal'];
		$price=$row['price'];
		$facilities=$row['facilities'];
		$internationalcus=$row['internationalcus'];
		$indiancus=$row['indiancus'];
		$specials=$row['specials'];
		$logo=$row['logo'];
	}
}

?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title><?php echo $name;?> || PlanHere</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/slider-pro.min.css" rel="stylesheet">
    <link href="css/date_time_picker.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">

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

<?php include "header.php";
?>
    <section class="parallax-window" data-parallax="scroll" data-image-src="<?=$logo?>" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i></span>
                    <h1><?php echo $name;?></h1>
                    <span><?php echo $address;?></span>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="price_single_main" class="hotel">
                        from/per night <span><sup>₹</sup><?php echo $price;?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- End section -->

    <div id="position">
            <div class="container">
                        <ul><!--  ₹  -->
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Category</a></li>
                        <li>Page active</li>
                        </ul>
            </div>
    </div><!-- End Position -->


     <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div><!-- End Map -->

    <div class="container margin_60">
    <div class="row">
        <div class="col-md-8" id="single_tour_desc">
            <div id="single_tour_feat">
                <ul>

                    <li><i class="icon_set_2_icon-116"></i>Plasma TV</li>
                    <li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
                    <li><i class="icon_set_2_icon-110"></i>Poll</li>
                    <li><i class="icon_set_1_icon-59"></i>Breakfast</li>
                    <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                    <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                    <li><i class="icon_set_1_icon-27"></i>Parking</li>
                </ul>
            </div>
            <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a></p><!-- Map button for tablets/mobiles -->
            <div id="Img_carousel" class="slider-pro">
                <div class="sp-slides">

                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif"
                        data-src="img/slider_single_tour/1_medium.jpg"
                        data-small="img/slider_single_tour/1_small.jpg"
                        data-medium="img/slider_single_tour/1_medium.jpg"
                        data-large="img/slider_single_tour/1_large.jpg"
                        data-retina="img/slider_single_tour/1_large.jpg">
                    </div>
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif"
                        data-src="img/slider_single_tour/2_medium.jpg"
                        data-small="img/slider_single_tour/2_small.jpg"
                        data-medium="img/slider_single_tour/2_medium.jpg"
                        data-large="img/slider_single_tour/2_large.jpg"
                        data-retina="img/slider_single_tour/2_large.jpg">
                        <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="40" data-show-transition="left">
                        Lorem ipsum dolor sit amet </h3>
                        <p class="sp-layer sp-white sp-padding" data-horizontal="40" data-vertical="100" data-show-transition="left" data-show-delay="200">
                             consectetur adipisicing elit
                        </p>
                        <p class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="160" data-width="350" data-show-transition="left" data-show-delay="400">
                             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>

                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif"
                        data-src="img/slider_single_tour/3_medium.jpg"
                        data-small="img/slider_single_tour/3_small.jpg"
                        data-medium="img/slider_single_tour/3_medium.jpg"
                        data-large="img/slider_single_tour/3_large.jpg"
                        data-retina="img/slider_single_tour/3_large.jpg">
                        <p class="sp-layer sp-white sp-padding" data-position="centerCenter" data-vertical="-50" data-show-transition="right" data-show-delay="500">
                             Lorem ipsum dolor sit amet
                        </p>
                        <p class="sp-layer sp-black sp-padding" data-position="centerCenter" data-vertical="50" data-show-transition="left" data-show-delay="700">
                             consectetur adipisicing elit
                        </p>
                    </div>

                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif"
                        data-src="img/slider_single_tour/4_medium.jpg"
                        data-small="img/slider_single_tour/4_small.jpg"
                        data-medium="img/slider_single_tour/4_medium.jpg"
                        data-large="img/slider_single_tour/4_large.jpg"
                        data-retina="img/slider_single_tour/4_large.jpg">
                        <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-vertical="0" data-width="100%" data-show-transition="up">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>

                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif"
                        data-src="img/slider_single_tour/5_medium.jpg"
                        data-small="img/slider_single_tour/5_small.jpg"
                        data-medium="img/slider_single_tour/5_medium.jpg"
                        data-large="img/slider_single_tour/5_large.jpg"
                        data-retina="img/slider_single_tour/5_large.jpg">
                        <p class="sp-layer sp-white sp-padding" data-vertical="5%" data-horizontal="5%" data-width="90%" data-show-transition="down" data-show-delay="400">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>

                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif"
                        data-src="img/slider_single_tour/6_medium.jpg"
                        data-small="img/slider_single_tour/6_small.jpg"
                        data-medium="img/slider_single_tour/6_medium.jpg"
                        data-large="img/slider_single_tour/6_large.jpg"
                        data-retina="img/slider_single_tour/6_large.jpg">
                        <p class="sp-layer sp-white sp-padding" data-horizontal="10" data-vertical="10" data-width="300">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>

                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif"
                        data-src="img/slider_single_tour/7_medium.jpg"
                        data-small="img/slider_single_tour/7_small.jpg"
                        data-medium="img/slider_single_tour/7_medium.jpg"
                        data-large="img/slider_single_tour/7_large.jpg"
                        data-retina="img/slider_single_tour/7_large.jpg">
                        <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>

                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif"
                        data-src="http://bqworks.com/slider-pro/images/image8_medium.jpg"
                        data-small="http://bqworks.com/slider-pro/images/image8_small.jpg"
                        data-medium="http://bqworks.com/slider-pro/images/image8_medium.jpg"
                        data-large="http://bqworks.com/slider-pro/images/image8_large.jpg"
                        data-retina="http://bqworks.com/slider-pro/images/image8_large.jpg"/>
                    </div>
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif"
                        data-src="img/slider_single_tour/8_medium.jpg"
                        data-small="img/slider_single_tour/8_small.jpg"
                        data-medium="img/slider_single_tour/8_medium.jpg"
                        data-large="img/slider_single_tour/8_large.jpg"
                        data-retina="img/slider_single_tour/8_large.jpg">
                        <p class="sp-layer sp-black sp-padding" data-horizontal="50" data-vertical="50" data-show-transition="down" data-show-delay="500">
                             Lorem ipsum dolor sit amet
                        </p>
                        <p class="sp-layer sp-white sp-padding" data-horizontal="50" data-vertical="100" data-show-transition="up" data-show-delay="500">
                             consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>

                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="../src/css/images/blank.gif"
                        data-src="img/slider_single_tour/9_medium.jpg"
                        data-small="img/slider_single_tour/9_small.jpg"
                        data-medium="img/slider_single_tour/9_medium.jpg"
                        data-large="img/slider_single_tour/9_large.jpg"
                        data-retina="img/slider_single_tour/9_large.jpg">
                    </div>
                </div>
                <div class="sp-thumbnails">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/1_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/2_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/3_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/4_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/5_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/6_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/7_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/8_medium.jpg">
                    <img alt="" class="sp-thumbnail" src="img/slider_single_tour/9_medium.jpg">
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-3">
                    <h3>Description</h3>
                </div>
                <div class="col-md-9">
                    <p>
                        <?php echo $about; ?>
												</p>
                    <h4>Hotel facilities</h4>
                    <p>
                        Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
                    </p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <ul class="list_ok">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>No scripta electram necessitatibus sit</li>
                                <li>Quidam percipitur instructior an eum</li>
                                <li>Ut est saepe munere ceteros</li>
                                <li>No scripta electram necessitatibus sit</li>
                                <li>Quidam percipitur instructior an eum</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul class="list_ok">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>No scripta electram necessitatibus sit</li>
                                <li>Quidam percipitur instructior an eum</li>
                                <li>No scripta electram necessitatibus sit</li>
                            </ul>
                        </div>
												<div class="col-md-6 col-sm-6">
                            <ul class="list_icons">
                                <li><i class="icon_set_1_icon-86"></i> Free wifi</li>
                                <li><i class="icon_set_2_icon-116"></i> Plasma Tv</li>
                                <li><i class="icon_set_2_icon-106"></i> Safety  box</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul class="list_ok">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>No scripta electram necessitatibus sit</li>
                                <li>Quidam percipitur instructior an eum</li>
                            </ul>
                        </div>
                    </div><!-- End row  -->
                </div><!-- End col-md-9  -->
            </div><!-- End row  -->

          	<hr>

            <div class="row">
                <div class="col-md-3">
                    <h3>Plan Here Description</h3>
                </div>
                <div class="col-md-9">

										<div class="row">
												<?php echo $desc;?>
                    </div><!-- End row  -->



                </div><!-- End col-md-9  -->
            </div><!-- End row  -->

<hr>
						<div class="row">
								<div class="col-md-3">
										<h3>Menu</h3>
								</div>
								<div class="col-md-9">

										<p>
										<!--	make a new column in the database initialy its value shoud be 0 so write a if condition if zero "-" or the matter should be displayed -->
											</p>
										 <div class="carousel magnific-gallery">
											<div class="item">
													<a href="img/carousel/1.jpg"><img src="img/carousel/1.jpg" alt="Image"></a>
												</div>
												<div class="item">
													<a href="img/carousel/2.jpg"><img src="img/carousel/2.jpg" alt="Image"></a>
												</div>
												<div class="item">
													<a href="img/carousel/3.jpg"><img src="img/carousel/3.jpg" alt="Image"></a>
												</div>
												<div class="item">
													<a href="img/carousel/4.jpg"><img src="img/carousel/4.jpg" alt="Image"></a>
												</div>
										 </div><!-- End photo carousel  -->
								</div><!-- End col-md-9  -->
						</div><!-- End row  -->

          	<hr>

            <div class="row">
                <div class="col-md-3">
                    <h3>Reviews</h3>
                </div>
                <div class="col-md-9">
                	<div id="score_detail"><span>7.5</span>Good <small>(Based on 34 reviews)</small></div><!-- End general_rating -->
                    <div class="row" id="rating_summary">
                    	<div class="col-md-6">
                        	<ul>
                            	<li>Position
                                    <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                    </div>
                                </li>
                                <li>Comfort
                                <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                        	<ul>
                            	<li>Price
                                <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                    </div>
                                </li>
                                <li>Quality
                                <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- End row -->
                    <hr>
                    <div class="review_strip_single">
                        <img src="img/avatar1.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                             "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                        </div>
                    </div><!-- End review strip -->

                    <div class="review_strip_single">
                        <img src="img/avatar2.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                             "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                        </div>
                    </div><!-- End review strip -->

                    <div class="review_strip_single last">
                        <img src="img/avatar3.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                             "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                        </div>
                    </div><!-- End review strip -->
                </div>
            </div>
        </div><!--End  single_tour_desc-->

        <aside class="col-md-4">
        <p class="hidden-sm hidden-xs">
            <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a>
        </p>
        <div class="box_style_1 expose">
        <?php
				if (!count($_POST)){
			?>
        <form id="booking_hotel" action="confirm.php" method="post">
            <h3 class="inner">Book A Table</h3>

								 <h4>Booking For : </h4>
                <div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Name</label>
							<input class="form-control required" name="first_name" id="name_hotel_booking" type="text">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Last name</label>
							<input class="form-control required" name="last_name" id="last_hotel_name_booking" type="text">
						</div>
					</div>
				</div>

				<div class="form-group" style="position:relative">
					<label>Email</label>
					<input class="form-control required" type="email" name="email" id="email_hotel_booking">
				</div>

				<div class="form-group" style="position:relative">
					<label>Telephone</label>
					<input class="form-control required" type="tel" name="phone" id="phone_hotel_booking">
				</div>
				<div class="row">
						<div class="col-md-6 col-sm-6">
								<div class="form-group">
										<label>Adults</label>
										<div class="numbers-row">
												<input type="text" value="1" id="adults_hotel" class="qty2 form-control required" name="adults">
										</div>
								</div>
						</div>
						<div class="col-md-6 col-sm-6">
								<div class="form-group">
										<label>Children</label>
										<div class="numbers-row">
												<input type="text" value="0" id="children_hotels" class="qty2 form-control required" name="children">
										</div>
								</div>
						</div>
						<div class="col-md-6 col-sm-6">
								<div class="form-group">
										<label><i class="icon-calendar-7"></i>Date</label>
										<input class="date-pick form-control required" data-date-format="M d, D" type="text" name="date" id="check_in_hotel">
								</div>
						</div>
						<div class="col-md-6 col-sm-6">
								 <div class="form-group">
										<label><i class="icon-calendar-7"></i> Time</label> <!-- SET time datatype-->
										<input class="time-pick form-control required" data-time-format="H:M:S" type="text" name="time" id="check_out_hotel">
								</div>
						</div>
						<p>Once the time is set it is valid for 30 minutes after the time and 10 minutes before the time  </p>
						</div>
            <br>
						<input type="hidden" value="<?=$_GET['id'];?>" name="id" />
            <button type="submit" class="btn_full">Book now</button>

            <a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to whislist</a>
            </form>
            <?php
		}else{
	    ?>
       <!-- START SEND MAIL SCRIPT -->
     <div class="text-center">
        <p><i class="icon-ok-circled" style="font-size:75px; color:#83c99f"></i></p>
		<p><strong>Request Successfully Sent!</strong><br />
		  We will contact you shortly to confirm your request!</p>
		</div>
<?php } ?>
        </div><!--/box_style_1 -->

        <div class="box_style_4">
            <i class="icon_set_1_icon-90"></i>
            <h4><span>Book</span> by phone</h4>
            <a href="tel://004542344599" class="phone">+45 423 445 99</a>
            <small>Monday to Friday 9.00am - 7.30pm</small>
        </div>

        </aside>
    </div><!--End row -->
    </div><!--End container -->

 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>Need help?</h3>
                    <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                    <a href="" id="email_footer"></a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                         <li><a href="#">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="#">Community blog</a></li>
                        <li><a href="#">Tour guide</a></li>
                        <li><a href="#">Wishlist</a></li>
                         <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="lang">
                            <option value="English" selected>English</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Russian">Russian</option>
                        </select>
                    </div>
                    <div class="styled-select">
                        <select class="form-control" name="currency" id="currency">
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        </ul>
                        <p>© Citytours 2015</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<div id="overlay"></div><!-- Mask on input focus -->

 <!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

 <!-- Specific scripts -->
<script src="js/icheck.js"></script>
 <script src="js/jquery.validate.js"></script>
<script>
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>
 <!-- Date and time pickers -->
<script src="js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function( $ ) {
		$( '#Img_carousel' ).sliderPro({
			width: 960,
			height: 500,
			fade: true,
			arrows: true,
			buttons: false,
			fullScreen: false,
			smallSize: 500,
			startSlide: 0,
			mediumSize: 1000,
			largeSize: 3000,
			thumbnailArrows: true,
			autoplay: false
		});
	});
</script>
<!-- Date and time pickers -->
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-timepicker.js"></script>
<script>
   $("#booking_hotel").validate();
  $('input.date-pick').datepicker();
	$('input.time-pick').timepicker();
</script>
 <!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/map.js"></script>
<script src="js/infobox.js"></script>
 <!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){
		$(".carousel").owlCarousel({
		items : 4,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
		});
    });
</script>
  </body>
</html>
