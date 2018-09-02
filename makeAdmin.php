<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>Create Admin</title>
    <link rel="stylesheet" href="tableDesignAdmin.css">
</head>

<body>
    <br><br><br><br><br><br>
    <h1 align="center"><i>Existing User Info</i></h1>
    <table align="center" border="" style="height: auto; width: auto;">

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

        $sql               = "select * from user_info where u_type_name='nu' and status='active'";
        $result            = mysqli_query($conn, $sql);
    

        while ($row = mysqli_fetch_assoc($result)) {
        $GLOBALS['user_name']   = $row['user_name'];
        $GLOBALS['email']       = $row['email'];
        $GLOBALS['js']          ="return confirm('Are you sure?')";
       
echo'       <tr align="center">
            <td>'. $user_name .'</td>
            <td>'. $email .'</td>
            <td>
                <a href="makeAdmin.php?make='.$user_name.'"  onclick="'.$js.';">
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
    if(isset($_GET['make'])){
        $make_id = $_GET['make'];

        mysqli_query($conn, "update user_info set u_type_name='na' where user_name = '$make_id'");
        header("Location: makeAdmin.php");
    }
    
?>