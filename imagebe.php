<?php

require 'config/connections.php';

	 if(!empty($_POST)){
 	$b=0;
	foreach($_POST['boxes'] as $selected) {
				$b++;
				$colorList[$b]=$selected;
			}
		
	 }
$name=$_FILES['file']['name'];
$size=$_FILES['file']['size'];
$type=$_FILES['file']['type'];
$extension= strtolower(substr($name, strpos($name, '.') +1));

$max_size=1024*1024*1024;
//echo $size;
//echo '<br>'.$max_size;
$temp_name=$_FILES['file']['tmp_name']; 
if(isset($name) && !empty($name)){
	
	$location='pic/';
	$rand=rand(0000000000, 9999999999);
	$rand1=rand(0000000000, 9999999999);
	$newname=$rand.'vc'.$rand1;
	
	
	$destination='pic/';
	
	if(($extension=='jpg'||$extension=='jpeg') && ($type=='image/jpg' || $type=='image/jpeg') ){
		if ($_FILES["file"]["error"] > 0)
{
// if there is error in file uploading 
echo "Return Code: " . $_FILES["file"]["error"] . "<br />";

}
else
{
if (file_exists("pic/" . $_FILES["file"]["name"]))
{
echo $_FILES["file"]["name"] . " already exists. ";
}
else
{  
if(move_uploaded_file($_FILES["file"]["tmp_name"],"pic/" . $_FILES["file"]["name"]))
{
// If file has uploaded successfully, store its name in data base
rename('pic/'.$name, 'pic/'.$newname.'.'.$extension);
$new_name=$newname.'.'.$extension;

$yos=$_POST['yos'];
 $name=$_POST['name'];
 $branch=$_POST['branch'];
 $org_details=$_POST['org_details'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $other_deatails=$_POST['other_details'];
 
$q2="select * from feedback where email='$email'";
$r2=mysql_query($q2) or die(mysql_error());
$count=mysql_num_rows($r2);
if($count==0){
	 	$q="insert into feedback (yos,name,branch,email,phone,other_details,org_details,img) values ('$yos','$name','$branch','$email','$phone','$other_deatails','$org_details','$new_name')";;
		$r=mysql_query($q) or die(mysql_error());
	if($r){
		$i=1;
			while($i<=$b){
				$a=$colorList[$i];
				$q1="insert into suggestions (email,suggestion,table) values ('$email','$a','alumni')";
				$r1=mysql_query($q1) or die(mysql_error());
				if($r1){
					$i++;
				}
			}
			header("Location:success.php");
	}
}else{
	echo '<h1 align="center"> This Email ('.$email.') Already Registered</h1> ';
}


}
}


}
		}else{
			echo "File Should Be jpg or jpeg";
		}
		
	}else{
		echo "size is large";
	}

?>