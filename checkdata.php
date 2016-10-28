<?php
include 'connection.php';
<<<<<<< HEAD
if(isset($_GET['otp']))
{
 $name=$_GET['otp'];

 $checkdata="select otp FROM otpdata WHERE otp=$name";
=======
if(isset($_POST['otp']))
{
 $name=$_POST['otp'];

 $checkdata=" SELECT otp FROM otpdata WHERE otp=$_POST['otp'] ";
>>>>>>> 82851e758c509d1b1cc150228451c995e3a4fb6c

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
