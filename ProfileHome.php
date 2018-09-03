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
</head>
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
        
        <?php
            include 'insideHeaderNormalUser.php';
        ?>
        <form action="">
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <img src="top.png" width="30" height="30">
        </button>
        <br/><br/>
        <div align="center">
           <b>Welcome <?php echo $_SESSION['user_name'] . "<br/>You logged in at:" . $_COOKIE['loggedintime'];?></b> 
        </div>
        <br>
        <table align="center" border="" style="height: auto; width: auto; padding: 1">
            <tr>
                <td>
                    <font size="4">
                        &emsp;<i>Activity log</i>
                    </font>
                    <!-- Load icon library -->
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
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

            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "gadto";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $ru = $_SESSION['user_name'];
                $sql = "SELECT * FROM gadget_review WHERE
                user_name='$ru'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr align="center">
                            <td>
                                <i><?php echo $row["post_date"]?></i>
                            </td>
                        </tr>
                        <tr style="text-align: left;">
                            <td>&emsp;<?php echo $ru ?>, you posted a review about 
                                <a href="#"><?php echo $row["gadget_name"] ?></a>
                            </td>
                        </tr>
                    </table>
                    <?php }
            }

            mysqli_close($conn);
            ?>
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
    <?php
        include 'insideportalFooter.php';
    ?>
</body>

</html>