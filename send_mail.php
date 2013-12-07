<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>send secret</title>
<link href="/styles/invisible_book.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="secret">
<?php
	// Echo the variables to test our script.
	echo 
	//E-Mail:{$_POST['email']}<br /> commented out cuz there is no email
	//Subject:{$_POST['subject']}<br /> commented out cuz there is no subject
	"Message:<br />{$_POST['message']}<br /><br />";
	
	// use the mail() function to send an email.
	if($_POST['message'] != "" && $_POST['message'] != "Type your secret here")
	mail("invisiblebook@gmail.com", $_POST['subject'], $_POST['message'],
	"From: {$_POST['email']}\r\n" .
	"Reply-To: {$_POST['email']}\r\n" .
	"X-Mailer: PHP/" . phpversion());
?>
<span class="profile-data">Your secret is on its way!.</span></div>


</body>
</html>
