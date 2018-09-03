<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gadto";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$str = "select user_name from user_info where user_name like '".$_REQUEST["q"]."%';";
$res = mysqli_query($conn, $str);
$list = "";
for ($i = 0; $i<mysqli_num_rows($res);$i++)
{
	$row[$i] = mysqli_fetch_array($res);
	$list = "<br/>".$row[$i]['user_name'];
}
echo $list === ""?"Not in list!":$list;
?>