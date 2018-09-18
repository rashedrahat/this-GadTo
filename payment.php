<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>Payment</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
        include 'insideHeadPostAdPayNormalUser.php';
    ?>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div>

        <form action="checkPayment.php"  method="POST">

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
                        <input type="radio" name="pay_method" value="visa" checked/><img src="visa.jpg" height="40" width="70">
                        <input type="radio" name="pay_method" value="mastercard"/><img src="mastercard.jpg" height="40" width="70">

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
                        <input type="txt" name="holder_name" />
                    </td>

                    <td>Card Number
                        <br/>
                        <input type="txt" name="card_no" />


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

                        <input type="date" name="exp_date" />
                        
                        <br/>
                    </td>
                    <td>CVC/CVC*
                        <br/>
                        <input type="text" name="cvv" />

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
                            <input type="submit" style="height:50px;width:100px" />
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