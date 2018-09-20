<?php 
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
else {
$servername = "localhost";
$uname      = "root";
$password   = "";
$dbname     = "gadto";

$conn       = mysqli_connect($servername, $uname, $password, $dbname);

if (!$conn) {
    die("Connection Error!" . mysqli_connect_error());
}

$username   = $_SESSION['user_name'];
$sql        = "select * from user_info where user_name='$username'";
$result     = mysqli_query($conn, $sql);
$row        = mysqli_fetch_assoc($result);

}
?>


<html>

<head>
    <title>Admin Profile Info</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div style="padding-bottom: 77px;">
        <div class="login-box">
                <img src="ppic.png" class="avatar">

                <?php
 
                    if (isset($_POST['update'])) {
                        $email      = $_POST['email'];
                        $pass       = $_POST['pass'];
                        $first_name = $_POST['first_name'];
                        $last_name  = $_POST['last_name'];
                        $phone      = $_POST['phone'];

                        $sql        = "UPDATE user_info SET email = '$email', pass ='$pass', first_name = '$first_name', last_name = '$last_name', phone = '$phone' WHERE user_name = '$username'";

                        if (mysqli_query($conn, $sql)) {
                            header("Location: adminProfileInfo_2.php?ret=Updated Successfully");
                                } 
                            else {
                                echo "Error updating record: " . mysqli_error($conn);
                                }
                        }
                        mysqli_close($conn);
                ?>
                <form method="POST" action="">
                    <lebel>First Name</lebel>
                    <input type="text" name="first_name" value="<?php echo $row['first_name']?>" border-style: solid>
                    <lebel>Last Name</lebel>
                    <input type="text" name="last_name" value="<?php echo $row['last_name']?>" border-style: solid>
                    <lebel>Username</lebel>
                    <input type="text" name="user_name" value="<?php echo $row['user_name']?>" readonly border-style: solid />
                    <lebel>Mobile Number</lebel>
                    <input type="text" name="phone" value="<?php echo $row['phone']?>" border-style: solid />
                    <lebel>Password</lebel>
                    <input type="password" name="pass" value="<?php echo $row['pass']?>">
                    <lebel>E-mail</lebel>
                    <input type="text" name="email" value="<?php echo $row['email']?>">
                    <br/>
                    <br/>


                    <input type="submit" name="update" value="Update">
                    <br/>
                    <br/>
                    <a style="color:green;"><?php if(isset($_GET['ret'])){$ret=$_GET['ret']; echo $ret;} ?></a>
                    <!--<input type="button" value="Back" onclick="window.location.href='ProfileHome.php'"/>-->

                </form>
            </div>
    </div>
    </form>
<div align="center">
    <a href="superAdminPortal.php">Close</a>
</div>
</body>

</html>