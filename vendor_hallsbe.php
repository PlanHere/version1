<?php
error_reporting(0);
require ('connection.php');
if(!empty($_POST['username']) && !empty($_POST['emailid']) && !empty($_POST['password']) && !empty($_POST['phno']))
{

}
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

$q1 = "insert into vendor_login (`name`,`username`,`email`,`password`,`phone`,`website`,`fbpage`,`about`) values('$name','$username','$email','$password','$phno','$website','$fb','$about')";
$r1=mysql_query($q1) or die(mysql_error());

$q2="select * from vendor_login where username = '$username'";
			$r2=mysql_query($q2) or die(mysql_error()); 
        	while($row=mysql_fetch_array($r2)){
        		$id=$row['id'];
        	}
$q3="insert into v_address(`vid`) values('$id')";
$r3=mysql_query($q3);
$q4="UPDATE `v_address` SET `area`='$area',`address`='$address',`landmark`='$landmark',`pincode`='$pincode' where vid ='$id'";
$r4=mysql_query($q4) or die(mysql_error());

$tagsa=$_POST['tags'];

$q5="insert into v_halls(`vid`) values('$id')";
$r5=mysql_query($q5);

for($i=1;$i<=100;$i++){
$tags=$tagsa[$i];
		$q6 = "update v_halls set $tags='$tags' where vid ='$id'";
		$r6=mysql_query($q6);		
	
}

?>