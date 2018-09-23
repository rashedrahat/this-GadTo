<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>Insert Specs category</title>
    <style>
		p.this {
		   border-style: solid;
		   border-width: 1px;
		   border-color: gray;
		   }

		.error {color: #FF0000;}
	 </style>
</head>

<body>
	<?php
        include 'SA_Header.php';
    ?>
	<?php
		// define variables and set to empty values
		$specsCatName = "";
		$specsCatNameErr = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["specs_cat_name"])) {
			    $specsCatNameErr = "Specifications category name is required!";
			  }
			 else{
			 	$specsCatName = $_POST['specs_cat_name'];
			 	//PHP MySQLi connection building.
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "gadto";

				// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
							}

				$sql = "INSERT INTO specs_categorys (specs_category_id, specs_name) VALUES ('', '$specsCatName')";

				if (mysqli_query($conn, $sql)) {
						echo "<h3>Successfully inserted!</h3>";
						}
				else {
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
				mysqli_close($conn);
					}
			}
		?>	 
    <div>
    	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST">
			<table align="center" height="200" width="400" style="padding-top: 100px">
				<tr>
					<td>
						<b>
			                <font size="4">
				                <label align="center">&emsp;&emsp;&emsp;&emsp;Insert a new specifications category.
				                </label>
			                </font>
		                </b>
        			</td>
    			</tr>
				<tr>
			    	<td>
			            <input type="text" name="specs_cat_name" placeholder="Entry a specifications category name" size="50" style="height: 40px; width: 400px;"/><span class="error"><?php echo $specsCatNameErr?></span>
			        </td>
    			</tr>
			   
		        <tr>
		            <td align="center" colspan="2">
		                <p class="this">
		                    <br/>
		                    <input type="submit" name="insert" value="Insert">
		                    <br/>
		                    <br/>
		                </p>
		            </td>
		        </tr>
			</table>
		</form>
    </div>
    <div align="center">
    	<a href="manageSpcsCat.php">Close</a>
    </div>   
</body>
</html>

