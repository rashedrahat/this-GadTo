<?php
$gadget_id=$_REQUEST['gadget_id'];

if ($gadget_id=="") {
  header("Location:home.php");
		exit;
}

 $conn = mysqli_connect('localhost','root','','gadto')
 or die('Error connecting to MySQL server.');

?>


<!DOCTYPE html>
<html>
  <head>
    <style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #111;
    }

    .review-block-rate{
	font-size:30px;
	margin-bottom:15px;
}
.review-block-description{
  font-size: 20px
}


    </style>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div style="padding:10; text-align:right;">
            <!-- Load icon library -->
                                &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;


                                <!-- The form -->
                                <form class="example" action="action_page.php">
                                    <input type="text" placeholder="Search" name="search">
                                    <button type="submit">
                                        <i class="fa fa-search"></i>

                                    </button>
            <a href="index.php"><img style="float: left; padding-left: 10" src="gadto.jpg" width="80" height="50"></a>
            <a href="home.php">Home</a> | <a href=#about>About Us</a> | <a href="SignIn.php">Sign In</a> | <a href="SignUp.php">Sign Up</a> | <a href=#FAQ>FAQ</a> | <a href=#help>Help</a> | <a href=#feedback>Feedback</a>
        </div>
        <br><br><br><br><br>
<!--
        <div style="color: violet;">
        	<ul>
          <li><a class="" href="#Review">Rating & Reviews</a></li>
          </ul>
          <br>
          <br>
          <br>
          <table align="center" width="1500" height="300">
            <tr>
              <td align="center">
                  <img src="rate.png" alt="Rating" width="200" height="200">
                  <br>Based on 1,014,004 ratings
              </td>
              <td align="center">
                  <img src="1.jpg" alt="Likes" width="200" height="200" >
                  <br><font color="grey"></font>
                  Based on 77 recomandation.
                  <br><b>Would you recommand this item?</b>
                  <br><button type="button" value="YES_RECOMMEND" onclick="window.location.href='write_review.php'">YES!</button> <button type="button" value="NO_RECOMMEND" onclick="window.location.href='write_review.php'">No!</button>
              </td>

              <td align="center">
                  <img src="3.jpg" alt="Stars" width="200" height="200">
                  <br><button type="button" value="WRITE A REVIEW" onclick="window.location.href='write_review.php'"><font>WRITE A REVIEW!</font</button>
              </td>

            </tr>
          </table>


                <ul>
                  <li><a class="active" href="#Review">Displaying Reviewing 1-2 of 2</a></li>&emsp;&emsp;&emsp;&emsp;&emsp;
                  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        		  <li><a class="active" href="#Review">Sort By:</a></li>
                  <li><a class="active" href="#Review"><font color="yellow"></font><u>Most Helpful</u></a></li>
                  <li><a class="active" href="#Review">Most Recent</a></li>
                  <li><a class="active" href="#Review">Filter By:</a></li>
                  <li><a class="active" href="#Review"><select><option>All Stars</option><option>4 Stars</option><option>3 Stars</option><option>2 Stars</option><option>1 Stars</option></select></a></li>
                </ul>

            <table>
                <tr>
            		<th>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Pros:
                    </th>
                    <td>
            		<div align="left">
                            <input type="checkbox" name="pros" value="battery" checked>BAttery Life (34)<br>
                            <input type="checkbox" name="pros" value="performance">Performance (28)<br>
                            <input type="checkbox" name="pros" value="values">Value for money (23)<br>
            		</div>
                    </td>
            		<th>
                        Cons:
                    </th>
                    <td colspan="1">
                        <input type="checkbox" name="cons" value="poor">Poor Display (40)<br>
                        <input type="checkbox" name="cons" value="heatting" checked>Heatting (15)<br>
            </div>


                </td>
              </tr>
          </table>
-->
<div class="modal" id="gadget_review">

  <div class="container border">

      <div class="row bg-secondary text-white">
        <?php
        $review="SELECT * FROM gadget_review WHERE gadget_id='$gadget_id'; ";
        $result=mysqli_query($conn, $review)or die(mysqli_error($conn));

        while ($row=mysqli_fetch_assoc($result)) {
          $rr= $row['rating'];
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
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
                  <?php  }
                    for ($i=0; $i <(5-$row['rating']) ; $i++) { ?>
                      <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
      								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      								</button>
                  <?php  }




                     ?>



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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
