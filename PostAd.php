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
            <a href="index.php">
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
    </div><br><br><br><br><br><br><br>
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
                    <td>For how long want to show?</td>
                    <td>
                        <select>
                            <option>1 week</option>
                            <option>1 month</option>
                            <option>2 months</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>Intesity level of showing?</td>

                    <td>
                        <input type="radio" name="level" />High
                        <input type="radio" name="level" />Avg
                        <input type="radio" name="level" />low
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>showing area</td>

                    <td>
                        <input type="radio" name="visual" />MoreVisual
                        <input type="radio" name="visual" />LessVisual

                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>share about your add</td>
                    <td>
                        <input type="file" name="file" />
                        <input type="submit" name="addlink" value="Add Link" />
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                        <br/>

                    </td>
                </tr>
                <tr>

                    <td colspan="2">N.B:&emsp;The file will be used as an Ad.The link is used to reach people to your product.
                        <br/> &emsp;&emsp;&emsp;All the information you can change in file.
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

                            <input type="button" style="height:50px;width:100px" value="COMPLETE" onclick="window.location.href='payment.php'" />&emsp;&emsp;
                            <input type="button" style="height:50px;width:100px" value="CANCEL" onclick="window.location.href='ProfileHome.php'" />
                        </font>
                    </td>

                </tr>



            </table>
        </form>
    </div>
</body>

</html>