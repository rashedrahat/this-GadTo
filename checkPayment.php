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


$pay_method 	= $_POST['pay_method'];
$card_no 		= $_POST['card_no'];
$holder_name 	= $_POST['holder_name'];
$exp_date 		= $_POST['exp_date'];
$cvv 			= $_POST['cvv'];


$sql 	= "INSERT INTO payment_info VALUES ('','$pay_method','7','$card_no');";
$sql2	= "INSERT INTO card_info VALUES ('$card_no','$holder_name','2018-09-27','$cvv');";
		

		if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2))
		{
			header("Location: ad_pay_review.php");
		}
		else
		{
			header("Location: payment.php");
		}


?>