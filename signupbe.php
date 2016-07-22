<?php 
require ('connection.php');
if(!empty($_POST['username']) && !empty($_POST['emailid']) && !empty($_POST['password']) && !empty($_POST['phno']))
{

}
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phno = $_POST['phno'];
$q = "insert into user (`name`,`username`,`email`,`password`,`phone`) values('$name','$username','$email','$password','$phno')";
$r=mysql_query($q) or die(mysql_error());
if($r){
	echo"inserted";
}

?>