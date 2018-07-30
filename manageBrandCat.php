<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>Manage Brand Categories</title>
</head>

<body>
    <br><br><br><br><br><br>
    <h1 align="center"><i>Gadget Brand Categories Info</i></h1><br>
    <table align="center" border="" height="350" width="800">

        <tr align="center">
            <th>Brand Name</th>
            <th>Number of Gadgets</th>
            <th>Action&emsp;</th>


        </tr>
        <tr align="center">
            
            <td>
                Apple
            </td>
            <td>2056</td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>



        <tr align="center">
            
            
            <td>Samsung</td>
            <td>
                2018
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>







        <tr align="center">
            
            <td>OnePlus</td>
            <td>
                1067
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>






        <tr align="center">
            
            <td>Nokia</td>
            <td>
                794
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>





        <tr align="center">
            
            <td>mi</td>
            <td>
                555
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>





    







    </table>
    <br><br>
    <div align="center">
      <a href="insertBrand.php">Insert a New</a> | <a href="superAdminPortal.php">Go back to Profile Home</a>
    </div> 
</div>
</body>

</html>