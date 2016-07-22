<?php
require ('connection.php');
$username=$_POST['username'];
$password=$_POST['password'];
$q="select * from vendor_login where username='$username' and password='$password'";
$r=mysql_query($q);
$count=mysql_num_rows($r);

$q1="select * from user where username='$username' and password='$password'";
$r1=mysql_query($q1);
$count1=mysql_num_rows($r1);
if($count>0){
	while($row=mysql_fetch_array($r)){
		$vid=$row['vid'];
		session_start();
		$_SESSION['username']=$username;
	header("Location:./admin/index.php");
	}
}
else if($count1>0){
	//while($row=mysql_fetch_array($r)){
		//$vid=$row['vid'];
		//session_start();
		//$_SESSION['username']=$username;
	header("Location:./index.php");
	//}
}
else{
	header("Location:./login.php");
	
}
?>