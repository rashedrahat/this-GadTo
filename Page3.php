<?php
$brand_name=$_REQUEST['brand_name'];
$category_name=$_REQUEST['category_name'];
if ($brand_name==""&& $category_name=="") {
  header("Location:home.php");
		exit;
}


 $conn = mysqli_connect('localhost','root','','gadto')
 or die('Error connecting to MySQL server.');
?>
<html>
<head>
    <title><?php echo $brand_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <?php
      include 'deepHeader.php';
    ?>
    <br>
    <div class="container text-justify" style="max-width: 900px;">
        <table class="table" border="2" align="center" >
            <tr>
                <th colspan="5">Brand: <?php echo $brand_name ?></th>
            </tr>

            <?php
              $gadget_info="SELECT * FROM gadget_info WHERE brand_id= (SELECT brand_id FROM brand_categorys WHERE brand_name='$brand_name' AND category_name='$category_name');";

              $result=mysqli_query($conn, $gadget_info)or die(mysqli_error($conn));
              while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <td>
                    <a class="page-link" href="Page4.php?gadget_id=<?php echo $row['gadget_id'];?>">
                      <h4 class="text-center"><?php echo $row['gadget_name']; ?> </h4>
                      <div class="text-center">
                        <img src="Image/<?php echo $row['gadget_name'];?>.jpg" class="rounded " alt="<?php echo $row['gadget_name'];?>" width="20%" height="20%">
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
    <?php
      mysqli_close($conn);
      ?>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <?php
      include 'footer.php';
    ?>
 </body>
 </html>
