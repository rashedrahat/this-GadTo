<?php

$servername = "localhost";
$username 	= "root";
$password 	= "";
$dbname	 	= "gadto";

$conn 		= mysqli_connect($servername, $username, $password, $dbname);
$sql_db 	= "select * from user_info";
$result 	= mysqli_query($conn, $sql_db);

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['mobileNo']))
{
	$user_name 	= $_POST['username'];
	$email 		= $_POST['email'];
	$pass 		= $_POST['password'];
	$first_name = $_POST['fname'];
	$last_name 	= $_POST['lname'];
	$phone 		= $_POST['phone'];

	while ($row = mysqli_fetch_assoc($result))
	{
		$GLOBALS['user_name_db'] = $row['username'];
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
		header("Location: createAdmin.php?retu=*Username already exists");
	}
	elseif ($flag == 2)
	{
		header("Location: createAdmin.php?rete=*Email already exists");
	}
	else
	{
		$sql = "insert into user_info values ('$user_name','$email','$pass','$first_name','$last_name','$phone','$gender','na','active')";
		if (mysqli_query($conn, $sql))
		{
			header("Location: createdAdmin.php");
		}
		else
		{
			header("Location: createAdmin.php");
		}
	}
}
?>