<?php
    $servername = "localhost";
    $uname      = "root";
    $password   = "";
    $dbname     = "gadto";

    $conn = mysqli_connect($servername, $uname, $password, $dbname);

    if(isset($_GET['del'])){
        $del_id = $_GET['del'];

        mysqli_query($conn, "DELETE FROM ad_info WHERE ad_id='$del_id'");
        header("Location: AdInfo.php");
    }
    elseif(isset($_GET['ren'])){
        $ad_id = $_GET['ren'];

        mysqli_query($conn, "UPDATE ad_info SET status='pending' WHERE ad_id='$ad_id'");
        header("Location: Payment.php?ad_id=" . $ad_id);
    }
    
?>