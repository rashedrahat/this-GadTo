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
	<title>Edit Ad Details</title>
</head>
<body>
	<div><br/><br/><br/><br/><br/><br/><br/><br/>
		<h2 align="center">Edit Your Ad Details</h2><br/>
		<table align="center" border="none" height="100" width="550">
		<tr>
			<th>Title</th>
			<th>Current</th>
			<th>New</th>
		</tr>
		<tr align="center">
			<td colspan="1"><b>Duration</b></td>
			<td colspan="1">1 week</td>
			<td colspan="1"><select>
	                            <option>1 week</option>
	                            <option>1 month</option>
	                            <option>2 months</option>
                        	</select>
            </td>
		</tr>
		<tr align="center">
			<td colspan="1"><b>Intensity</b></td>
			<td colspan="1">High</td>
			<td>
                        <input type="radio" name="level" />High
                        <input type="radio" name="level" />Avg
                        <input type="radio" name="level" />low
                    </td>
		</tr>
		<tr align="center">
			<td colspan="1"><b>Showing Area</b></td>
			<td colspan="1">More Visual</td>
			<td colspan="1"><input type="radio" name="visual" />MoreVisual
                        <input type="radio" name="visual" />LessVisual</td>
		</tr>
		<tr align="center">
			<td colspan="1"><b>Ad File</b></td>
			<td colspan="1"><img src="ad.jpg" alt="Ad File" height="80" width="50"></td>
			<td colspan="1"><input type="file" name="file" /></td>
		</tr>
		<tr align="center">
			<td colspan="1"><b>Ad Link</b></td>
			<td colspan="1"><a href="googleplaystore.com/ad">googleplaystore.com/ad</a></td>
			<td colspan="1"><input type="submit" name="addlink" value="Add Link" /></td>
		</tr>
	</table>
	</div>
	<br/>
	<br/>
	<div align="center">
		<a href="upgrade_posted_ad.php">Submit</a> OR <a href="ad_info.php">Cancel</a>
	</div>
</body>
</html>