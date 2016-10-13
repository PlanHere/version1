<?php
include 'connection.php';
if(isset($_POST['otp']))
{
 $name=$_POST['otp'];

 $checkdata=" SELECT otp FROM otpdata WHERE otp=$_POST['otp'] ";

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
