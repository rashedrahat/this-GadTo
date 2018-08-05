<?php
$category_name=$_REQUEST['category_name'];
 $conn = mysqli_connect('localhost','root','','gadto')
 or die('Error connecting to MySQL server.');
?>

<html>
<head>
    <title><?php echo $category_name ?></title>
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
    <div class="container text-justify" style="max-width: 900px;">
            <table class="table " align="center" border="2">
            <tr>
                <th colspan="5">Category: <?php echo $category_name ?></th>
            </tr>

            <?php
              $brand="SELECT * FROM brand_categorys WHERE category_name='$category_name';";
              $result=mysqli_query($conn, $brand)or die(mysqli_error($conn));
              while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <td>
                    <a class="page-link" href="Page3.php?brand_name=<?php echo $row['brand_name']; ?>&&category_name=<?php echo $category_name; ?> ">
                      <h4 class="text-center"><?php echo $row['brand_name']; ?> </h4>
                      <div class="text-center">
                        <img src="Image/<?php echo $row['brand_name'];?>.jpg" class="rounded " alt="<?php echo $row['brand_name'];?>" width="20%" height="20%">
                      </div>
                    </a>
                  </td>
                </tr>

              <?php } ?>

        </table>
        </div>
        <div style="padding:5; text-align:center;">
        <a href="#next">Next</a> > <a href="#2">2</a> > .. > <a href="#2">5</a>
        </div>

        <?php 
          mysqli_close($conn);
          ?>


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
