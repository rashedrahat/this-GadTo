<?php
session_start();

if ($_SESSION['user_name'] != true)
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
    <?php
        include 'insideHeadPostAdPayNormalUser.php';
    ?>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <input type="button" style="height:50px;width:100px" value="COMPLETE" onclick="window.location.href='ad_pay_review.php'" />
                            &emsp;&emsp;&emsp;&emsp;&emsp;
                            <input type="button" style="height:50px;width:100px" value="CANCEL" onclick="window.location.href='PostAd.php'" />
                        </font>
                    </td>

                </tr>



            </table>
        </form>
    </div>
</body>

</html>