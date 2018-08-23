<?php
session_start();

if ($_SESSION['uname'] != true)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>FORM | Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">

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
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <img src="top.png" width="30" height="30">
        </button>




        <br/>
        <br>
        <br>
        <div align="center">
           <b>Welcome <?php echo $_SESSION['uname'] . "<br/>You logged in at:" . $_COOKIE['loggedintime'];?></b> 
        </div>
        <table align="center" border="" height="800" width="800">




            <tr>
                <td>


                    <br/>
                    <font size="4">
                        &emsp;Activity log
                    </font>
                    <!-- Load icon library -->
                    &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
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
                <td> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <i>Today</i>

                </td>
            </tr>
            <tr>
                <td>&emsp;<?php echo $_SESSION['uname']?>, you saw
                    <a href="#">iphoneX</a>
                    <i class="material-icons" style="font-size:20px;color:grey;float: right;">delete</i>
                    <i class="fa fa-heart" style="font-size:20px;color:red;float: right;"></i>
                    <br>
                </td>

            </tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <i>22 June
                </i>
            </td>

            </tr>
            <tr>
                <td>&emsp;<?php echo $_SESSION['uname']?>, you posted a review about
                    <a href="#">AsusZenF1</a>
                    <i class="material-icons" style="font-size:20px;color:grey;float: right;">delete</i>
                    <i class="fa fa-heart" style="font-size:20px;color:grey;float: right;"></i>
                </td>

            </tr>
            <tr>
                <td>&emsp;<?php echo $_SESSION['uname']?>, you saw
                    <a href="Page4.php">AsusX55179</a>
                    <i class="material-icons" style="font-size:20px;color:grey;float: right;">delete</i>
                    <i class="fa fa-heart" style="font-size:20px;color:grey;float: right;"></i>
                </td>

            </tr>
            </tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <i>20 June
                </i>
            </td>
            <br/>
            </tr>
            <tr>
                <td>&emsp;<?php echo $_SESSION['uname']?>, you posted an
                    <a href="single_ad_info.php">Ad[A172]</a>
                    <i class="material-icons" style="font-size:20px;color:grey;float: right;">delete</i>
                    <i class="fa fa-heart" style="font-size:20px;color:red;float: right;"></i>
                </td>

            </tr>
            <tr>
                <td>&emsp;<?php echo $_SESSION['uname']?>, you saw
                    <a href="#">Hp Spector x360</a>
                    <i class="material-icons" style="font-size:20px;color:grey;float: right;">delete</i>
                    <i class="fa fa-heart" style="font-size:20px;color:grey;float: right;"></i>


            </tr>
            <tr>
                <td>&emsp;<?php echo $_SESSION['uname']?>, you saw
                    <a href="#">Hp Spector 13</a>
                    <i class="material-icons" style="font-size:20px;color:grey;float: right;">delete</i>
                    <i class="fa fa-heart" style="font-size:20px;color:grey;float: right;"></i>
                </td>
            </tr>
            <tr>
                <td>&emsp;<?php echo $_SESSION['uname']?>, you saw
                    <a href="#">Dell xps13</a>
                    <i class="material-icons" style="font-size:20px;color:grey;float: right;">delete</i>
                    <i class="fa fa-heart" style="font-size:20px;color:grey;float: right;"></i>
                </td>
            </tr>
            <tr>
                <td>&emsp;<?php echo $_SESSION['uname']?>, you posted an
                    <a href="#">Ad[152]</a>
                    <i class="material-icons" style="font-size:20px;color:grey;float: right;">delete</i>
                    <i class="fa fa-heart" style="font-size:20px;color:red;float: right;"></i>
                </td>

            </tr>
        </table>
        </div>
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