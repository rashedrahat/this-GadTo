<?php
session_start();

if ($_SESSION['loggedIn'] != 3)
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
    <div style="padding-top: 150">

        <form action="">
            <h1>Successfully Upgraded Ad</h1>

            <table align="center" border="1" height="100" width="800">
                <tr>
                    <th colspan="4">
                        <img src="tick.jpg" height="50" width="50" </th>
                        <br/> Great

                </tr>

                <tr align="center">
                    <td style="padding:5">
                        Your ad will be shown publicly on GadTo.
                        <br/>The requested ad is under processing.
                        <br/>Cost of this ad is 1000 BDT & Your Ad ID: A172;
                        <br/>To Know more about the ad
                        <a href="single_ad_info.php">Click Here</a>

                    </td>
                </tr>





            </table>
            <table align="center" height="100" width="800">
                <tr>
                    <td>
                        &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <input type="button" style="height:50px;width:100px" value="Finish" onclick="window.location.href='ad_info.php'" />
                    </td>
                </tr>
                </>
        </form>
    </div>
</body>

</html>