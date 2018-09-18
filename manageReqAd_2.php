<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>Ad Confirmation</title>
    <link rel="stylesheet" href="tableDesignAdmin.css">
</head>

<body>
<br><br><br><br><br>
    <h1 align="center"><i>Requested Ad Info</i></h1>
    <table align="center" border="" height="auto" width="auto">

            <tr align="center">
                <th><i>ID</i></th>
                <th><i>Status</i></th>
                <th><i>Details</i></th>
                <th><i>Action</i></th>
            </tr>

<?php

        $servername = "localhost";
        $uname      = "root";
        $password   = "";
        $dbname     = "gadto";

        $conn = mysqli_connect($servername, $uname, $password, $dbname);

        $sql               = "select * from ad_info where status='pending'";
        $result            = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
        $GLOBALS['id']          = $row['ad_id'];
        $GLOBALS['status']      = $row['status'];
        $GLOBALS['cost']        = $row['cost'];
        $GLOBALS['duration']    = $row['duration'];
        $GLOBALS['level']       = $row['level'];
        $GLOBALS['link']        = $row['link'];

        $GLOBALS['js']          ="return confirm('Are you sure?')";
       
echo'       <tr align="center">
            <td>'. $id .'</td>
            <td>'. $status .'</td>
            <td>
                Cost: '. $cost .'  Duration: '. $duration .' </br>
                Intensity: '. $level .' </br>
                Link: '. $link .'
            </td>
            <td>
                <a href="manageReqAd_2.php?accept='. $id .'"  onclick="'. $js .';">
                <input type="button" value="Accept">
                </a>
                <a href="manageReqAd_2.php?decline='. $id .'"  onclick="'. $js .';">
                <input type="button" value="Decline">
                </a>
            </td>
        </tr>'; 
        
        }
?> 
    </table>
    <br/>
    <div align="center">
    <a href="adminPortal.php">Go back to Profile Home</a>
    </div>
</body>

</html>

<?php
    if(isset($_GET['accept'])){
        $accept_id = $_GET['accept'];

        mysqli_query($conn, "update ad_info set status='active' where ad_id = '$accept_id'");
        header("Location: manageReqAd_2.php");
    }
        elseif(isset($_GET['decline'])){
        $del_id = $_GET['decline'];

        mysqli_query($conn, "DELETE FROM ad_info WHERE ad_id='$del_id'");
        header("Location: manageReqAd_2.php");
    }
    
?>