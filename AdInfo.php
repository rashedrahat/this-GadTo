<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
$username   = $_SESSION['user_name'];
?>

<html>

<head>
    <title>Ad Info</title>
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

                <td colspan="4">


                    <br/>
                    <font size="4">
                        <i>Posted Ad Information</i>
                    </font>
                    <!-- Load icon library -->
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <br/>
                    <br/>

                </td>
            </tr>

            <tr>
                <th><i>ID</i></th>
                <th><i>Status</i></th>
                <th><i>Details</i></th>
                <th><i>Action</i></th>
            </tr>

<?php

        $servername = "localhost";
        $uname      = "root";
        $password   = "";
        $dbname     = "gadto";

        $conn = mysqli_connect($servername, $uname, $password, $dbname);

        $sql               = "select * from ad_info where user_name='$username'";
        $result            = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
        $GLOBALS['id']          = $row['ad_id'];
        $GLOBALS['status']      = $row['status'];
        $GLOBALS['cost']        = $row['cost'];
        $GLOBALS['duration']    = $row['duration'];
        $GLOBALS['level']       = $row['level'];
        $GLOBALS['link']        = $row['link'];

        $GLOBALS['js']          ="return confirm('Are you sure?')";
       
echo'   <tr align="center">
            <td>'. $id .'</td>
            <td>'. $status .'</td>
            <td>
                Cost: '. $cost .'  Duration: '. $duration .' </br>
                Intensity: '. $level .' </br>
                Link: '. $link .' </br>
                file: <img src="data:image/jpeg;base64,'.base64_encode($row['file'] ).'" height="40" width="60"/></br>
            </td>
            <td>';
            if ($status == 'expired') {
        echo'   <a href="checkAdInfo.php?ren='. $id .'"  onclick="'. $js .';">
                <input type="button" value="Renew">
                </a>';
            }
            else{
        echo'   <a href="checkAdInfo.php?del='. $id .'"  onclick="'. $js .';">
                <input type="button" value="Remove">
                </a>';
            }
        echo'    </td>
        </tr>'; 
        
        }

?> 
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