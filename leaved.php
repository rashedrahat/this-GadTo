<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Leave Msg</title>
</head>
<body>
	<div align="center">
		<h1>Your request has been taken. After 24hours your account will be no longer anymore if it's permanently leaving! But if its temporary then you'll be able to use this system again :)</h1>
	<h2>Thank you.</h2>
	<h3><a href="signout.php">Exit</h3>
	</div>
</body>
</html>