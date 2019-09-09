<?php
    if(isset($_POST['abc']))
	{ 
	// Authorisation details.
	$username = "**TEXT LOCAL UNAME";
	$hash = "***********************";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL";  // This is who the message appears to be from.
	$numbers = $_POST['num']; // A single number or a comma-seperated list of numbers
	$message = $_POST['mess'];
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	echo($result);
	}
?>
<html>
<head>
<meta charset="utf-8">
<title>WEB MESSENGER</title>
</head>
<body  bgcolor = "#FFFFFF">
<h1 style = "background-color:#333333; color:#FFFFFF; padding:3px;" align = "center"> WEB MESSENGER</h1>
<div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
          <div style = "margin:30px">
<form method="post" action="ank.php">
<table align="center">
<!--<tr>
<td>username:</td>
<td><input type="text" name="username" placeholder="enter your username"></td>
</tr>
<tr>
<td>hash:</td>
<td><input type="text" name="hash" placeholder="enter your hash key"></td>
</tr>
<tr>
<td>sender:</td>
<td><input type="text" name="sender" placeholder="enter your name"></td>
</tr>-->
<tr>
<td>Mob. no.:</td>
<td><input type="text" name="num" placeholder="enter receiver number"></td>
</tr>
<tr>
<td>Message:</td>
<td><textarea name="mess" placeholder="enter your message"></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="abc" value="send"></td>
</tr>
</table>
</form>
</body>
</html>