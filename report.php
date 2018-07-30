<?php
session_start();

if ($_SESSION['loggedIn'] != 3)
{
    header("location: SignIn.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<br>
<br><br><br><br><br><br><br><br>
<div align="center">
	<h3>Report About Your Ad:</h3>
	<textarea rows="6" cols="50">
Write here what's problem about your Ad?
	</textarea>
</div>
<div align="center"><br>
		<a href="msg_show_report.php">Submit</a> OR <a href="ad_info.php">Cancel</a>
</div>

</body>
</html>
