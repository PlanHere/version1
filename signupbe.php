<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Singup || PlanHere - Our Plan Your Joy</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
	</head>
	<body>

	</body>
</html>
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
$r=mysql_query($q);
if($r){
?>
<center><div class="card card-inverse card-success text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Signup Successful - Thanks For Being Part Of PlanHere Family</p>
      <footer>- Team <cite title="Source Title">PlanHere</cite></footer>
    </blockquote>
  </div>
</div><?php
session_start();
header( "refresh:5;url=index.php" );
$_SESSION['uname']=$username;
$subject = "Thanks From Team PlanHere";
$message = "Dear $name,\nThanks For Registering with PlanHere";
$headers = "From : PlanHere <info@planhere.in>\r\n";
$headers.="Relpy-to : PlanHere Support<support@planhere.in>";
mail($email, $subject, $message,$headers);
}
else{
?>
<div class="card card-inverse card-danger text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Sorry For Inconvenience, Signup Failed Please Try Again</p>
      <footer>- Team<cite title="Source Title">PlanHere</cite></footer>
    </blockquote>
  </div>
</div></center>
<?php
header( "refresh:5;url=index.php" );
}
?>
