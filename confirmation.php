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
    <title>Booking Confirmation | Plan Here</title>

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
        $id=$_POST['id'];
        include 'connection.php';
        $q="select * from hotel_data where id=$id";
        $q2="select * from vendor_login where id=$id";
        $r=mysql_query($q);
        $r2=mysql_query($q2);
        $row=mysql_fetch_array($r);
        $row1=mysql_fetch_array($r2);
        $name=$row['name'];
        $price=$row['price'];
        $phone=$row1['phone'];
    ?>
    <!-- End Header -->
    <?php
    $mail = $_POST['email'];

    $to = $_POST['hotel_mail'];	/*YOUR EMAIL HERE*/
    $subject = "Request From PlanHere";
    $headers = "From: PlanHere <noreply@planhere.in>";
    $message = "BOOKING for HOTEL $name\n";
    $message .= "\nDate: " . $_POST['date'];
    $message .= "\nTime: " . $_POST['time'];
    $message .= "\nAdults: " . $_POST['adults'];
    $message .= "\nChildren: " . $_POST['children'];
    $message .= "\nName: " . $_POST['firstname'];
    $message .= "\nLast name: " . $_POST['lastname'];
    $message .= "\nEmail: " . $_POST['email'];
    $message .= "\nTelephone: " . $_POST['phone'];

    //Receive Variable
    $sentOk = mail($to,$subject,$message,$headers);

    //Confirmation page
    $user = "$mail";
    $usersubject = "Thank You - Booking summary from PlanHere";
    $userheaders = "From: info@planhere.in\n";
    //Confirmation page WITH  SUMMARY
    $usermessage = "Thank you for your time, request successfully sent!.\nWe will contact you shortly.\nThanks\nTeam PlanHere";
    mail($user,$usersubject,$usermessage,$userheaders);
    include('way2sms-api.php');
    sendWay2SMS ( '8121018090' , '8121018090' , $_POST['phone'] ,$usermessage);
    sleep(1);

    ?>
    <!-- END SEND MAIL SCRIPT -->

    <section id="hero_2">
	<div class="intro_title animated fadeInDown">
           <h1>Place your order</h1>
            <div class="bs-wizard">

                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Your cart</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="./cart.php" class="bs-wizard-dot"></a>
                </div>

                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="./payment.php" class="bs-wizard-dot"></a>
                </div>

              <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>

		</div>  <!-- End bs-wizard -->
    </div>   <!-- End intro-title -->
</section><!-- End Section hero_2 -->

    <div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li>Booking Confirmation</li>
                    </ul>
        </div>
    </div><!-- End position -->

    <div class="container margin_60">
	<div class="row">
		<div class="col-md-8">

			<div class="form_title">
				<h3><strong><i class="icon-ok"></i></strong>Thank you!</h3>
			</div>
			<div class="step">

					<h1>Your Order is placed Succesfully!!!</h1><br><h4>We'll let you know the Status through mail and mobile.</h4>

			</div><!--End step -->

			<div class="form_title">
				<h3><strong><i class="icon-tag-1"></i></strong>Booking summary</h3>
			</div>
			<div class="step">
				<table class="table confirm">
				<thead>
				<tr>
					<th colspan="2">
						Item 1
					</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>
            <?php
             echo $message="Mr/Mrs ".$_POST['firstname'].$_POST['lastname']." is requested for a table for ". $_POST['adults']." + ".$_POST['children']." Seats on ".$_POST['date']." at ".$_POST['time']." open your account and accept if available";
             sendWay2SMS ( '8121018090' , '8121018090' , $phone ,$message);
            ?>
						<strong>Hotel Name</strong>
					</td>
					<td>
						<strong><?=$name;?>&nbsp;(</strong> <?php echo $_POST['adults']." Adults &  ".$_POST['children']." Children )"; ?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Date</strong>
					</td>
					<td>
						<?=$_POST['date'];?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Time</strong>
					</td>
					<td>
						<?=$_POST['time'];?>
					</td>
				</tr
        <tr>
					<td>
						<strong>Amount</strong>
					</td>
					<td>
						<?=$price;?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Payment By</strong>
					</td>
					<td>
						<?=$_POST['name_book'];?>
					</td>
				</tr>
				</tbody>
				</table>

			</div><!--End step -->
		</div><!--End col-md-8 -->

		<aside class="col-md-4">
		<div class="box_style_1">
			<h3 class="inner">Thank you!</h3>
			<p>
			We will process your order and get back to you soon,Please be patient<br>We'll inform you the status through mail and registred mobile number.
      <?php

        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $custname=$fname.$lname;
        $date=$_POST['date'];
        $time=$_POST['time'];
        $nop=$_POST['adults']."+".$_POST['children'];
        $booking="PH".rand(100,1000);
        if(mysql_query("select * from bookings where uid=$id AND hid=$id")){
          echo "<h1>Only one Booking pre day per hotel is allowed</h1>.";
          header( "refresh:5;url=index.php" );
        }
        else{
          $q12="INSERT INTO `bookings`(`uid`, `hid`, `username`,`date`, `no_of_presons`, `booking_id`, `status`) VALUES ($id,$id,'$custname','$date','$nop','$booking',0)";
          mysql_query($q12);
          echo '<script type="text/javascript">alert("Booking Successful your booking id is '.$booking.'")';
          header( "refresh:5;url=index.php" );
        }

      ?>
			</p>
			<hr>
			<a class="btn_full_outline" href="invoice.php" target="_blank" disabled>Waiting for Confirmation....</a>
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

<div id="toTop"></div>
<!-- Jquery -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<script src="js/icheck.js"></script>
<script>
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>





  </body>
</html>
