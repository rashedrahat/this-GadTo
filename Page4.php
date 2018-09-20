<?php
$gadget_id=$_REQUEST['gadget_id'];
if ($gadget_id=="") {
  header("Location:home.php");
		exit;
}

$conn = mysqli_connect('localhost','root','','gadto')
or die('Error connecting to MySQL server.');

  $category_name_q="SELECT * FROM gadget_info WHERE gadget_id= '$gadget_id';";

  $result=mysqli_query($conn, $category_name_q)or die(mysqli_error($conn));

while ($row=mysqli_fetch_assoc($result)) {
  $category_name= $row['category_name'];
  $gadget_name=$row['gadget_name'];

?>

<html>
<head>
    <title><?=$row['gadget_name']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
    <?php
      include 'deepHeader.php';
    ?>
    <br>
    <div  class="container text-justify" style="max-width: 900px;">
        <table class="table" border="2" align="center">
            <tr>
                <th colspan="9">
                       <?=$row['category_name']?> : <?=$row['gadget_name']?>
                </th>

            </tr>
            <tr>
               <td colspan="6">
                 <img src="Image/<?=$row['gadget_name']?>.jpg" alt="<?=$row['gadget_name']?>" width="300" height="300">
                </td>
                <td colspan="3" align="left" >
                <ul>
                <?php } ?>

<?php

if ($gadget_name==""&& $category_name=="") {
  header("Location:home.php");
		exit;
}


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
                <h4><i>Prices</i></h4>
              </td>
            </tr>
            <tr>
                <td colspan="9" align="center">
                  <?php
                  $s="SELECT * FROM price_comparison WHERE gadget_id='$gadget_id';";
                  $result2=mysqli_query($conn, $s)or die(mysqli_error($conn));

                  while ($row=mysqli_fetch_assoc($result2)) { ?>
                         <a class="page-link" style="color: red;" href="<?=$row['company_gadget_link']?>" title="Click to go this site" target="_blank">
                          <?=$row['price']?>tk@<?=$row['name']?>
                         </a>
                        <?php } ?>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="9">
                  <div class="row">
                    <div class="col">
                        <h4><i>See Reviews</i></h4>
                        <hr>
                        <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#gadget_review"> Gadget</button>
                        <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#e_commerce_company"> E-Commerce Company</button>
                    </div>

                    <div class="col">
                        <h4><i>Write Review</i></h4>
                        <hr>
                        <?php if (!empty($_SESSION)) {?>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#write_review">Gadget</button>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#write_e_commerce_company_review">E Commerce Company</button>
                      <?php } else {?>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#logInModal">Gadget</button>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#logInModal">E-Commerce Company</button>
                    <?php  }?>

                  </div>
                </div>
                </td>
            </tr>

        </table>
<!--similar gadget -->
        <div style="padding-top: 20" align="center">
          <table class="table" border="2" align="center">
            <tr >
                <th colspan="12">
                            Similar Gadget
                </th>
            </tr>
          <?php
          $gadget_title=substr("$gadget_name",0,3);
            $similar_gadget="SELECT gadget_name,gadget_id FROM gadget_info WHERE gadget_name LIKE '%$gadget_title%' AND category_name ='$category_name'AND NOT gadget_id = (SELECT gadget_id FROM gadget_info WHERE gadget_name = '$gadget_name') ";

            $result3=mysqli_query($conn, $similar_gadget)or die(mysqli_error($conn));

            while ($row=mysqli_fetch_assoc($result3)) { ?>
              <tr align="center">
                  <td>
                      <img src="Image/<?=$row['gadget_name']?>.jpg" alt="<?=$row['gadget_name']?>" width="100" height="100">
                      <a href="Page4.php?gadget_id=<?=$row['gadget_id']?>"><h3><?=$row['gadget_name']?></h3></a>
                  </td>
              </tr>
                <?php } ?>
          </table>
        </div>

    <div style="padding:5; text-align:center;">
        <a href="#next">Next</a> > <a href="#2">2</a> > .. > <a href="#2">5</a>
    </div>
