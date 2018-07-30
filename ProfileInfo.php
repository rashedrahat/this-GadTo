<?php
session_start();

if ($_SESSION['loggedIn'] != 3)
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
    <div>

        <form action="">

            <table align="center" height="100" width="800" style="padding-top: 80">
            </table>

            <div class="login-box">
                <img src="ppic.png" class="avatar">
                <h1>
                    Profile Information</h1>
                <form>
                    <lebel>Name</lebel>
                    <input type="text" name="name" placeholder="<?php echo $_SESSION['uname']?>" border-style: solid>
                    <lebel>Username</lebel>
                    <input type="text" name="username" placeholder="imrx" border-style: solid />
                    <lebel>Mobile Number</lebel>
                    <input type="text" name="mobileNo" placeholder="01633179767" border-style: solid />
                    <lebel>Password</lebel>
                    <input type="password" name="password" placeholder="*********">
                    <lebel>E-mail</lebel>
                    <input type="text" name="email" placeholder="imrx@gmail.com">
                    <br/>
                    <br/>


                    <input type="submit" name="submit" value="Change">
                    <input type="submit" name="submit" value="Save">

                </form>


            </div>
</body>

</html>