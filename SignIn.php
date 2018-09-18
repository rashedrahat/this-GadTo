<?php
session_start();
if (!isset($_SESSION['user_name'])) {
 ?>
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
                    <input type="text " size="45" name='user_name' placeholder="Username" style="height: 40px " ; />
                    <br/>
                    <a style="color:red;"><?php if(isset($_GET['reteu'])){$reteu=$_GET['reteu']; print $reteu;} ?></a>
                    <br/>
                    <br/>

                    <input type="password" name='pass' placeholder="Password" size="45" style="height: 40px " ;/>
                    <br/>
                    <a style="color:red;"><?php if(isset($_GET['retep'])){$retep=$_GET['retep']; print $retep;} ?></a>
                    <br/>
                    <a style="color:red;"><?php if(isset($_GET['retnup'])){$retnup=$_GET['retnup']; print $retnup;} ?></a>
                    <a style="color:red;"><?php if(isset($_GET['retnub'])){$retnub=$_GET['retnub']; print $retnub;} ?></a>
                    <a style="color:red;"><?php if(isset($_GET['retnab'])){$retnab=$_GET['retnab']; print $retnab;} ?></a>
                    <a style="color:red;"><?php if(isset($_GET['ret'])){$ret=$_GET['ret']; print $ret;} ?></a>
                    <br/>
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
</body>
</html>
    <?php
        include 'footer.php';
    ?>
</body>
</html>
<?php }
else {
  header("location: ProfileHome.php");
}
 ?>