<!--see review-->
    <div class="modal " id="gadget_review"  >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Gadget Review </h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row my-4">
                <?php
                $gadget_review="SELECT * FROM gadget_review WHERE gadget_id='$gadget_id'; ";
                $result=mysqli_query($conn, $gadget_review)or die(mysqli_error($conn));
                while ($row=mysqli_fetch_assoc($result)) {
                 ?>
                <div class="col-sm-3">
                  <div class="Image">
                    <img src="user.jpg" alt="review" width="100" height="100">
                  </div>
                  <div id="user_name">
                    <h4><a href="#"><?=$row['user_name']?></a></h4>
                  </div>
                  <div id="post_date">
                    <h6><?=$row['post_date']?></h6>
                  </div>
                </div>
                <div class="col-sm-9">
                  <div class="review-block-rate">
                            <?php
                            for ($i=0; $i <$row['rating'] ; $i++) {?>
                              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                <i class="far fa-star"></i>
              								</button>
                          <?php  }
                            for ($i=0; $i <(5-$row['rating']) ; $i++) { ?>
                              <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <i class="far fa-star"></i>
              								</button>
                          <?php  } ?>
                  </div>
                  <div class="review-block-description text text-left ">
                    <p><?=$row['comment']?></p>
                  </div>
                </div>
                <hr>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal" >close</button>
          </div>
        </div>
      </div>
    </div>

<!-- e_commerce_company reviews -->
    <div class="modal " id="e_commerce_company"  >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"> E-Commerce Company Review </h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row my-4">
                <?php
                $e_commerce_company_review="SELECT * FROM e_commerce_company_review WHERE gadget_id='$gadget_id'; ";
                $result=mysqli_query($conn, $e_commerce_company_review)or die(mysqli_error($conn));
                while ($row=mysqli_fetch_assoc($result)) {
                 ?>
                <div class="col-sm-3">
                  <div class="Image">
                    <img src="user.jpg" alt="review" width="100" height="100">
                  </div>
                  <div id="user_name">
                    <h4><a href="#"><?=$row['user_name']?></a></h4>
                  </div>
                  <div id="post_date">
                    <h6><?=$row['post_date']?></h6>
                  </div>
                </div>
                <div class="col-sm-9">
                  <div class="review-block-rate">
                            <?php
                            for ($i=0; $i <$row['rating'] ; $i++) {?>
                              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                <i class="far fa-star"></i>
              								</button>
                          <?php  }
                            for ($i=0; $i <(5-$row['rating']) ; $i++) { ?>
                              <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <i class="far fa-star"></i>
              								</button>
                          <?php  } ?>
                  </div>
                  <div class="review-block-description text text-left ">
                    <p><?=$row['comment']?></p>
                  </div>
                </div>
                <hr>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal" >close</button>
          </div>
        </div>
      </div>
    </div>

<!-- write_review-->
<div class="modal" id="write_review">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Give your opinion  </h5>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <form method="POST" action="reviewValidation.php" id="reviewForm">
            <table class="table" align="center" border="1">
              <tr>
                <td>
                    <div class="">
                      <label for="comment">  Post a Comment:</label>
                      <textarea class="form-control" rows="5" id="comment" name="comment">
                      </textarea>
                    </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div>
                    <label for="">Give a rating:</label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" name="star" class="form-check-input" value="5">5 Stars
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" name="star" class="form-check-input" value="4">4 Stars
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" name="star" class="form-check-input" value="3">3 Stars
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" name="star" class="form-check-input" value="2">2 Stars
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" name="star" class="form-check-input" value="1">1 Stars
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="">
                    <label for="">Will You Recommend?</label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" name="recommend" class="form-check-input" value="yes">YES
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" name="recommend" class="form-check-input" value="no">NO
                    </label>
                  </div>
                  <div class="">
                    <input type="hidden" name="destination" value="<?php echo $gadget_id; ?>"/>
                  </div>
                </td>
              </tr>
            </table>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" type="button" name="submit" id="btnReview">submit</button>
        <button class="btn btn-secondary" data-dismiss="modal" >close</button>
      </div>
    </div>
  </div>
<!-- write e_commerce_company review -->
</div>
<div class="modal" id="write_e_commerce_company_review">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Give your opinion  </h5>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <form method="POST" action="reviewValidation.php" id="e_commerce_companyReviewForm">
            <table class="table" align="center" border="1">
              <tr>
                <td>
                    <div class="">
                      <label for="comment">  Post a Comment:</label>
                      <textarea class="form-control" rows="5" id="comment" name="comment">
                      </textarea>
                    </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div>
                    <label for="">Give a rating:</label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" name="star" class="form-check-input" value="5">5 Stars
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" name="star" class="form-check-input" value="4">4 Stars
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" name="star" class="form-check-input" value="3">3 Stars
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" name="star" class="form-check-input" value="2">2 Stars
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" name="star" class="form-check-input" value="1">1 Stars
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="">
                    <label for="">Will You Recommend?</label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" name="recommend" class="form-check-input" value="yes">YES
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" name="recommend" class="form-check-input" value="no">NO
                    </label>
                  </div>
                  <div class="">
                    <input type="hidden" name="destination" value="<?php echo $gadget_id; ?>"/>
                    <input type="hidden" name="e_commerce_companyReview" value="e_commerce_companyReview">
                  </div>
                </td>
              </tr>
            </table>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" type="button" name="submit" id="btn_e_commerce_companyReview">submit</button>
        <button class="btn btn-secondary" data-dismiss="modal" >close</button>
      </div>
    </div>
  </div>

</div>
<!--log in modal-->
<div class="modal fade" id="logInModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Log In</h5>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <form id="logForm" action="log/loginModal.php" method="POST">
            <table align="center" height="200" width="400" style="padding-top: 175px">
                <tr>
                    <td align="center" colspan="2">
                        <input type="text " size="45" name='user_name' placeholder="Username" style="height: 40px " ; />
                        <br/>
                        <br/>

                        <input type="password" name='pass' placeholder="Password" size="45" style="height: 40px " ;/>
                        <br/>
                        <br/>
                        <input type="hidden" name="destination" value="<?php echo $gadget_id; ?>"/>
                    </td>
                </tr>
            </table>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" id="submitForm" type="button">submit</button>
        <button class="btn btn-secondary" data-dismiss="modal" >close</button>
      </div>
    </div>
  </div>
</div>

    <?php
      mysqli_close($conn);
      ?>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript">
    $(document).ready(function () {
        $("#logForm").on("click", function(e) {
            var postData = $(this).serializeArray();
            var formURL = $(this).attr("action");
            $.ajax({
                url: formURL,
                type: "POST",
                data: postData,
            });
            e.preventDefault();
        });
        $("#submitForm").on('click', function() {
            $("#logForm").submit();
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
      $("#reviewForm").on("click",function(e){
        var postData=$(this).serializeArray();
        var formURL=$(this).attr("action");
        $.ajax({
          url:formURL,
          type:"POST",
          data:postData,
        });
        e.preventDefault();
      });
      $("#btnReview").on('click',function(){
        $("#reviewForm").submit();
      });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function(){
      $("#e_commerce_companyReviewForm").on("click",function(e){
        var postData=$(this).serializeArray();
        var formURL=$(this).attr("action");
        $.ajax({
          url:formURL,
          type:"POST",
          data:postData,
        });
        e.preventDefault();
      });
      $("#btn_e_commerce_companyReview").on('click',function(){
        $("#e_commerce_companyReviewForm").submit();
      });
    });
    </script>


    <?php
      include 'footer.php';
    ?>
</body>
</html>
