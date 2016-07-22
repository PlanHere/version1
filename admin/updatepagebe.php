<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update Page</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>

  </body>
</html>
<?php
error_reporting(0);
session_start();
require ('../connection.php');

$name = $_POST['name'];

$username = $_SESSION['username'];
$email = $_POST['email'];
$phno = $_POST['phone'];
$area = $_POST['area'];
$address = $_POST['address'];
$landmark = $_POST['landmark'];
$pincode = $_POST['pincode'];
$website = $_POST['website'];
$fb = $_POST['fbpage'];
$about = $_POST['about'];
$meal=$_POST['meal'];
$international=$_POST['intcus'];
$indian=$_POST['indcus'];
$specials=$_POST['spl'];
$facilities=$_POST['fac'];
if (isset($_POST['logo'])) {
	$file = $_FILES['logo']['tmp_name'];
	$logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
	$logo_name = addslashes($_FILES['logo']['name']);

	move_uploaded_file($_FILES["logo"]["tmp_name"],"../logos/"."$name".$_FILES["logo"]["name"]);
	$name.$_FILES['logo']['name'];
	$plocation = "../logos/"."$name".$_FILES["logo"]["name"];
$loq="update vendor_login set `logo`= '$plocation' where `username`= '$username'";
	$lool=mysql_query($loq);
}


$q1 = "update vendor_login set `vname`= '$name',`email`='$email',`phone`='$phno',`website`='$website',`fbpage`='$fb',`about`='$about' where `username`='$username'";
$r1=mysql_query($q1);


$q2="select * from vendor_login where username = '$username'";
			$r2=mysql_query($q2);
        	while($row=mysql_fetch_array($r2)){
        		$id=$row['id'];
        	}
$q3="update `v_address` set `city`='Hyderabad',`area`='$area',`address`='$address',`landmark`='$landmark',`pincode`='$pincode' where `vid`='$id'";

$r3=mysql_query($q3);
$hd="update `hotel_data` set `name`='$name',`rating`='4' where `id`='$id'";

$r5=mysql_query($hd);
$meal=implode(',',$_POST['meal']);
$intcus=implode(',',$_POST['intcus']);
$indcus=implode(',',$_POST['indcus']);
$spl=implode(',',$_POST['spl']);
$fac=implode(',',$_POST['fac']);
$q5="update `v_hotel` set `meal`='$meal',`internationalcus`='$intcus',`indiancus`='$indcus',`specials`='$spl',`facilities`='$fac' where `vid`='$id'";

$r6=mysql_query($q5);
if($r5 && $r6 && $r3 && $r1){
echo "<div class='alert alert-success'>
    <strong>Update Success!</strong>
  </div>";
header( "refresh:1;url=index.php" );}
else {
  echo "<div class='alert alert-danger'>
      <strong>Update Failed!</strong>
    </div>";
  header( "refresh:1;url=updatepage.php" );
}
//header("Location:./admin/index.php");
?>
