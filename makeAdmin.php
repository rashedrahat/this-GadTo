<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>Create Admin</title>
</head>

<body>
    <br><br><br><br><br><br>
    <h1 align="center"><i>Existing User Info</i></h1>
    <table align="center" border="" width="800">

        <tr align="center">
            <th>ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Action&emsp;</th>
        </tr>

<?php

		$servername = "localhost";
		$username   = "root";
		$password   = "";
		$dbname     = "gadto";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		$sql               = "select * from user where type='user' and status='active'";
		$result            = mysqli_query($conn, $sql);
		//$GLOBALS['rownum'] = mysqli_num_rows($result);

		while ($row = mysqli_fetch_assoc($result)) {
        $GLOBALS['id']     = $row['id'];
        $GLOBALS['uname']  = $row['uname'];
        $GLOBALS['email']  = $row['email'];
        $GLOBALS['js']     ="return confirm('Are you sure?')";
       
echo'       <tr align="center">
            <td>'. $id .'</td>
            <td>'. $uname .'</td>
            <td>'. $email .'</td>
            <td>
            	<a href="createAdmin.php?delete='.$id.'"  onclick="'.$js.';">
                <input type="button" value="Make Admin">
                </a>
            </td>
        </tr>'; 
        
    	}
?> 


    </table>
    <br><br>
    <div align="center">
      <a href="superAdminPortal.php">Go back to Profile Home</a>
    </div> 

</body>
</html>


<?php
	if(isset($_GET['delete'])){
		$delete_id = $_GET['delete'];

		mysqli_query($conn, "update user set type='admin' where id = '$delete_id'");
		header("Location: createAdmin.php");
	}
	
?>