<?php
include 'connection.php';
error_reporting(0);
$meal=implode(',',$_GET['meal']);
$intcus=implode(',',$_GET['incusine']);
$indcus=implode(',',$_GET['indcusine']);
$spl=implode(',',$_GET['spl']);
$fac=implode(',',$_GET['facilities']);
if(empty($_GET['meal']) && empty($_GET['intcus']) && empty($_GET['indcus']) && empty($_GET['spl']) && empty($_GET['fac'])){
header("Location:hotel_grid.php");	
}
else{
$q="SELECT * FROM v_hotel WHERE meal LIKE '%$meal%' AND internationalcus LIKE '%$intcus%' AND indiancus LIKE '%$indcus%' and specials LIKE '%$spl%' AND facilities LIKE '%$fac%'";
$r=mysql_query($q);
$count=mysql_num_rows($r);
if($count>0){
	while($row=mysql_fetch_array($r)){
		$vid=$row['vid'];
		$q1="select * from hotel_data where id='$vid'";
		$r1=mysql_query($q1);
		if($r1){
			while ($row1=mysql_fetch_array($r1)) {
			$name=$row1['name'];
								$rating=$row1['rating'];
								$price=$row1['price'];?>
								<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
							<div class="hotel_container">
								<div class="img_container">
									<a href="single_hotel.html">
									<img src="img/hotel_1.jpg" width="800" height="533" class="img-responsive" alt="">
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
							</div><!-- End col-md-6 --><?php
			}
		}
	}
header("Location:hotel_grid_filter.php");
}
else {
	echo '<h3>No Results Found</h3>';
	header("Location:hotel_grid_filter.php");
} }?>
