<?php
session_start();

if ($_SESSION['uname'] != true)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>FORM</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div>
        <div style="padding:10; text-align:right;">
            <a href="index.html">
                <img style="float: left; padding-left: 10" src="gadto.jpg" width="80" height="50">
            </a>
            <a href="home.php">Home</a> |
            <a href="ProfileHome.php">Profile Home</a> |
            <a href="ProfileInfo.php">Profile Info</a> |
            <a href="PostAd.php">Post Ad</a> |
            <a href="ad_info.php">Ad Info</a> |
            <a href="notification.php">Notification</a> |
            <a href="signout.php">Log Out</a>
        </div>
    </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div>

        <form action="">

            <table align="center" height="100" width="800">
                <tr algin="center">
                    <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Complete Ad Details</th>

                </tr>
                <tr>
                    <td>
                        <br/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>Choose Payment Method</td>

                    <td>
                        <input type="radio" name="payment" />
                        <img src="visa.jpg" height="40" width="70">
                        <input type="radio" name="payment" />
                        <img src="mastercard.jpg" height="40" width="70">

                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Cardholders Name
                        <br/>
                        <input type="txt" name="name" />
                    </td>

                    <td>CardNumber
                        <br/>
                        <input type="txt" name="name" />


                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>Expiry Date
                        <br/>

                        <input type="number" name="day" min="1" max="31" />
                        <input type="number" name="month" min="1" max="12" />
                        <input type="number" name="year" min="1900" max="2020" />
                        <label>
                            <font size="2">(dd/mm/yyyy)</font>
                        </label>
                        <br/>
                    </td>
                    <td>CVC/CVC*
                        <br/>
                        <input type="text" name="name" />

                    </td>
                </tr>


                <tr>
                    <td>
                        <br/>
                        <br/>
                    </td>
                </tr>

                <tr>

                    <td>
                        <font size="4">
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <input type="button" style="height:50px;width:100px" value="COMPLETE" onclick="window.location.href='ad_pay_review.php'" />
                            <input type="button" style="height:50px;width:100px" value="CANCEL" onclick="window.location.href='PostAd.php'" />
                        </font>
                    </td>

                </tr>



            </table>
        </form>
    </div>
</body>

</html>