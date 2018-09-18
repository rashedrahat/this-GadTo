<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>Post Ad</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>

<body>
    <?php
            include 'insideHeadPostAdNormalUser.php';
        ?>
    <div>
        <br><br><br><br><br><br>

        <form action="checkPostAd.php"  method="POST">


            <table align="center" height="100" width="800">
                <tr algin="center">
                    <th><h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Complete Ad Details</h2></th>

                </tr>
                <tr>
                    <td>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>Choose A Package</td>
                    <td>
                        <input type="radio" name="package" value="p1" checked/>Premium  | 1 Week   | $100 </br>
                        <input type="radio" name="package" value="p2" />Premium  | 1 Month  | $200 </br>
                        <input type="radio" name="package" value="p3" />Standard | 1 Week   | $50 </br>
                        <input type="radio" name="package" value="p4" />Standard | 1 Month  | $100
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
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                    </td>
                </tr>
                <tr>
                    <td>Add Link</td>
                    <td>
                        <input type="text" name="link" placeholder="Enter a Link" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                        <?php if(isset($_GET['ret'])){$ret=$_GET['ret']; echo $ret;} ?>
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

                            <input type="submit" style="height:50px;width:100px" value="COMPLETE" />&emsp;&emsp;
                            <input type="button" style="height:50px;width:100px" value="CANCEL" onclick="window.location.href='ProfileHome.php'" />
                        </font>
                    </td>

                </tr>



            </table>
        </form>
    </div>
</body>

</html>