<?php
	ob_start();
	session_start();
	include("connection/connect.php");
	if(isset($_POST['contact']))
	{
		$name = mysql_real_escape_string($_POST['name']);
		$phone = mysql_real_escape_string($_POST['phone']);
		$email = mysql_real_escape_string($_POST['email']);
		$description = mysql_real_escape_string($_POST['message']);
		$status = '1';
		
		$enquiry = mysql_query("insert into fp_contact set name = '".$name."', email = '".$email."', phone = '".$phone."', message = '".$description."', status = '".$status."', post_date = '".$dt."' "); 
		
		$_SESSION['success'] = 'Thankyou for contacting.'; 
		header('Location:contact.php'); exit;
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="" name="enquiry">
<strong>Name : </strong><input type="text" name="name"><br>
<strong>Gender : </strong>
<p>
  <label>
    <input type="radio" name="RadioGroup1" value="male" id="RadioGroup1_0">
    Male</label>
  <br>
  <label>
    <input type="radio" name="RadioGroup1" value="female" id="RadioGroup1_1">
    Female</label>
  <br>
  <label>
    <input type="radio" name="RadioGroup1" value="other" id="RadioGroup1_2">
    Other</label>
  <br>
</p>
<strong>Email :</strong>
<input type="text" name="email"><br>
<strong>Address :</strong> <textarea name="address" rows="10"></textarea><br>
<strong>Mobile : </strong><input type="text" name="mobile"><br>

<input name="submit" type="button" id="submit" value="submit">

</form>
</body>
</html>