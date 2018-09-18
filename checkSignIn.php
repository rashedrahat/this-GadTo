<?php

if(isset($_POST['user_name'])&& isset($_POST['pass']))
{
    $user_name		=$_POST['user_name'];
	$pass 			=$_POST['pass'];

	if(empty($user_name))
	{
		header("Location: SignIn.php?reteu=*empty username");
	}

	elseif(empty($pass))
	{
		header("Location: SignIn.php?retep=*empty password");
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
		
		$sql 		= "select * from user_info where user_name='$user_name' and pass='$pass'";
		$result		= mysqli_query($conn, $sql);
		$row 		= mysqli_fetch_assoc($result);

		$status 	= $row['status'];
		$u_type_name= $row['u_type_name'];

		if ($user_name == $_POST['user_name'] && $pass == $_POST['pass']) {
				$inTwoMonths = 60 * 60 * 24 * 60 + time();
				setcookie('username', $user_name, $inTwoMonths);
				setcookie('password', $password, $inTwoMonths);
				setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);
				setcookie('loggedintime', date("G:i - m/d/y"), $inTwoMonths);

		}

	
		if($u_type_name=='nu' && $status=='active'){
			session_start();
			$_SESSION['user_name'] = $_POST['user_name'];
			$_SESSION['pass'] = $_POST['pass'];
			header("location: profileHome.php");
		}
		elseif($u_type_name=='na' && $status=='active'){
			session_start();
			$_SESSION['user_name'] = $_POST['user_name'];
			$_SESSION['pass'] = $_POST['pass'];
			header("location: adminPortal.php");
		}
		elseif ($u_type_name=='sa' && $status=='active') {
			session_start();
			$_SESSION['user_name'] = $_POST['user_name'];
			$_SESSION['pass'] = $_POST['pass'];
			header("location: superAdminPortal.php");
		}
		elseif ($u_type_name=='nu' && $status=='pending') {
			header("location: SignIn.php?retnup=*You are not an active user!!!");
		}
		elseif ($u_type_name=='nu' && $status=='blocked') {
			header("location: SignIn.php?retnub=*You are blocked!!!");
		}

		elseif ($u_type_name=='na' && $status=='blocked') {
			header("location: SignIn.php?retnab=*You are blocked!!!");
		}
		else{
			header("Location: SignIn.php?ret=*Wrong UserName Or Password");
		}
	}
		mysqli_close($conn);
}
if(isset($_GET['signout']))
{
	session_unregister('user_name');
}
?>