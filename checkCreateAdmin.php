<?php 

if(isset($_POST['uname'])&&isset($_POST['email'])&&isset($_POST['pass'])&&isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['phone']))
	{
		$uname 	=$_POST['uname'];
		$email	=$_POST['email'];
		$pass 	=$_POST['pass'];
		$fname	=$_POST['fname'];
		$lname	=$_POST['lname'];
		$phone	=$_POST['phone'];


		if(empty($uname))
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

		elseif(empty($fname))
		{
			header("Location: createAdmin.php?ret=erroremptyfirstname");
		}

		elseif(empty($lname))
		{
			header("Location: createAdmin.php?ret=erroremptylastname");
		}

		elseif(empty($phone))
		{
			header("Location: createAdmin.php?ret=erroremptyphone");
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
			 	$sql = "insert into user values ('','$uname','$email','$pass','$fname','$lname','$phone','admin','active')";
		
		        if(mysqli_query($conn, $sql))
		        {
			    header("Location: createdAdmin.php");
		        }
		        else
		        {
			    header("Location: createAdmin.php?ret=errorOccured");
		        }
		        mysqli_close($conn);
		     }
	    }
	}	
 ?>