<?php
require 'connection.php';
if(!empty($_POST['name']) && !empty($_POST['count']) )
{

}
$name = $_POST('name');
$count = $_POST('count');
$guest = $_post('guest');
$q1 = "insert into  (`name`,`count`,`guest`) values('$name','$count','$guest')";
$r1=mysql_query($q1) or die(mysql_error());

 


?>