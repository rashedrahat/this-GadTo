<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>Manage Specifications Categories</title>
</head>

<body>
    <br><br><br><br><br><br>
    <h1 align="center"><i>Gadget's Specifications Categories Info</i></h1><br>
    <table align="center" border="" height="350" width="800">

        <tr align="center">
            <th>Category Name</th>
            <th>Number of Gadgets</th>
            <th>Action&emsp;</th>
        </tr>

<?php

        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname     = "gadto";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sql               =    "SELECT specs_name, COUNT(gadget_name) AS NumberOfGadget
                                FROM gad_spcs_cat
                                GROUP BY specs_name;";
        $result            = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
        $GLOBALS['specs_name']  = $row['specs_name'];
        $GLOBALS['NumberOfGadget']  = $row['NumberOfGadget'];
        $GLOBALS['js']     ="return confirm('Are you sure?')";
       
echo'       <tr align="center">
            <td>'. $specs_name .'</td>
            <td>'. $NumberOfGadget .'</td>
            <td>
                <a href="manageSpecsCat.php?del='.$specs_name.'"  onclick="'.$js.';">
                <input type="button" value="Remove">
                </a>
            </td>
        </tr>'; 
        
        }
?> 


    </table>
    <br><br>
    <div align="center">
      <a href="insertSpcs.php">Insert a New</a> | <a href="superAdminPortal.php">Go back to Profile Home</a>
    </div> 
</div>
</body>

</html>

<?php
    if(isset($_GET['del'])){
        $del_id = $_GET['del'];

        mysqli_query($conn, "DELETE FROM specs_categorys
                            WHERE specs_name='$del_id';");
        header("Location: manageSpecsCat.php");
    }
    
?>