<?php 
	$host_name='localhost';
	$db_user='root';
	$db_pass='';
	$db_name='testing';
	$conn=mysql_connect($host_name,$db_user,$db_pass) or die(mysql_error());  
	mysql_select_db($db_name,$conn) or mysql_error(); 
	date_default_timezone_set('Asia/Kolkata');
	$dt = date("Y-m-d H:i:s");
?>