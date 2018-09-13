<?php

if(isset($_POST['user_name'])&& isset($_POST['pass']))
{
    $user_name		=$_POST['user_name'];
	$pass 		=$_POST['pass'];

	if(empty($user_name))
	{
		header("Location: ../SignIn.php?ret=erroremptyusername");
	}

	elseif(empty($pass))
	{
		header("Location: ../SignIn.php?ret=erroremptypassword");
	}

	else
	{
		$servername ="localhost";
		$username 	="root";
		$password 	="";
		$dbname 	="gadto";

		$conn 		= mysqli_connect($servername, $username, $password, $dbname);

		if(!$conn){
			die("Connection Error!".mysqli_connect_error());
		}

		$sql 		= "select * from user_info where user_name='$user_name' and pass='$pass' and status='active'";
		$result		= mysqli_query($conn, $sql);
		$row 		= mysqli_fetch_assoc($result);
		$u_type_name= $row['u_type_name'];

		if ($user_name == $_POST['user_name'] && $pass == $_POST['pass']) {
				$inTwoMonths = 60 * 60 * 24 * 60 + time();
				setcookie('username', $user_name, $inTwoMonths);
				setcookie('password', $password, $inTwoMonths);
				setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);
				setcookie('loggedintime', date("G:i - m/d/y"), $inTwoMonths);

		}


		if($u_type_name=='nu'){
			session_start();
			$_SESSION['user_name'] = $_POST['user_name'];
			$_SESSION['pass'] = $_POST['pass'];
      $gadget_id= $_POST['destination'];

    header("Location: ../page4.php?gadget_id=$gadget_id");
		}
		else{
			header("Location: ../SignIn.php?ret=wrongUserNameOrPassword");
		}
	}
		mysqli_close($conn);
}
?>
