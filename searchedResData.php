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

$str = "select gadget_name from gadget_info where gadget_name like '".$_REQUEST["q"]."%';";
$res = mysqli_query($conn, $str);
$list = "";
for ($i = 0; $i<mysqli_num_rows($res);$i++)
{
	$row[$i] = mysqli_fetch_array($res);
	$list = "<br/>".$row[$i]['gadget_name'];
}
echo $list === ""?"no suggestion":$list;
?>