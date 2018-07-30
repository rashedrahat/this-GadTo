<?php
session_start();

if ($_SESSION['loggedIn'] != 2)
{
    header("location: SignIn.php");
}

?>
<html>

<head>
    <title>FORM | Admin Profile Info</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div style="padding-bottom: 80px;">
        <form action="">
            <table align="center" height="100" width="800" style="padding-bottom: 33px;">
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
    </form>
</div>
<div align="center">
                <a href="AdminPortal.php">Close</a>
            </div>
</body>

</html>