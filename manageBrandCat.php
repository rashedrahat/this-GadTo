<?php
session_start();

if ($_SESSION['user_name'] != true)
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
        

<?php

        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname     = "gadto";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sql               =    "SELECT brand_name, COUNT(brand_name) AS NumberOfGadget
                                FROM brand_gad_cat
                                GROUP BY brand_name;";
        $result            = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
        $GLOBALS['brand_name']  = $row['brand_name'];
        $GLOBALS['NumberOfGadget']  = $row['NumberOfGadget'];
        $GLOBALS['js']     ="return confirm('Are you sure?')";
       
echo'       <tr align="center">
            <td>'. $brand_name .'</td>
            <td>'. $NumberOfGadget .'</td>
            <td>
                <a href="manageBrandCat.php?del='.$brand_name.'"  onclick="'.$js.';">
                <input type="button" value="Remove">
                </a>
            </td>
        </tr>'; 
        
        }
?> 


    </table>
    <br><br>
    <div align="center">
      <a href="insertBrand.php">Insert a New</a> | <a href="superAdminPortal.php">Go back to Profile Home</a>
    </div> 
</div>
</body>

</html>

<?php
    if(isset($_GET['del'])){
        $del_id = $_GET['del'];

        mysqli_query($conn, "DELETE FROM brand_categorys
                            WHERE brand_name='$del_id';");
        header("Location: manageBrandCat.php");
    }
    
?>