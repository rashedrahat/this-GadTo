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
	 </style>
</head>

<body>
    <div>
    	<form action=""  method="POST">
			<table align="center" height="200" width="400" style="padding-top: 100px">
				<tr>
					<td>
						<b>
			                <font size="3">
				                <label align="center">&emsp;&emsp;&emsp;&emsp;Insert a new gadget to the gadget categories.
				                </label>
			                </font>
		                </b>
        			</td>
    			</tr>
				<tr>
			    	<td>
			            <input type="text" name="cat_name" placeholder="Entry a gadget category name" size="50" style="height: 40px; width: 400px;"/>
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
		   			<?php
					if (isset($_post['insert'])) {
					$catName = $_POST['cat_name'];
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

					$sql = "INSERT INTO gadget_categorys VALUES ($catName)";

					if (mysqli_query($conn, $sql)) {
					    header("insertedGadCat.php");
					} else {
					    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}

					mysqli_close($conn);
					}
					?>
    </div>
    <div align="center">
    	<a href="manageGadCat.php">Close</a>
    </div>   
</body>
</html>

