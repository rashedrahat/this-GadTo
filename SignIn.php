<html>

<head>
    <title>FORM | Sign-In</title>
</head>

<body>
    <div style="padding:10; text-align:right;">
        <!-- Load icon library -->
                            &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <a href="index.php"><img style="float: left; padding-left: 10"src="gadto.jpg" width="80" height="50"></a>
        <a href="home.php">Home</a> | <a href=#about>About Us</a> | <a href="SignIn.php">Sign In</a> | <a href="SignUp.php">Sign Up</a> | <a href=#FAQ>FAQ</a> | <a href=#help>Help</a> | <a href=#feedback>Feedback</a>
    </div>
    <form action="checkSignIn.php" method="POST">
        <table align="center" height="200" width="400" style="padding-top: 175px">
            <tr>
                <td>
                    <b>
                        <font size=" 4 ">
                            <lebel align="center ">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;User Sign-In
                            <br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <img src="sig.jpg " width="50 " height="50 ">
                            </lebel>
                        </font>
                    </b>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="text " size="45" name='uname' placeholder="Username" style="height: 40px " ; />
                    <br/>
                    <br/>

                    <input type="password" name='pass' placeholder="Password" size="45" style="height: 40px " ;/>
                    <br/>
                    <br/>
                </td>
            </tr>
            <tr>
                <td>
                    &emsp;&emsp;<input type="checkbox" name="remember" value="remember me">Remember Me
                </td>
            </tr>
            <tr>
                <td>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <a href="#ForgotPass">Forgot Password?</a>
                    <br/>
                    <br/>

                </td>
            </tr>

            <tr>
                <td>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <input type="submit" value="Sign In ->>" style="height:30px; width:150px";/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>