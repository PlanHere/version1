<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head><? require_once 'connection.php';error_reporting(0);?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Plan Here">
    <title>Hotels List | Plan Here</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

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

<section class="parallax-window" data-parallax="scroll" data-image-src="img/hotels_bg.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
        <h1>Paris Hotels</h1>
        <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
        </div>
    </div>
</section><!-- End section -->

<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li>Hotels</li>
                    </ul>
        </div>
    </div><!-- Position -->

<div class="collapse" id="collapseMap">
	<div id="map" class="map"></div>
</div><!-- End Map -->

<div class="container margin_60">
	<div class="row">
	<aside class="col-lg-3 col-md-3">
            <p>
                <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a>
            </p>
   <form action="hotel_grid_filter.php" method="get">
		<div id="filters_col">
			<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters <i class="icon-plus-1 pull-right"></i></a>
			<div class="collapse in" id="collapseFilters">
				<br />
				<div class="filter_type">
					<div class="styled-select-filters">
							<select name="sort_price" id="sort_price">
								<option name="sortprice[]" value="" selected>Sort by Price</option>
								<option name="sortprice[]">Lowest price</option>
								<option name="sortprice[]">Highest price</option>
							</select>
						</div>
				</div>
				<br />
				<div class="filter_type">
					<div class="styled-select-filters">
							<select name="sort_area" id="sort_price">
								<option value="" selected>Sort by Area</option>
								<option value="area1">Area 1</option>
								<option value="area2">Area 2</option>
							</select>
						</div>
				</div>
				<div class="filter_type">
					<h6>Meal</h6>
					<ul>
						<li><label><input type="checkbox" name="meal[]" value="breakfast">BreakFast</label></li>
						<li><label><input type="checkbox" name="meal[]" value="lunch">Lunch</label></li>
						<li><label><input type="checkbox" name="meal[]" value="dinner">Dinner</label></li>
						<li><label><input type="checkbox" name="meal[]" value="midnight">Midnight</label></li>

					</ul>
				</div>
				<div class="filter_type">
					<h6>International Cusines</h6>
					<ul>
						<li><label><input type="checkbox" name="incusine[]" value="italian">Italian</label></li>
						<li><label><input type="checkbox" name="incusine[]" value="chinese">Chinese</label></li>
						<li><label><input type="checkbox" name="incusine[]" value="thai">Thai</label></li>
						<li><label><input type="checkbox" name="incusine[]" value="mexican">Mexican</label></li>
						<li><label><input type="checkbox" name="incusine[]" value="french">French</label></li>
					</ul>
				</div>
				<div class="filter_type">
					<h6>Indian Cusines</h6>
					<ul>
						<li><label><input type="checkbox" name="indcusine[]" value="punjabi">Punjabi</label></li>
						<li><label><input type="checkbox" name="indcusine[]" value="gujarathi">Gujarati</label></li>
						<li><label><input type="checkbox" name="indcusine[]" value="bengali">Bengali</label></li>
						<li><label><input type="checkbox" name="indcusine[]" value="tamilnadu">Tamil Nadu</label></li>
						<li><label><input type="checkbox" name="indcusine[]" value="rajasthani">Rajasthani</label></li>
						<li><label><input type="checkbox" name="indcusine[]" value="sindhi">Sindhi</label></li>
						<li><label><input type="checkbox" name="indcusine[]" value="andra">Andhra</label></li>

					</ul>
				</div>
				<div class="filter_type">
					<h6>Specials</h6>
					<ul>
						<li><label><input type="checkbox" name="spl[]" value="bir">Biryani</label></li>
						<li><label><input type="checkbox" name="spl[]" value="desserts">Desserts</label></li>
						<li><label><input type="checkbox" name="spl[]" value="juices">Juices</label></li>
						<li><label><input type="checkbox" name="spl[]" value="streetfood">Street Food</label></li>


					</ul>
				</div>
				<div class="filter_type">
					<h6>Facilities</h6>
					<ul>
						<li><label><input type="checkbox" name="facilities[]" value="pool">pool</label></li>
						<li><label><input type="checkbox" name="facilities[]" value="wifi">Wifi</label></li>
						<li><label><input type="checkbox" name="facilities[]" value="delivery">Home Delivery</label></li>
						<li><label><input type="checkbox" name="facilities[]" value="music">Live Music</label></li>
						<li><label><input type="checkbox" name="facilities[]" value="hookha">Hookha</label></li>
						<li><label><input type="checkbox" name="facilities[]" value="valetparking">Valet Parking</label></li>
						<li><label><input type="checkbox" name="facilities[]" value="alcohol">Alcohol</label></li>
						<li><label><input type="checkbox" name="facilities[]" value="lodging">Lodging</label></li>

					</ul>
				</div>
				<div class="filter_type">
					<h6>Price</h6>
					<ul>
						<li><label><input type="checkbox" checked name="price[]" value="50">From $10 to $50</label></li>
						<li><label><input type="checkbox" name="price[]" value="80">From $50 to $80</label></li>
						<li><label><input type="checkbox" name="price[]" value="100">From $80 to $100</label></li>
					</ul>
				</div>
                	<div class="filter_type">
					<h6>Star Category</h6>
					<ul>
						<li><label><input type="checkbox" name="starrating[]" value="5"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i>
						</span>(15)</label></li>
						<li><label><input type="checkbox" name="starrating[]" value="4"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i>
						</span>(45)</label></li>
						<li><label><input type="checkbox" name="starrating[]" value="3"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
						</span>(35)</label></li>
						<li><label><input type="checkbox" name="starrating[]" value="2"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
						</span>(25)</label></li>
						<li><label><input type="checkbox" name="starrating[]" value="1"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
						</span>(15)</label></li>
					</ul>
				</div>
				<div class="filter_type">
				<input type="submit" value="Filter"/>
				</div>

			</div><!--End collapse -->
		</div><!--End filters col-->
	</form>
		<div class="box_style_2">
			<i class="icon_set_1_icon-57"></i>
			<h4>Need <span>Help?</span></h4>
			<a href="tel://+919849697174" class="phone">+91 98496 97174</a>
			<small>Monday to Sunday<br>9am - 9pm</small>
		</div>
		</aside><!--End aside -->

		<div class="col-lg-9 col-md-8">

			<div id="tools">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="styled-select-filters">
							<select name="sort_price" id="sort_price">
								<option value="" selected>Sort by price</option>
								<option value="lower">Lowest price</option>
								<option value="higher">Highest price</option>
							</select>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="styled-select-filters">
							<select name="sort_rating" id="sort_rating">
								<option value="" selected>Sort by ranking</option>
								<option value="lower">Lowest ranking</option>
								<option value="higher">Highest ranking</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 hidden-xs text-right">
						<a href="#" class="bt_filters"><i class="icon-th"></i></a> <a href="all_hotels_list.html" class="bt_filters"><i class=" icon-list"></i></a>
					</div>
				</div>
			</div><!--End tools -->

			<div class="row">
				<br /><br /><br /><?php
