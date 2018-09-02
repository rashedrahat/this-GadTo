<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>Manage Gadget Categories</title>
</head>

<body>
    <br><br><br><br><br><br>
    <h1 align="center"><i>Gadget Categories Info</i></h1><br>
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

        $sql               =    "SELECT category_name, COUNT(gadget_name) AS NumberOfGadget
                                FROM gadget_info
                                GROUP BY category_name;";
        $result            = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
        $GLOBALS['category_name']  = $row['category_name'];
        $GLOBALS['NumberOfGadget']  = $row['NumberOfGadget'];
        $GLOBALS['js']     ="return confirm('Are you sure?')";
       
echo'       <tr align="center">
            <td>'. $category_name .'</td>
            <td>'. $NumberOfGadget .'</td>
            <td>
                <a href="manageGadCat_2.php?del='.$category_name.'"  onclick="'.$js.';">
                <input type="button" value="Remove">
                </a>
            </td>
        </tr>'; 
        
        }
?> 






    </table>
    <br><br>
    <div align="center">
      <a href="insertGad_2.php">Insert a New</a> | <a href="adminPortal.php">Go back to Profile Home</a>
    </div> 
</div>
</body>

</html>


<?php
    if(isset($_GET['del'])){
        $del_id = $_GET['del'];

        mysqli_query($conn, "DELETE FROM gadget_categorys
                            WHERE category_name='$del_id';");
        header("Location: manageGadCat_2.php");
    }
    
?>