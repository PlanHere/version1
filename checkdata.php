<?php
include 'connection.php';
<<<<<<< HEAD
if(isset($_GET['otp']))
=======
<<<<<<< HEAD
if(isset($_GET['otp']))
{
 $name=$_GET['otp'];

 $checkdata="select otp FROM otpdata WHERE otp=$name";
=======
if(isset($_POST['otp']))
>>>>>>> 6cd3086bb12fd1ce0ec5d4856125724623c4daea
{
 $name=$_GET['otp'];

<<<<<<< HEAD
 $checkdata="select otp FROM otpdata WHERE otp=$name";
=======
 $checkdata=" SELECT otp FROM otpdata WHERE otp=$_POST['otp'] ";
>>>>>>> 82851e758c509d1b1cc150228451c995e3a4fb6c
>>>>>>> 6cd3086bb12fd1ce0ec5d4856125724623c4daea

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
