<!DOCTYPE html>
<html>
<body>
<?php
 	if(isset($_POST['email_submit'])){
 		$email = $_POST['mail'];
 		function vaildateEmail($in)
		{
			if (filter_var($in, FILTER_VALIDATE_EMAIL))
			{
				return true;
			}
			else
			{
				echo "<h3>Invalid Email Format. e.g. someone@example.com</h3>";
				return false;
			}
		}
		$ok = vaildateEmail($email);

		if($ok==true)
		{
			echo "<h3>Sucessfully sent a link. Check your email to reset.</h3><br/>";
		}
	} 
?>
<a href="signIn.php">Go back to Sign In option</a>
</body>
</html>