<?php 

if(isset($_POST['user_name'])&&isset($_POST['email'])&&isset($_POST['pass'])&&isset($_POST['first_name'])&&isset($_POST['last_name'])&&isset($_POST['phone'])&&isset($_POST['gender']))
	{
		$user_name 		=$_POST['user_name'];
		$email			=$_POST['email'];
		$pass 			=$_POST['pass'];
		$first_name		=$_POST['first_name'];
		$last_name		=$_POST['last_name'];
		$phone			=$_POST['phone'];
		$gender			=$_POST['gender'];

		if(empty($user_name))
		{
			header("Location: createAdmin.php?ret=erroremptyusername");
		}

		elseif(empty($email))
		{
			header("Location: createAdmin.php?ret=erroremptyemail");
		}

		elseif(empty($pass))
		{
			header("Location: createAdmin.php?ret=erroremptypass");
		}

		elseif(strlen($pass)<8)
		{
			header("Location: createAdmin.php?ret=errorpasslenght");
		}

		elseif(empty($first_name))
		{
			header("Location: createAdmin.php?ret=erroremptyfirstname");
		}

		elseif(empty($last_name))
		{
			header("Location: createAdmin.php?ret=erroremptylastname");
		}

		elseif(empty($phone))
		{
			header("Location: createAdmin.php?ret=erroremptyphone");
		}

		elseif(empty($gender))
		{
			header("Location: createAdmin.php?ret=erroremptygender");
		}

		else
		{
		     $servername   	="localhost";
		     $username 		="root";
		     $password 		="";
		     $dbname 	    ="gadto";
		
		     $conn 			= mysqli_connect($servername, $username, $password, $dbname);
		
		     if(!$conn)
		     {
			  die("Connection Error!".mysqli_connect_error());
			 }
			 else
			 {
			 	$sql = "insert into user_info values ('$user_name','$email','$pass','$first_name','$last_name','$phone','$gender','nu','pending')";
		
		        if(mysqli_query($conn, $sql))
		        {
			    header("Location: SignIn.php");
		        }
		        else
		        {
			    header("Location: SignUp.php");
		        }
		        mysqli_close($conn);
		     }
	    }
	}	
 ?>