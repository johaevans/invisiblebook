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
	// use the mail() function to send an email.
	if($_POST['message'] == "" || $_POST['message'] == "Type your secret here") {
		echo "<span class=\"profile-data\">it seems you forgot to share your secret.</span><br /><br /><a href=\"/invisiblebook/share_secret.html\">&lt;&lt; go back </a>";
	}
	else {
		mail("invisiblebook@gmail.com", $_POST['subject'], $_POST['message'],
			"From: {$_POST['email']}\r\n" .
			"Reply-To: {$_POST['email']}\r\n" .
			"X-Mailer: PHP/" . phpversion());
		echo "Message:<br />{$_POST['message']}<br /><br />";
		echo "<span class=\"profile-data\">Your secret is on its way!.</span>";
		
		//also stash as a file locally, used for backup and for counting secrets
		$datestamp = date("Ymd-His");
		$stashfile = tempnam("./secret_stash", "s_".$datestamp."_");
		$fd = fopen($stashfile, "wb", 0);
		if($fd) {
			fputs($fd, $_POST['message']);
			fclose($fd);
			chmod($stashfile, 0666);
		}
	}
?>
</div>
<script language="JavaScript" type="text/JavaScript">
<!--
  opener.document.location.reload();
//-->
</script>
<?php
include '../includes/statcode.php';
?>

</body>
</html>