include 'connection.php';
<<<<<<< HEAD
error_reporting(E_ALL);
$name=$_POST['hotelname'];
$cat=$_POST['category'];
$q="SELECT * FROM vendor_login LEFT JOIN hotel_data ON vendor_login.id=hotel_data.id LEFT JOIN v_hotel ON v_hotel.vhid=vendor_login.id WHERE vname LIKE '%$name%' AND v_hotel.meal LIKE '%$cat%'";
// echo $q;
=======
<<<<<<< HEAD
error_reporting(E_ALL);
$name=$_POST['hotelname'];
$cat=$_POST['category'];
$q="SELECT * FROM vendor_login LEFT JOIN hotel_data ON vendor_login.id=hotel_data.id LEFT JOIN v_hotel ON v_hotel.vhid=vendor_login.id WHERE vname LIKE '%$name%' AND v_hotel.meal LIKE '%$cat%'";
// echo $q;
=======
//error_reporting(0);
$name=$_POST['hotelname'];
$cat=$_POST['category'];
$q="SELECT * from vendor_login,hotel_data hd,v_hotel WHERE hd.id=(select DISTINCT id from hotel_data hd,v_hotel v where hd.name LIKE '%$name%' OR v.meal LIKE '%$cat%')";
>>>>>>> 82851e758c509d1b1cc150228451c995e3a4fb6c
>>>>>>> 6cd3086bb12fd1ce0ec5d4856125724623c4daea
$r=mysql_query($q);
$count=mysql_num_rows($r);
if($r){
	while($row1=mysql_fetch_array($r)){
		$vhid=$row1['vhid'];
		$name=$row1['name'];
		$rating=$row1['rating'];
<<<<<<< HEAD
		$price=$row1['price'];
    ?>
=======
<<<<<<< HEAD
		$price=$row1['price'];
    ?>
=======
		$price=$row1['price'];?>
>>>>>>> 82851e758c509d1b1cc150228451c995e3a4fb6c
>>>>>>> 6cd3086bb12fd1ce0ec5d4856125724623c4daea

								<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
							<div class="hotel_container">
								<div class="img_container">
									<a href="single_hotel.html">
									<img src="<?php echo $row1['logo']?>" width="800" height="533" class="img-responsive" alt="">
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
									</div><!-- end rating
									<div class="wishlist">
										<a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
									</div><!-- End wish list-->
								</div>
							</div><!-- End box tour -->
            </div><!-- End col-md-6 --><?php }}else{
              echo "<div class='col-md-6'>No Hotels Found</div>";
            }?>
							</div><!-- End col lg 9 -->
	</div><!-- End row -->
</div><!-- End container -->
<!--footer -->
<?php include 'footer.php'; ?>
<!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<!-- Specific scripts -->
<!-- Check and radio inputs -->
<script src="js/icheck.js"></script>
<script>
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>
 <!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/map_hotels.js"></script>
<script src="js/infobox.js"></script>

  </body>
</html>
