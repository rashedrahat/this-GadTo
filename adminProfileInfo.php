<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
else {
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "gadto";

$conn       = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Error!" . mysqli_connect_error());
}

$sql               = "select * from user where type='admin'";
$result            = mysqli_query($conn, $sql);
$data              = mysqli_fetch_assoc($result);


    //$name               = $data['name'];
    //$email              = $data['email'];
    //$gender             = $data['gender'];
    //$date               = $data['dob'];

}
?>


<html>

<head>
    <title>FORM | Admin Profile Info</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div style="padding-bottom: 77px;">
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
                    
                    $un = $_SESSION['user_name'];
                    $sql = "SELECT first_name, last_name, user_name, phone, pass, email FROM user_info WHERE user_name = '$un'";
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
                        $un = $_SESSION['user_name'];
                        $UpEmail = $_POST['email'];
                        $UpPass = $_POST['password'];
                        $UpFname = $_POST['fName'];
                        $UpLname = $_POST['lName'];
                        $UpPhn = $_POST['mobileNo'];
                        $sql = "UPDATE user_info SET email = '$UpEmail', pass ='$UpPass', first_name = '$UpFname', last_name = '$UpLname', phone = '$UpPhn' WHERE user_name = '$un'";
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
                    <input type="text" name="fName" value="<?php echo $row['first_name']?>" border-style: solid>
                    <lebel>Last Name</lebel>
                    <input type="text" name="lName" value="<?php echo $row['last_name']?>" border-style: solid>
                    <lebel>Username</lebel>
                    <input type="text" name="username" value="<?php echo $row['user_name']?>" readonly border-style: solid />
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
    </div>
    </form>
</div>
<div align="center">
    <a href="superAdminPortal.php">Close</a>
</div>
</div>
</div>
</body>

</html>