<?php
session_start();

if ($_SESSION['uname'] != true)
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
		// define variables and set to empty values
		$catName = "";
		$catNameErr = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["cat_name"])) {
			    $catNameErr = "Gadget category name is required!";
			  }
			 else{
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

				$sql = "INSERT INTO gadget_categorys (category_name) VALUES ('$catName')";

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
    	<form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="POST">
			<table align="center" height="200" width="400" style="padding-top: 100px">
				<tr>
					<td>
						<b>
			                <font size="4">
				                <label align="center">&emsp;&emsp;Insert a new gadget to the gadget categories.
				                </label>
			                </font>
		                </b>
        			</td>
    			</tr>
				<tr>
			    	<td>
			            <input type="text" name="cat_name" placeholder="Entry a gadget category name" size="50" style="height: 40px; width: 400px;"><span class="error"><?php echo $catNameErr;?></span>
			        </td>
    			</tr>
		        <tr>
		            <td align="center" colspan="2">
		                <p class="this">
		                    <br/>
		                    <input type="submit" name="insert" value="Insert"/>
		                    <br/>
		                    <br/>
		                </p>
		            </td>
		        </tr>
			</table>
		</form>
    </div>
    <div align="center">
    	<a href="manageGadCat_2.php">Close</a>
    </div>   
</body>
</html>

