<?php

session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}


$servername = "localhost";
$uname 		= "root";
$password 	= "";
$dbname	 	= "gadto";

$conn 		= mysqli_connect($servername, $uname, $password, $dbname);

if($_POST['package']=='p1'){
	$cost 		= 100;
	$duration 	= '1 week';
	$level		= 'high';
}
elseif($_POST['package']=='p2'){
	$cost 		= 200;
	$duration 	= '1 month';
	$level		= 'high';
}
elseif($_POST['package']=='p3'){
	$cost 		= 50;
	$duration 	= '1 week';
	$level		= 'low';
}
elseif($_POST['package']=='p4'){
	$cost 		= 100;
	$duration 	= '1 month';
	$level		= 'low';
}


$username 	= $_SESSION['user_name'];

$file		= addslashes(file_get_contents($_FILES['image']['tmp_name']));
$link	 	= $_POST['link'];


$sql 	= "INSERT INTO ad_info VALUES ('','$username','$cost','$duration','$file','$link','$level','pending');";
	

		if (mysqli_query($conn, $sql))
		{
			$last_id = mysqli_insert_id($conn);
			header("Location: payment.php?ad_id=" . $last_id);
		}

		else
		{
			header("Location: PostAd.php?ret=*Error!!! try again");
		}


?>