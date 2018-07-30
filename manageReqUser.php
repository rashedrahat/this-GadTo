<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>User Confirmation</title>
</head>

<body>
<br><br><br><br><br>
    <h1 align="center"><i>Pending Users Info</i></h1>
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

        $sql               = "select * from user where status='pending' and type='user'";
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
                <a href="manageReqUser.php?accept='.$id.'"  onclick="'.$js.';">
                    <input type="button" value="Accept">
                </a>
                <a href="manageReqUser.php?decline='.$id.'"  onclick="'.$js.';">
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

        mysqli_query($conn, "update user set status='active' where id = '$accept_id'");
        header("Location: manageReqUser.php");
    }
        elseif(isset($_GET['decline'])){
        $decline_id = $_GET['decline'];

        mysqli_query($conn, "update user set status='blocked' where id = '$decline_id'");
        header("Location: manageReqUser.php");
    }
    
?>