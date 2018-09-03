<?php

$servername = "localhost";
$username 	= "root";
$password 	= "";
$dbname	 	= "gadto";

$conn 		= mysqli_connect($servername, $username, $password, $dbname);
$sql_db 	= "select * from user_info";
$result 	= mysqli_query($conn, $sql_db);

if (isset($_POST['user_name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['phone']) && isset($_POST['gender']))
{
	$user_name 	= $_POST['user_name'];
	$email 		= $_POST['email'];
	$pass 		= $_POST['pass'];
	$first_name = $_POST['first_name'];
	$last_name 	= $_POST['last_name'];
	$phone 		= $_POST['phone'];
	$gender 	= $_POST['gender'];

	while ($row = mysqli_fetch_assoc($result))
	{
		$GLOBALS['user_name_db'] = $row['user_name'];
		$GLOBALS['email_db'] = $row['email'];
		if ($user_name == $user_name_db)
		{
			$flag = 1;
			break;
		}
		elseif ($email == $email_db)
		{
			$flag = 2;
			break;
		}
	}

	if ($flag == 1)
	{
		header("Location: SignUp.php?retu=*Username already exists");
	}
	elseif ($flag == 2)
	{
		header("Location: SignUp.php?rete=*Email already exists");
	}
	else
	{
		$sql = "insert into user_info values ('$user_name','$email','$pass','$first_name','$last_name','$phone','$gender','nu','pending')";
		if (mysqli_query($conn, $sql))
		{
			header("Location: SignIn.php");
		}
		else
		{
			header("Location: SignUp.php");
		}
	}
}
?>