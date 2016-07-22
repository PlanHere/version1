<?php
$connection=mysql_connect("localhost","root","") or die("mysql_error()");
mysql_select_db("plan_here",$connection) or die(mysql_error());
?>
