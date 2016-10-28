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
<<<<<<< HEAD
=======

>>>>>>> 82851e758c509d1b1cc150228451c995e3a4fb6c
    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">

    <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">

    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
        <?php
        include('./head_fun.php');
<<<<<<< HEAD
        require('way2sms-api.php');
        $otp=intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );
        $msg="$otp is your One Time Password for Booking Confirmation @ PlanHere.in - Thanks & Regards<br>Team PlanHere.";
        sendWay2SMS ( '8121018090' , '8121018090' , $_POST['phone'] ,$msg);
=======
        include('way2sms-api.php');
        $otp=intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );
        $msg="$otp is your One Time Password for Booking Confirmation @ PlanHere.in - Thanks & Regards<br>Team PlanHere.";
        sendWay2SMS ( '9000504436' , 'vinod' , $_POST['telephone'] ,$msg);
>>>>>>> 82851e758c509d1b1cc150228451c995e3a4fb6c
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
<form class="form-control" action="Confirmation.php" method="post">


<div class="container margin_60">
	<div class="row">
		<div class="col-md-8">
			<div class="form_title">
				<h3><strong>1</strong>Your Details</h3>
			</div>
			<div class="step">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>First name</label>
							<input type="text" class="form-control" id="firstname_booking" name="firstname" value="<?=$_POST['first_name'];?>">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Last name</label>
							<input  type="text" class="form-control" id="lastname_booking" name="lastname" value="<?=$_POST['last_name'];?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Email</label>
							<input type="email"  id="email_booking" name="email" class="form-control" value="<?=$_POST['email'];?>">
						</div>
					</div>
          <div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Telephone</label>
<<<<<<< HEAD
							<input type="text"  id="telephone_booking" name="phone" class="form-control" value="<?=$_POST['phone'];?>">
=======
							<input type="text"  id="telephone_booking" name="telephone" class="form-control" value="<?=$_POST['phone'];?>">
>>>>>>> 82851e758c509d1b1cc150228451c995e3a4fb6c
						</div>
					</div>
				</div>

			</div><!--End step -->

			<div class="form_title">
				<h3><strong>2</strong>Booking Details</h3>
			</div>
			<div class="step">
				<div class="form-group">
					<label>Payee Name</label>
          <input type="hidden" name="date" value="<?=$_POST['date'];?>">
          <input type="hidden" name="time" value="<?=$_POST['time'];?>">
					<input type="text"  class="form-control" id="name_card_bookign" name="name_book">
				</div>
				<div class="row">
          <div class="col-md-6 col-sm-6">
              <div class="form-group">
                  <label>Adults</label>
                  <div class="numbers-row">
                      <input  type="text" max='2' id="adults_hotel" class="qty2 form-control required" name="adults" value="<?php echo $_POST['adults'];?>">
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-sm-6">
              <div class="form-group">
                  <label>Children</label>
                  <div class="numbers-row">
                      <input  type="text" max='2' id="children_hotels" class="qty2 form-control required" name="children" value="<?php echo $_POST['children'];?>">
                  </div>
              </div>
          </div>
				</div>
				<div class="row">

					<div class="col-md-6">
						<div class="form-group">
							<label>Security code</label>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
<<<<<<< HEAD
										<input type="text" id="otp" name="otp" class="form-control" placeholder="Enter OTP">
                    <button type="button" id="otp_v" name="validate" value="verify">Verify</button>
=======
										<input type="text" id="otp" name="otp" class="form-control" placeholder="Enter OTP" onkeyup="checkname();">
                    <div id="#name_status"></div>
>>>>>>> 82851e758c509d1b1cc150228451c995e3a4fb6c
									</div>
								</div>
							</div>
						</div>
					</div>
          <div class="col-md-6">
						<div class="form-group">
							<label>Amount</label>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
                    <?php
                    include 'connection.php';
                    $id=$_POST['id'];
                    if (mysql_query("SELECT otp FROM otpdata WHERE uid=$id")) {
                      mysql_query("update otpdata set otp=$otp where uid=$id");
                    }
                    else {
                      mysql_query("insert into `otpdata`(`uid`,`otp`) VALUES ($id,$otp)");
                    }
                        $q="select * from hotel_data x,vendor_login y where x.id=$id AND y.id=$id";
                        $r=mysql_query($q);
                        $row=mysql_fetch_array($r);
                        $price=$row['price'];
                        $hotel_mail=$row['email'];
                        $name1=$row['vname'];
                    ?>
                    <input type="hidden" name="id" value="<?=$id;?>">
                    <input type="hidden" name="hotel_mail" value="<?=$hotel_mail;?>">
										<input  type="text" name="amount" value="<?php echo $price;?>" class="form-control" readonly>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--End row -->
			</div><!--End step -->
			<div id="policy">

				<div class="form-group">
					<label><input type="checkbox" name="policy_terms" id="policy_terms">I accept terms and conditions and general policy.</label>
				</div>
<<<<<<< HEAD
				<input type="submit" id="conform" class="btn_1 green medium" disabled="disabled" name="submit" value="Book Now"/>
			</div>
		</div>
    <?php
    $_COOKIE['otp']=$otp;
    ?>
<script>
$(document).ready(function(){
  $('#otp_v').on('click',function(){
    var otp="<?=$otp;?>";
    alert(otp);
    alert($('#otp').val());
      if($('#otp').val()==otp){

        $('#otp_v').text("Verified");
        $('#conform').removeAttr('disabled');
      }
      else{
        alert("Incorrect OTP");
        location.reload();
      }
    });
  });

=======
				<input type="submit" class="btn_1 green medium" name="submit" value="Book Now"/>
			</div>
		</div>
<script>
$('input[type=submit]').click(function(e){
if($("#otp").val() != "<?php=$otp;?>")
{
alert("Verify your OTP");
return false;
}
});
function checkname()
{
  var otp=document.getElementById( "otp" ).value;
  if(otp)
  {
      $.ajax({
      type: 'post',
      url: 'checkdata.php',
      data: {otp},
      success: function (response) {
        $( '#name_status' ).html(response);
        if(response=="OTP Verified Successfully")
        {
          return true;
        }
        else
        {
          return false;
        }
      }
    });
  }
  else
  {
    $( '#name_status' ).html("");
    return false;
  }
}
>>>>>>> 82851e758c509d1b1cc150228451c995e3a4fb6c

</script>
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
