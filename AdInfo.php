<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
?>

<html>

<head>
    <title>FORM | Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="tableDesignUser.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }

        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: white;

            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        #myBtn:hover {
            background-color: white;
        }
    </style>
</head>

<body>
    <form action="">
        <?php
            include 'insideHeadAdInfoNormalUser.php';
        ?>
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <img src="top.png" width="30" height="30">
        </button>





        <table align="center" border="" style="height: auto; width: auto;">
            <tr>
                <br/>
                <br/>
                <br/>

                <td colspan="3">


                    <br/>
                    <font size="4">
                        <i>Posted Ad Information</i>
                    </font>
                    <!-- Load icon library -->
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <!-- The form -->
                    <form class="example" action="action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit">
                            <i class="fa fa-search"></i>

                        </button>
                    </form>
                    <br/>
                    <br/>

                </td>
            </tr>


            <tr>
                <th><i>ID</i></th>
                <th><i>Status</i></th>
                <th><i>Details</i></th>


            </tr>
            <tr>
                <td>A101</td>
                <td>Active</td>
                <td>Cost:1000 BDT;Duration:1 week;<br/>
                   Intensity:High,Area:More Visual;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <input type="button" style="height:20px;width:50px" value="Report" onclick="window.location.href='report.php'"
                    />
                    <input type="button" style="height:20px;width:50px" value="Edit" onclick="window.location.href='edit_single_ad_info.php'""
                    />
                    <br/> File:
                    <input type="button" style="height:20px;width:40px" value="See" onclick="window.location.href='single_ad_info.php'"
                    /> &emsp;Link:
                    <a href="www.google.com">www.google.com</a>
                </td>
            </tr>
            <tr>
                <td>A172</td>
                <td>Pending</td>
                <td>Cost:1235 BDT;Duration:2 week
                    <br/> Intensity:High,Area:More Visual;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <input type="button" style="height:20px;width:50px" value="Report" onclick="window.location.href='report.php'"
                    />
                    <input type="button" style="height:20px;width:50px" value="Edit" onclick="window.location.href='edit_single_ad_info.php'"
                    />
                    <br/> File:
                    <input type="button" style="height:20px;width:40px" value="See" onclick="window.location.href='single_ad_info.php'"
                    /> &emsp;Link:
                    <a href="www.google.com">www.google.com</a>
                </td>
            </tr>
            <tr>
                <td>A192</td>
                <td>Expire</td>
                <td>Cost:1873 BDT;Duration:1 week
                    <br/> Intensity:High,Area:More Visual;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <input type="button" style="height:20px;width:50px" value="Report" onclick="window.location.href='report.php'"
                    />
                    <input type="button" style="height:20px;width:50px" value="Edit" onclick="window.location.href='edit_single_ad_info.php'"
                    />
                    <br/> File:
                    <input type="button" style="height:20px;width:40px" value="See" onclick="window.location.href='single_ad_info.php'"
                    /> &emsp;Link:
                    <a href="www.google.com">www.google.com</a>
                </td>
            </tr>

            <tr>
                <td>A182</td>
                <td>Expire</td>
                <td>Cost:1450 BDT;Duration:1 week
                    <br/> Intensity:High,Area:More Visual;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <input type="button" style="height:20px;width:50px" value="Report" onclick="window.location.href='report.php'"
                    />
                    <input type="button" style="height:20px;width:50px" value="Edit" onclick="window.location.href='edit_single_ad_info.php'"
                    />
                    <br/> File:
                    <input type="button" style="height:20px;width:40px" value="See" onclick="window.location.href='single_ad_info.php'"
                    /> &emsp;Link:
                    <a href="www.google.com">www.google.com</a>
                </td>
            </tr>
            <tr>
                <td>A102</td>
                <td>Pending</td>
                <td>Cost:1873 BDT;Duration:1 week
                    <br/> Intensity:High,Area:More Visual;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <input type="button" style="height:20px;width:50px" value="Report" onclick="window.location.href='report.php'"
                    />
                    <input type="button" style="height:20px;width:50px" value="Edit" onclick="window.location.href='edit_single_ad_info.php'"
                    />
                    <br/> File:
                    <input type="button" style="height:20px;width:40px" value="See" onclick="window.location.href='single_ad_info.php'"
                    /> &emsp;Link:
                    <a href="www.google.com">www.google.com</a>
                </td>
            </tr>
            <tr>
                <td>A392</td>
                <td>Active</td>
                <td>Cost:1873 BDT;Duration:1 week
                    <br/> Intensity:High,Area:More Visual;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <input type="button" style="height:20px;width:50px" value="Report" onclick="window.location.href='report.php'"
                    />
                    <input type="button" style="height:20px;width:50px" value="Edit" onclick="window.location.href='edit_single_ad_info.php'"
                    />
                    <br/> File:
                    <input type="button" style="height:20px;width:40px" value=See" onclick="window.location.href='single_ad_info.php'"
                    /> &emsp;Link:
                    <a href="www.google.com">www.google.com</a>
                </td>
            </tr>
            <tr>
                <td>A392</td>
                <td>Active</td>
                <td>Cost:1873 BDT;Duration:1 week
                    <br/> Intensity:High,Area:More Visual;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <input type="button" style="height:20px;width:50px" value="Report" onclick="window.location.href='report.php'"
                    />
                    <input type="button" style="height:20px;width:50px" value="Edit" onclick="window.location.href='edit_single_ad_info.php'"
                    />
                    <br/> File:
                    <input type="button" style="height:20px;width:40px" value=See" onclick="window.location.href='single_ad_info.php'"
                    /> &emsp;Link:
                    <a href="www.google.com">www.google.com</a>
                </td>
            </tr>

            <tr>
                <td>A392</td>
                <td>Active</td>
                <td>Cost:1873 BDT;Duration:1 week
                    <br/> Intensity:High,Area:More Visual;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <input type="button" style="height:20px;width:50px" value="Report" onclick="window.location.href='report.php'"
                    />
                    <input type="button" style="height:20px;width:50px" value="Edit" onclick="window.location.href='edit_single_ad_info.php'"
                    />
                    <br/> File:
                    <input type="button" style="height:20px;width:40px" value="See" onclick="window.location.href='single_ad_info.php'"
                    /> &emsp;Link:
                    <a href="www.google.com">www.google.com</a>
                </td>
            </tr>
            <tr>
                <td>A392</td>
                <td>Active</td>
                <td>Cost:1873 BDT;Duration:1 week
                    <br/> Intensity:High,Area:More Visual;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <input type="button" style="height:20px;width:50px" value="Report" onclick="window.location.href='report.php'"
                    />
                    <input type="button" style="height:20px;width:50px" value="Edit" onclick="window.location.href='edit_single_ad_info.php'"
                    />
                    <br/> File:
                    <input type="button" style="height:20px;width:40px" value="See" onclick="window.location.href='single_ad_info.php'"
                    /> &emsp;Link:
                    <a href="www.google.com">www.google.com</a>
                </td>
            </tr>
            <tr>
                <td>A392</td>
                <td>Active</td>
                <td>Cost:1873 BDT;Duration:1 week
                    <br/> Intensity:High,Area:More Visual;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <input type="button" style="height:20px;width:50px" value="Report" onclick="window.location.href='report.php'"
                    />
                    <input type="button" style="height:20px;width:50px" value="Edit" onclick="window.location.href='edit_single_ad_info.php'"
                    />
                    <br/> File:
                    <input type="button" style="height:20px;width:40px" value="See" onclick="window.location.href='single_ad_info.php'"
                    /> &emsp;Link:
                    <a href="www.google.com">www.google.com</a>
                </td>
            </tr>
            <tr>
                <td>A392</td>
                <td>Active</td>
                <td>Cost:1873 BDT;Duration:1 week
                    <br/> Intensity:High,Area:More Visual;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <input type="button" style="height:20px;width:50px" value="Report" onclick="window.location.href='report.php'"
                    />
                    <input type="button" style="height:20px;width:50px" value="Edit" onclick="window.location.href='edit_single_ad_info.php'"
                    />
                    <br/> File:
                    <input type="button" style="height:20px;width:40px" value="See" onclick="window.location.href='single_ad_info.php'"
                    /> &emsp;Link:
                    <a href="www.google.com">www.google.com</a>
                </td>
            </tr>



        </table>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

    </form>
</body>

</html>