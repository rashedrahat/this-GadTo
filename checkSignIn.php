<?php

if(isset($_POST['uname'])&& isset($_POST['pass']))
{
    $uname		=$_POST['uname'];
	$pass 		=$_POST['pass'];

	if(empty($uname))
	{
		header("Location: SignIn.php?ret=erroremptyusername");
	}

	elseif(empty($pass))
	{
		header("Location: SignIn.php?ret=erroremptypassword");
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
		
		$sql 		= "select * from user where uname='$uname' and pass='$pass'";
		$result		= mysqli_query($conn, $sql);
		$row 		= mysqli_fetch_assoc($result);
		$type 		= $row['type'];

		if ($uname == $_POST['uname'] && $pass == $_POST['pass']) {
				$inTwoMonths = 60 * 60 * 24 * 60 + time();
				setcookie('username', $uname, $inTwoMonths, "/");
				setcookie('password', $pass, $inTwoMonths, "/");
				setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths, "/");
				setcookie('loggedintime', date("G:i - m/d/y"), $inTwoMonths, "/");

		}

	
		if($type=='user'){
			session_start();
			$_SESSION['uname'] = $_POST['uname'];
			$_SESSION['pass'] = $_POST['pass'];
			header("location: profileHome.php");
		}
		elseif($type=='admin'){
			session_start();
			$_SESSION['uname'] = $_POST['uname'];
			$_SESSION['pass'] = $_POST['pass'];
			header("location: adminPortal.php");
		}
		elseif ($type=='sa') {
			session_start();
			$_SESSION['uname'] = $_POST['uname'];
			$_SESSION['pass'] = $_POST['pass'];
			header("location: superAdminPortal.php");
		}
		else{
			header("Location: SignIn.php?ret=wrongUserNameOrPassword");
		}
	}
		mysqli_close($conn);
}
if(isset($_GET['signout']))
{
	session_unregister('uname');
}
?>