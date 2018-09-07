<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>User Confirmation</title>
    <link rel="stylesheet" href="tableDesignAdmin.css">
</head>

<body>
<br><br><br><br><br>
    <h1 align="center"><i>Pending Users Info</i></h1>
    <table align="center" border="" height="auto" width="auto">

        <tr align="center">
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

        $sql               = "select * from user_info where status='pending' and u_type_name='nu'";
        $result            = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
        $GLOBALS['user_name']  = $row['user_name'];
        $GLOBALS['email']  = $row['email'];
        $GLOBALS['js']     ="return confirm('Are you sure?')";
       
echo'       <tr align="center">
            <td>'. $user_name .'</td>
            <td>'. $email .'</td>
            <td>
                <a href="manageReqUser.php?accept='.$user_name.'"  onclick="'.$js.';">
                    <input type="button" value="Accept">
                </a>
                <a href="manageReqUser.php?decline='.$user_name.'"  onclick="'.$js.';">
                    <input type="button" value="Decline">
                </a>
            </td>
        </tr>'; 
        
        }
?> 
    </table>
    <div align="center"><br>
    <a href="superAdminPortal.php">Go back to Profile Home</a>
    </div>
</body>

</html>

<?php
    if(isset($_GET['accept'])){
        $accept_id = $_GET['accept'];

        mysqli_query($conn, "update user_info set status='active' where user_name = '$accept_id'");
        header("Location: manageReqUser.php");
    }
        elseif(isset($_GET['decline'])){
        $decline_id = $_GET['decline'];

        mysqli_query($conn, "update user_info set status='blocked' where user_name = '$decline_id'");
        header("Location: manageReqUser.php");
    }
    
?>