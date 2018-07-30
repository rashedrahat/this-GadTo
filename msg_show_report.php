<?php
session_start();

if ($_SESSION['loggedIn'] != 3)
{
    header("location: SignIn.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Msg | Report</title>
</head>
<body>
	<h2>
		<pre style="text-align: center;">
We have taken your report. Under processing...<br>
Keep in touch for next update.
		</pre>
	</h2>
	<div align="center">
		<a href="ProfileHome.php">Go back to Profile Home</a>
	</div>
</body>
</html>