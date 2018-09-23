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
	<title>Apply for leave</title>
</head>
<body>
	<?php
        include 'NA_Header.php';
    ?>
	<br><br><br><br>
	<div align="center" style="color: red;">
		<h2><i>Apply for leave</i></h2>
		<table style="width: 400px; height: 200px; border: 1px;" align="center">
		<tr align="center">
			<td>
				Are you sure that you want to leave?<br><input type="radio" name="leave">Yes (temporary)<input type="radio" name="leave">Yes (permanently)<br><br>
				<textarea rows="7" cols="66">Write your reason of leaving.</textarea>
			</td>
		</tr>
		<tr align="center">
			<td>
				<input type="button" style="height:20px;width:60px" value="Submit" onclick="window.location.href='leaved.php'" />
			</td>
		</tr>
		<tr>
			<small>Note: If you click on submit button by chossing "Yes (permanently)" then you will not be able anymore to use this system. So, think again.</small>
		</tr>
	</table>
	</div>
	<div align="center">
		<a href="adminPortal.php">Close?</a>
	</div>
</body>
</html>