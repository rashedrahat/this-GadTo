<?php
session_start();

if ($_SESSION['uname'] != true)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>FORM | Profile Info</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div style="padding:10; text-align:right;">
        <a href="index.php"><img style="float: left; padding-left: 10" src="gadto.jpg" width="80" height="50"></a>
            <a href="home.php">Home</a> | <a href="ProfileHome.php">Profile Home</a> | <a href="ProfileInfo.php">Profile Info</a> | <a href="PostAd.php">Post Ad</a> | <a href="ad_info.php">Ad Info</a> | <a href="notification.php">Notification</a> | <a href="signout.php">Log Out</a>
    </div>
            <div class="login-box">
                <img src="ppic.png" class="avatar">
                <?php
                //Show profile info portion

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

                    $un = $_SESSION['uname'];
                    $sql = "SELECT fname, lname, uname, phone, pass, email FROM user WHERE uname = '$un'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                    }
                    mysqli_close($conn);
                ?>
                <?php
                //Upadate profile info portion

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
                    if (isset($_POST['update'])) {
                        $un = $_SESSION['uname'];
                        $UpEmail = $_POST['email'];
                        $UpPass = $_POST['password'];
                        $UpFname = $_POST['fName'];
                        $UpLname = $_POST['lName'];
                        $UpPhn = $_POST['mobileNo'];
                        $sql = "UPDATE user SET email = '$UpEmail', pass ='$UpPass', fname = '$UpFname', lname = '$UpLname', phone = '$UpPhn' WHERE uname = '$un'";
                        if (mysqli_query($conn, $sql)) {
                            echo "Updated successfully! Refresh to see.";
                                } 
                            else {
                                echo "Error updating record: " . mysqli_error($conn);
                                }
                        }
                        mysqli_close($conn);
                ?>
                <form method="POST" action="">
                    <lebel>First Name</lebel>
                    <input type="text" name="fName" value="<?php echo $row['fname']?>" border-style: solid>
                    <lebel>Last Name</lebel>
                    <input type="text" name="lName" value="<?php echo $row['lname']?>" border-style: solid>
                    <lebel>Username</lebel>
                    <input type="text" name="username" value="<?php echo $row['uname']?>" readonly border-style: solid />
                    <lebel>Mobile Number</lebel>
                    <input type="text" name="mobileNo" value="<?php echo $row['phone']?>" border-style: solid />
                    <lebel>Password</lebel>
                    <input type="password" name="password" value="<?php echo $row['pass']?>">
                    <lebel>E-mail</lebel>
                    <input type="text" name="email" value="<?php echo $row['email']?>">
                    <br/>
                    <br/>


                    <input type="submit" name="update" value="Update">
                    <!--<input type="button" value="Back" onclick="window.location.href='ProfileHome.php'"/>-->

                </form>
            </div>
</body>

</html>