<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>Manage Specifications Info</title>
</head>

<body>
    <br><br><br><br><br>
    <h1 align="center"><i>Gadget's Specifications Info</i></h1>
<div align="center">
     Filter By:

                        <select>
                            <option>Mobile</option>
                            <option>Computer</option>
                            <option>Watch</option>
                            <option>Furniture</option>
                            <option>Beauty</option>

                        </select>
</div><br>
    <table align="center" border="" height="350" width="800">

        <tr align="center">
            <th>Specifications ID</th>
            <th>Specifictions Info Type</th>
            <th>Action&emsp;</th>


        </tr>
        <tr align="center">
            
            <td>
                101
            </td>
            <td>Mobile</td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>



        <tr align="center">
            
            
            <td>
                102
            </td>
            <td>Mobile</td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>







        <tr align="center">
            
            <td>
                103
            </td>
            <td>Mobile</td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>






        <tr align="center">
            
            <td>
                104
            </td>
            <td>Mobile</td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>





        <tr align="center">
            
            <td>
                105
            </td>
            <td>Mobile</td>
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