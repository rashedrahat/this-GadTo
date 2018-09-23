<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>FORM | Admin Sign-Up</title>
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
		$catName = $brandName = "";
		$catNameErr = $brandNameErr = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["brand_name"])) {
			    $brandNameErr = "Brand name is required!";
			  }
			if (empty($_POST["cat_name"])) {
			    $catNameErr = "Gadget category name is required!";
			  }
			 else{
			 	$brandName = $_POST['brand_name'];
			 	$catName = $_POST['cat_name'];
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

				$sql = "INSERT INTO brand_categorys (brand_id, brand_name, category_name) 
				VALUES ('', '$brandName', '$catName')";

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
				                <label align="center">&emsp;&emsp;Insert a new brand to the gadget categories.
				                </label>
			                </font>
		                </b>
        			</td>
    			</tr>
				<tr>
			    	<td>
			            <input type="text" name="brand_name" placeholder="Entry a brand name" size="50" style="height: 40px; width: 400px;"/><span class="error"><?php echo $brandNameErr;?></span>
			        </td>
    			</tr>
    			<tr>
			    	<td>
			            <input type="text" name="cat_name" placeholder="Entry a gadget category name" size="50" style="height: 40px; width: 400px;"/><span class="error"><?php echo $catNameErr;?></span>
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
    	<a href="manageBrandCat.php">Close</a>
    </div>   
</body>
</html>

