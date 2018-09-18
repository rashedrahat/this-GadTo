 <?php
 session_start();
 $gadget_id= $_POST['destination'];
 $user_name=$_SESSION['user_name'];
 $post_date=date("Y/m/d");
 $r_type_id='1';

 $servername ="localhost";
 $username 	="root";
 $password 	="";
 $dbname 	="gadto";
 $conn 		= mysqli_connect($servername, $username, $password, $dbname);
 if(isset($_POST["comment"]) && isset($_POST["star"]) && isset($_POST["recommend"]))
 {
   $comment=$_POST["comment"];
   $rating=$_POST["star"];
   $recommend=$_POST["recommend"];
   if(!$conn){
     die("Connection Error!".mysqli_connect_error());
     header("Location: page4.php?gadget_id=$gadget_id");
   }
 		else{
      if (isset($_POST['e_commerce_companyReview'])) {
        $conn 		= mysqli_connect($servername, $username, $password, $dbname);
        $sql 		= "INSERT INTO review (review_id, post_date, user_name, comment, rating, recommend, r_type_id, gadget_id) VALUES ('','$post_date','$user_name','$comment','$rating','$recommend','2','$gadget_id')";
        $result		= mysqli_query($conn, $sql);
        header("Location: page4.php?gadget_id=$gadget_id");
        exit;
      } else {
        $conn 		= mysqli_connect($servername, $username, $password, $dbname);
        $sql 		= "INSERT INTO review (review_id, post_date, user_name, comment, rating, recommend, r_type_id, gadget_id) VALUES ('','$post_date','$user_name','$comment','$rating','$recommend','1','$gadget_id')";
        $result		= mysqli_query($conn, $sql);
        header("Location: page4.php?gadget_id=$gadget_id");
        exit;
      }


 		}
 	}else {
    mysqli_close($conn);
    header("Location: page4.php?gadget_id=$gadget_id");
    exit;
   }
 ?>
