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
    <title>PlanHere Custome Editor</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/jquery.switch.css" rel="stylesheet">

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

<section id="hero_2">
	<div class="intro_title animated fadeInDown">
           <h1>Custom Table</h1>
              <!-- End bs-wizard -->
    </div>   <!-- End intro-title -->
</section><!-- End Section hero_2 -->

    <div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li>Custom table</li>
                    </ul>
        </div>
    </div><!-- End position -->

    <div class="container margin_60">
    <div class="row">
    <div class="col-md-8">
    	 <form action="custombe.php" method="post" >


                                <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Name </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="name" class="form-control required" required placeholder="Name">
                                            </div>
                                       </div>
                                       <br /><br /> <br />
                                <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Number of persons </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="name" class="form-control required" required replaceholder="Number of guests">
                                            </div>
                                        </div>
                                        <br /><br />
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Name of the guest </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="name" class="form-control required" placeholder="If one,you can mention">
                                            </div>
                                        </div>


                            </form>
            <table class="table table-striped options_cart">
            <thead>
            <tr>
                <th colspan="3">
                    Add options / Services
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="width:10%">
                    <i class="icon_set_1_icon-16"></i>
                </td>
                <td style="width:60%">
                   Special service
                </td>
                <td style="width:35%">
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_1" id="option_1" checked >
                    <span>
                    <span value="no">No</span>
                    <span value="yes">Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-26"></i>
                </td>
                <td>
                    Your favourite music played
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_2" id="option_2" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-71"></i>
                </td>
                <td>
                    Cake
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_3" id="option_3" value="" checked>
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-15"></i>
                </td>
                <td>
                    Pre ordered menu
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_4" id="option_4" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-59"></i>
                </td>
                <td>
                    Cabin
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_5" id="option_5" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-58"></i>
                </td>
                <td>
                    Couple table
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_6" id="option_6" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-40"></i>
                </td>
                <td>
                    Decourated table
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_7" id="option_7" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            </tbody>
            </table>
            <form >


                                <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Any more Surprise mention here </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control required" name="streetaddress" rows="3" placeholder="provide what features you want"></textarea>
                                            </div>
                                       </div>
                                      </form>

    </div><!-- End col-md-8 -->

    <aside class="col-md-4">
    <div class="box_style_1">
        <h3 class="inner">- Summary -</h3>
        <table class="table table_summary">
        <tbody>
        <tr>
            <td>
                Hotel
            </td>
            <td class="text-right">
                2
            </td>
        </tr>
        <tr>
            <td>
                Date
            </td>
            <td class="text-right">
                0
            </td>
        </tr>
        <tr>
            <td>
                Time
            </td>
            <td class="text-right">
                $34
            </td>
        </tr>

        <tr class="total">
            <td>
                Total cost
            </td>
            <td class="text-right">
                $154
            </td>
        </tr>
        </tbody>
        </table>
        <a class="btn_full" href="payment.html">Check out</a>
        <a class="btn_full_outline" href="#"><i class="icon-right"></i> Edit</a>
    </div>
    <div class="box_style_4">
        <i class="icon_set_1_icon-57"></i>
        <h4>Need <span>Help?</span></h4>
        <a href="tel://004542344599" class="phone">+45 423 445 99</a>
        <small>Monday to Friday 9.00am - 7.30pm</small>
    </div>
    </aside><!-- End aside -->

</div><!--End row -->
</div><!--End container -->
<!--footer -->
<?php include 'footer.php'; ?>
<!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Jquery -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>


<script>
//Incrementer
$(function () {
	"use strict";
    $(".numbers-row").append('<div class="inc button_inc">+</div><div class="dec button_inc">-</div>');
    $(".button_inc").on("click", function () {

        var $button = $(this);
        var oldValue = $button.parent().find("input").val();

        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
    });
});
 </script>





  </body>
</html>
