<?php
//create connection
 $conn = mysqli_connect('localhost','root','','gadto')
 or die('Error connecting to MySQL server.');
?>

<html>
<head>
    <title>Website Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php
        include 'header.php';
    ?>
    <div style="padding-left:20px;">
        <div style="padding-top: 15px;">
            <table align="center" border="1" width="1000" height="300">
                <tr>
                    <th align="center" colspan="3">
                        <h2><i>GadTo (Gadget Tottho) is different. Here is how:</i></h2>
                    </th>
                </tr>

                <tr>
                    <td align="center">
                        <img src="gs.jpg" alt="Specifications icon" width="50" height="60">
                        <h3>Gadget Specification</h3><br>
                        Each gadget is shown with lots of specifications to give best overview about a gadget for the passionte gadget lover.
                    </td>
                    <td align="center">
                        <img src="tk.png" alt="Price icon" width="50" height="60">
                        <h3>
                            Gadget Price
                        </h3><br>
                        Height, Lowest & average. No price is missing. All in one place for you to choose the best desirable price among all the prices.
                    </td>

                    <td align="center">
                        <img src="rr.jpg" alt="Review icon" width="50" height="60">
                        <h3>
                            Gadget & E-commerce Company reviews
                        </h3>
                        <br>
                        Share us feelings by giving a review. Earn trust by helping people through your reviews. Right review to choose between what to do & what not to do.
                    </td>
                </tr>
            </table>
        </div>
        <div class="container text-justify" style="padding-top: 20">
            <table class="table " align="center" border="2" >
                <tr >
                    <th align="center" colspan="9">
                        <h3 class="text text-success">Categories</h3>
                    </th>
                </tr>

                  <?php
                    $categories="SELECT * from gadget_categorys";
                    $result=mysqli_query($conn, $categories)or die(mysqli_error($conn));
                    while ($row=mysqli_fetch_assoc($result)) {
                      ?>
                      <tr>
                        <td>
                          <a class="page-link" href="Page2.php?category_name=<?php echo $row['category_name']; ?> ">
                            <h4 class="text-center"><?php echo $row['category_name']; ?> </h4>
                            <div class="text-center">
                              <img src="Image/<?php echo $row['category_name'];?>.jpg" class="rounded " alt="<?php echo $row['category_name'];?>" width="40%" height="40%">
                            </div>
                          </a>
                        </td>
                      </tr>


                    <?php } ?>
                    <tr>
                      <td>
                        <div >
                          <nav aria-label="Page navigation ">
                            <ul class="pagination justify-content-center">
                              <li class="page-item ">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                      </td>
                    </tr>
            </table>

        </div>
    </div>
    <?php
        include 'footer.php';
    ?>

    <?php
      mysqli_close($conn);
      ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
