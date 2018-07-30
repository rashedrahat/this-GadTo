<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>Manage Company</title>
</head>

<body>
    <br><br><br><br><br>
    <h1 align="center"><i>Gadget's Company Info</i></h1>
<div align="center">
     Filter By:

                        <select>
                            <option>Daraz</option>
                            <option>Ryans</option>
                            <option>Star Tech</option>
                            <option>Kaymu</option>

                        </select>
</div><br>
    <table align="center" border="" height="350" width="800">

        <tr align="center">
            <th>Price ID</th>
            <th>Company</th>
            <th>Action&emsp;</th>


        </tr>
        <tr align="center">
            
            <td>
                101
            </td>
            <td>Daraz</td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>



        <tr align="center">
            
            
            <td>
                102
            </td>
            <td>Daraz</td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>







        <tr align="center">
            
            <td>
                103
            </td>
            <td>Daraz</td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>






        <tr align="center">
            
            <td>
                104
            </td>
            <td>Daraz</td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>





        <tr align="center">
            
            <td>
                105
            </td>
            <td>Daraz</td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>





    







    </table>
    <br><br>
    <div align="center">
    <a href="superAdminPortal.php">Go back to Profile Home</a>
    </div> 
</div>
</body>

</html>