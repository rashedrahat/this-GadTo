<html>

<head>
    <title>FORM | Sign-In</title>
</head>

<body>
    <?php
        include 'headSignIn.php';
    ?>
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
                    <a href="forgotPass.php">Forgot Password?</a>
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
    <?php
        include 'footer.php';
    ?>
</body>
</html>