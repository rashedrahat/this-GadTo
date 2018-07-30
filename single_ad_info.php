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
	<title>Your Ad Info</title>
</head>
<body>
	<div><br/><br/><br/><br/><br/><br/><br/><br/>
		<h2 align="center">Your Ad Id: A172</h2>
		<table align="center" border="none" height="100" width="550">
		<tr align="center">
			<td colspan="1"><b>Duration</b></td>
			<td colspan="2">10-JUL-2018-17-JUL-2018</td>
		</tr>
		<tr align="center">
			<td colspan="1"><b>Intensity</b></td>
			<td colspan="2">High</td>
		</tr>
		<tr align="center">
			<td colspan="1"><b>Showing Area</b></td>
			<td colspan="2">More Visual</td>
		</tr>
		<tr align="center">
			<td colspan="1"><b>Ad File</b></td>
			<td colspan="2"><img src="ad.jpg" alt="Ad File" height="80" width="50"></td>
		</tr>
		<tr align="center">
			<td colspan="1"><b>Ad Link</b></td>
			<td colspan="2"><a href="googleplaystore.com/ad">googleplaystore.com/ad</a></td>
		</tr>
		<tr align="center">
			<td colspan="1"><b>Cost</b></td>
			<td colspan="2">1000 BDT</td>
		</tr>
	</table>
	</div>
	<br/>
	<br/>
	<div align="center">
		<a href="ProfileHome.php">Go back to Profile Home</a>
	</div>
</body>
</html>