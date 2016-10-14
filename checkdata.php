<?php
include 'connection.php';
if(isset($_GET['otp']))
{
 $name=$_GET['otp'];

 $checkdata="select otp FROM otpdata WHERE otp=$name";

 $query=mysql_query($checkdata);

 if(mysql_num_rows($query)>0)
 {
  echo "Verified Successful";
 }
 else
 {
  echo "Please check OTP";
 }
 exit();
}
?>
