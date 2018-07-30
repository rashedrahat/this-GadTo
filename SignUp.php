<html>

<head>
    <title>FORM | Sign-Up</title>
    <style>
		p.this {
		   border-style: solid;
		   border-width: 1px;
		   border-color: gray;
		   }
	 </style>
</head>

<body>
	<div style="padding:10; text-align:right;">
        <!-- Load icon library -->
                            &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <a href="index.php"><img style="float: left; padding-left: 10" src="gadto.jpg" width="80" height="50"></a>
        <a href="home.php">Home</a> | <a href=#about>About Us</a> | <a href="SignIn.php">Sign In</a> | <a href="SignUp.php">Sign Up</a> | <a href=#FAQ>FAQ</a> | <a href=#help>Help</a> | <a href=#feedback>Feedback</a>
    </div>
    <div>
    	<form action="checkSignUp.php"  method="POST">
			<table align="center" height="200" width="400" style="padding-top: 100px">
				<tr>
					<td>
						<b>
			                <font size="4">
				                <label align="center"> Hello & Welcome :) Please complete your details.
				                </label>
			                </font>
		                </b>
        			</td>
    			</tr>
				<tr>
			    	<td>
			            <input type="text" name="uname" placeholder="Create a username" size="50" style="height: 40px; width: 400px;"/>
			        </td>
    			</tr>
			    <tr>
			        <td>
			            <input type="email" name="email" placeholder="Your email address" size="50" style="height: 40px; width: 400px;"/>
			        </td>
			    </tr>
			    <tr>
			        <td>
			            <input type="password" name="pass" placeholder="Create your password" size="50"style="height: 40px; width: 400px;"/>
			        </td>
			    </tr>
			    <tr>
			        <td>
			            <input type="text" name="fname" placeholder="First Name" size="26" style="height: 40px; width: 197px;"/>
			            <input type="text" name="lname" placeholder="Last Name" size="25" style="height: 40px; width: 198px;"/>
			        </td>
			    </tr>
			    <tr>
			        <td>
			            <input type="text" name="phone" placeholder="Your phone number" size="50" style="height: 40px; width: 400px;"/>
			        </td>
			    </tr>
			    <tr>
			    	<td>
			    		Select your Gender:<input type="radio" name="gender" value="Male"/>Male<input type="radio" name="gender" value="Female"/>Female<input type="radio" name="gender" value="Other"/>Other
			    	</td>
			    </tr>
		        <tr>
		            <td align="center" colspan="2">
		                <p class="this">
		                    <br/>
		                    <input type="submit" value="Sign Up" style="height:40px; width:250px";/>
		                    <br/>
		                    <br/>
		                    By clicking "Sign Up" you indicate that you agree with our <a href="">Terms, Conditions & Privacy Policy</a>
		                    <br/>
		                    <br/>
		                </p>
		            </td>
		        </tr>
			</table>
		</form>
    </div>    
</body>
</html>

