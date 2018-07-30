<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>Post Ad Review</title>
</head>

<body>
<br><br><br><br><br>
    <h1 align="center"><i>Reviews Info</i></h1>
<div align="center">
     Filter By:

                        <select>
                            <option>Positive</option>
                            <option>Negative</option>
                        </select>
</div><br>
    <table align="center" border="" height="350" width="800">

        <tr align="center">
            <th>Review ID</th>
            <th>User Name</th>
            <th>Coment</th>
            <th>Date</th>
            <th>Action&emsp;</th>


        </tr>
        <tr align="center">
            <td>
                1001
            </td>
            <td>
                mr.x
            </td>
            <td>Good,Super Phone</td>
            <td>
                21-Jul-18
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>



        <tr align="center">
            <td>
                1002
            </td>
            <td>
                imr
            </td>
            <td>Yea,Like it</td>
            <td>
                24-Jul-18
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>







        <tr align="center"> 
            <td>
                1003
            </td>
            <td>
                itsi
            </td>
            <td>Cool,Features</td>
            <td>
                25-Jul-18
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>






        <tr align="center">
            <td>
                1007
            </td>
            <td>
                mr.x
            </td>
            <td>Awesome</td>
            <td>
                26-Jul-18
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>





        <tr align="center">
            <td>
                1011
            </td>
            <td>
                mr.x
            </td>
            <td>Good,Super Phone</td>
            <td>
                26-Jul-18
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>





        <tr align="center">
            <td>
                1012
            </td>
            <td>
                mr.x
            </td>
            <td>Good,Super Phone</td>
            <td>
                27-Jul-18
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>






        <tr align="center">
            <td>
                1013
            </td>
            <td>
                mr.x
            </td>
            <td>Good,Super Phone</td>
            <td>
                31-Jul-18
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>







    </table>
    <br><br>
    <div align="center">
    <a href="superAdminPortal.php">Go back to Profile Home</a>
    </div>
</body>

</html>