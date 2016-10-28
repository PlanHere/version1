<?php
//error_reporting(0);
require ('connection.php');
//include 'image.php';
if(!empty($_POST['username']) && !empty($_POST['emailid']) && !empty($_POST['password']) && !empty($_POST['phno']))
{

}
$price=$_POST['price'];
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phno = $_POST['phno'];
$area = $_POST['area'];
$address = $_POST['address'];
$landmark = $_POST['landmark'];
$pincode = $_POST['pincode'];
$website = $_POST['website'];
$fb = $_POST['fb'];
$about = $_POST['about'];
if(isset($_REQUEST['submit']))
						{

							$file = $_FILES['logo']['tmp_name'];
							$logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
							$logo_name = addslashes($_FILES['logo']['name']);

							move_uploaded_file($_FILES["logo"]["tmp_name"],"logos/"."$name".$_FILES["logo"]["name"]);

							$plocation = "logos/"."$name".$_FILES["logo"]["name"];}
$q1 = "insert into vendor_login (`vname`,`username`,`email`,`password`,`phone`,`website`,`fbpage`,`about`,`logo`) values('$name','$username','$email','$password','$phno','$website','$fb','$about','$plocation')";
$r1=mysql_query($q1) or die(mysql_error());


$q2="select * from vendor_login where username = '$username'";
			$r2=mysql_query($q2) or die(mysql_error());
        	while($row=mysql_fetch_array($r2)){
        		$id=$row['id'];
        	}
$q3="INSERT INTO `v_address`(`vid`, `city`, `area`, `address`, `landmark`, `pincode`) VALUES ('$id','Hyderabad','$area','$address','$landmark','$pincode')";
$r3=mysql_query($q3);
$hd="INSERT INTO `hotel_data`( `name`, `rating`, `price`) VALUES ('$name','4','$price')";
$r5=mysql_query($hd);
$meal=implode(',',$_POST['meal']);
$intcus=implode(',',$_POST['intcus']);
$indcus=implode(',',$_POST['indcus']);
$spl=implode(',',$_POST['spl']);
$fac=implode(',',$_POST['fac']);
$q5="INSERT INTO `v_hotel`(`vid`,`meal`, `internationalcus`, `indiancus`, `specials`, `facilities`) VALUES ('$id','$meal','$intcus','$indcus','$spl','$fac')";
$r5=mysql_query($q5);
if($q5){
	$q6="select id from vendor_login where username = '$username'";
	$r6=mysql_query($q6);
	$row6=mysql_fetch_array($r6);
	if($r6){
		$id=$row6['id'];
		session_start();
		$_SESSION['username']=$username;
		$subject = "Thanks From Team PlanHere";
		$message = "Dear $name,\nThanks For Joining with PlanHere";
		$headers = "From : PlanHere <info@planhere.in>\r\n";
		$headers.="Relpy-to : PlanHere Support<support@planhere.in>";
		mail($email, $subject, $message,$headers);
		header("Location:./admin/index.php");
	//header("Location:single_hotel_working_booking.php?id=$id");
	}
}
?>
