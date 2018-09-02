<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>Post Ad Review</title>
</head>

<body>
<br><br><br><br><br>
    <h1 align="center"><i>Reviews Info</i></h1>
<div align="center">

</div><br>
    <table align="center" border="" height="350" width="800">

        <tr align="center">
            <th>Review ID</th>
            <th>User Name</th>
            <th>Coment</th>
            <th>Date</th>
            <th>Action&emsp;</th>
        </tr>


<?php

        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname     = "gadto";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sql               =    "SELECT review_id, user_name, comment, post_date FROM review;";
        $result            = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
        $GLOBALS['review_id']  = $row['review_id'];
        $GLOBALS['user_name']  = $row['user_name'];
        $GLOBALS['comment']    = $row['comment'];
        $GLOBALS['post_date']  = $row['post_date'];
        $GLOBALS['js']         ="return confirm('Are you sure?')";
       
echo'       <tr align="center">
            <td>'. $review_id .'</td>
            <td>'. $user_name .'</td>
            <td>'. $comment .'</td>
            <td>'. $post_date .'</td>
            <td>
                <a href="manageReviews_2.php?del='.$review_id.'"  onclick="'.$js.';">
                <input type="button" value="Remove">
                </a>
            </td>
        </tr>'; 
        
        }
?> 



    </table>
    <br><br>
    <div align="center">
    <a href="adminPortal.php">Go back to Profile Home</a>
    </div>
</body>
</html>

<?php
    if(isset($_GET['del'])){
        $del_id = $_GET['del'];

        mysqli_query($conn, "DELETE FROM review
                            WHERE review_id='$del_id';");
        header("Location: manageReviews_2.php");
    }
    
?>