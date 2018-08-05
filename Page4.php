<?php
$gadget_id=$_REQUEST['gadget_id'];
$conn = mysqli_connect('localhost','root','','gadto')
or die('Error connecting to MySQL server.');

  $category_name_q="SELECT * FROM gadget_info WHERE gadget_id= '$gadget_id';";

  $result=mysqli_query($conn, $category_name_q)or die(mysqli_error($conn));

while ($row=mysqli_fetch_assoc($result)) {
  $category_name= $row['category_name'];
  $gadget_name=$row['gadget_name'];
}

?>

<html>
<head>
    <title><?=$gadget_name?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <div style="padding:10; text-align:right;">
        <!-- Load icon library -->
                            &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                            <!-- The form -->
                            <form class="example" action="action_page.php">
                                <input type="text" placeholder="Search" name="search">
                                <button type="submit">
                                    <i class="fa fa-search"></i>

                                </button>
        <a href="index.php"><img style="float: left; padding-left: 10" src="gadto.jpg" width="80" height="50"></a>
        <a href="home.php">Home</a> | <a href=#about>About Us</a> | <a href="SignIn.php">Sign In</a> | <a href="SignUp.php">Sign Up</a> | <a href=#FAQ>FAQ</a> | <a href=#help>Help</a> | <a href=#feedback>Feedback</a>
    </div>
    <div  class="container text-justify" style="max-width: 900px;">
        <table class="table" border="2" align="center">
            <tr>
                <th colspan="9">
                       <?php echo $category_name?> : <?php echo $gadget_name?>
                </th>

            </tr>
            <tr>
               <td colspan="6">
                 <img src="Image/<?=$gadget_name?>.jpg" alt="<?=$gadget_name?>" width="400" height="400">
                </td>
                <td colspan="3" align="left" >
                <ul>

<?php
if ($category_name=='Computer') {
  // coechode

$sp="SELECT * FROM computer_specs WHERE gadget_id=(SELECT gadget_id FROM gadget_info WHERE gadget_name = '$gadget_name');";
$result1=mysqli_query($conn, $sp)or die(mysqli_error($conn));

while ($row=mysqli_fetch_assoc($result1)) {
  ?>
    <li>Processor: <?=$row['processor']?></li>
    <li>Processor clock speed: <?=$row['processor_clock_speed']?></li>
    <li>Display: <?=$row['display']?></li>
    <li>RAM: <?=$row['RAM']?></li>
    <li>Ram Type: <?=$row['RAM_type']?></li>
    <li>HDD: <?=$row['HDD']?></li>
    <li>OS: <?=$row['OS']?></li>

<?php } }
elseif ($category_name=='Watch') {
  // code...
  //write code here for database quire


  ?>
  <h2> <span style="color:red">we will  update this as soon as possible </span>  </h2>

  <?php
}
elseif ($category_name=='Mobile') {
  // code...
  $sp="SELECT * FROM mobile_specs WHERE gadget_id=(SELECT gadget_id FROM gadget_info WHERE gadget_name = '$gadget_name');";
  $result1=mysqli_query($conn, $sp)or die(mysqli_error($conn));

  while ($row=mysqli_fetch_assoc($result1)) {
    ?>
    <li>Display: <?=$row['display']?></li>
    <li>RAM: <?=$row['RAM']?></li>
    <li>camera: <?=$row['camera']?></li>
    <li>battery: <?=$row['battery']?></li>

  <?php }



}
 ?>

                </ul>
                </td>

            </tr>

            <tr>
                <td colspan="9" align="center">
                        <a href="www.daraz.com.bd">BDT 60000 @Daraz</a> | <a href="#Ryans">BDT 60500 @Ryans</a> | <a href="#Kaymu">BDT 61000 @Kaymu</a> | <a href="#StarTech">BDT 62000 @StarTech</a> | <a href="#Global">BDT 63000 @Global</a>

                </td>
            </tr>

            <tr>
                <td align="center" colspan="9">
                    See Review => <a href="see_gadget_review.php">Gadget</a> OR <a href="see_company_review.php">E-Commerce Company</a> | </a> Write Review => <a href="write_review.php">Gadget</a> OR <a href="write_review.php">E-Commerce Company</a>
                </td>
            </tr>

        </table>
    </div>
    <div style="padding-top: 20" align="center">
        <table align="center" border="1" width="1000" height="250">
            <tr >
                <th colspan="12">
                            Similar Gadget
                </th>
            </tr>

            <tr align="center">
                <td>
                    <img src="" alt="ASUS SQ107" width="20" height="30">
                    <a href="#Page4.php"><h3>Asus SQ107</h3></a>
                </td>

                <td>
                    <img src="" alt="ASUS ZX525" width="20" height="30">
                    <a href="#AsusZX525"><h3>Asus ZX525</h3></a>
                </td>

                <td>
                        <img src="" alt="Gadget Name" width="20" height="30">
                        <a href="#G3"><h3>G3</h3></a>
                </td>


                <td>
                        <img src="" alt="Gadget Name" width="20" height="30">
                        <a href="#G3"><h3>G4</h3></a>
                </td>


                <td>
                        <img src="" alt="Gadget Name" width="20" height="30">
                        <a href="#G3"><h3>G5</h3></a>
                </td>


                <td>
                        <img src="" alt="Gadget Name" width="20" height="30">
                        <a href="#G3"><h3>G6</h3></a>
                </td>

                <td>
                        <img src="" alt="Gadget Name" width="20" height="30">
                        <a href="#G3"><h3>G7</h3></a>
                </td>
            </tr>

            <tr align="center">

                    <td>
                            <img src="" alt="Gadget Name" width="20" height="30">
                            <a href="#G3"><h3>G8</h3></a>
                    </td>

                <td>
                        <img src="" alt="Gadget Name" width="20" height="30">
                        <a href="#G3"><h3>G9</h3></a>
                </td>

                <td>
                        <img src="" alt="Gadget Name" width="20" height="30">
                        <a href="#G3"><h3>G10</h3></a>
                </td>

                <td>
                        <img src="" alt="Gadget Name" width="20" height="30">
                        <a href="#G3"><h3>G11</h3></a>
                </td>

                <td>
                        <img src="" alt="Gadget Name" width="20" height="30">
                        <a href="#G3"><h3>G12</h3></a>
                </td>

                <td>
                        <img src="" alt="Gadget Name" width="20" height="30">
                        <a href="#G3"><h3>G13</h3></a>
                </td>

                <td>
                        <img src="" alt="Gadget Name" width="20" height="30">
                        <a href="#G3"><h3>G14</h3></a>
            </tr>
        </table>
    </div>
    <div style="padding:5; text-align:center;">
        <a href="#next">Next</a> > <a href="#2">2</a> > .. > <a href="#2">5</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
