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
        <?php
            include 'insideHeadPostAdAd_Pay_ReviewNormalUser.php';
        ?>
    </div>
    <div><br><br><br><br><br><br><br>

        <form action="">
            <h1>Successfully Posted Ad</h1>

            <table align="center" border="1" height="100" width="800">
                <tr>
                    <th colspan="4">
                        <img src="tick.jpg" height="50" width="50" </th>
                        <br/> Great

                </tr>

                <tr align="center">
                    <td>
                        Your ad will be shown publicly on GadTo
                        <br/>
                        <br/>The requested add is under processing
                        <br/>
                        <br/>Cost of this ad is 1000 BDT Your Ad ID: A172
                        <br/>
                        <br/>To Know more about the ad

                        <a href="single_ad_info.php">Click Here</a>

                    </td>
                </tr>





            </table>
            <table align="center" height="100" width="800">
                <tr>
                    <td>
                        &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <input type="button" style="height:50px;width:100px" value="Finish" onclick="window.location.href='ProfileHome.php'" />
                    </td>
                </tr>
                </>
        </form>
    </div>
</body>

</html>