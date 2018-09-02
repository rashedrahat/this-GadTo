<?php
session_start();

if ($_SESSION['user_name'] != true)
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

</div><br>
    <table align="center" border="" height="350" width="800">

        <tr align="center">
            <th>Price ID</th>
            <th>Company</th>
            <th>Action&emsp;</th>


        </tr>
        
<?php

        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname     = "gadto";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sql               =    "SELECT price_id, name FROM company_info;";
        $result            = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
        $GLOBALS['price_id']  = $row['price_id'];
        $GLOBALS['name']  = $row['name'];
        $GLOBALS['js']     ="return confirm('Are you sure?')";
       
echo'       <tr align="center">
            <td>'. $price_id .'</td>
            <td>'. $name .'</td>
            <td>
                <a href="manageCompany_2.php?del='.$price_id.'"  onclick="'.$js.';">
                <input type="button" value="Remove">
                </a>
            </td>
        </tr>'; 
        
        }
?> 


    </table>
    <br><br>
    <div align="center">
    <a href="adminPortal.php">Go back to Profile Home</a>
    </div> 
</div>
</body>
</html>

<?php
    if(isset($_GET['del'])){
        $del_id = $_GET['del'];

        mysqli_query($conn, "DELETE FROM company_info
                            WHERE price_id='$del_id';");
        header("Location: manageCompany_2.php");
    }
    
?>