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
	<?php
        include 'headSignUp.php';
    ?>
    <div>
    	<form action="checkSignUp.php"  method="POST">
			<table align="center" height="200" width="400" style="padding-top: 50px">
				<tr>
					<td>
						<b>
			                <font size="3">
				                <label align="center"> Hello & Welcome :) Please complete your details.
				                </label>
			                </font>
		                </b>
        			</td>
    			</tr>
				<tr>
			    	<td>
			            <input type="text" onkeyup="uncheckun()" id="username" name="user_name" placeholder="User Name" size="50" style="height: 40px; width: 400px;"/><span id="un"></span>
			        </td>
    			</tr>
			    <tr>
			        <td>
			            <input type="email" onkeyup="uncheckemail()" id="email" name="email" placeholder="Email Address" size="50" style="height: 40px; width: 400px;"/> <span id="em"></span>
			        </td>
			    </tr>
			    <tr>
			        <td>
			            <input type="password" onkeyup="uncheckpass()" id="password" name="pass" placeholder="Password" size="50"style="height: 40px; width: 400px;"/> <span id="pass"></span>
			        </td>
			    </tr>
			    <tr>
			        <td>
			            <input type="text" onkeyup="uncheckfn()" id="firstname" name="first_name" placeholder="First Name" size="26" style="height: 40px; width: 400px;"/> <span id="fn"></span>
			        </td>
			    </tr>
			    <tr>
			    	<td>
			    		<input type="text" onkeyup="uncheckln()" id="lastname" name="last_name" placeholder="Last Name" size="25" style="height: 40px; width: 400px;"/> <span id="ln"></span>
			    	</td>
			    </tr>
			    <tr>
			        <td>
			            <input type="text" onkeyup="uncheckcn()" id="contactno" name="phone" placeholder="Contact No" size="50" style="height: 40px; width: 400px;"/><span id="cn"></span>
			        </td>
			    </tr>
			    <tr>
			    	<td>
			    		Select your Gender:
			    		<input type="radio" name="gender" value="Male" checked/>Male
			    		<input type="radio" name="gender" value="Female"/>Female
			    		<input type="radio" name="gender" value="Other"/>Other
			    	</td>
			    </tr>
		        <tr>
		            <td align="center" colspan="2">
		                <p class="this">
		                    <br/>
		                    <input type="submit" onclick="return validation()" name="submit" value="Sign Up" style="height:40px; width:250px";/>
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

<script>
function validation()
	{
		flag=true;

		if(document.getElementById("username").value.length==0)
		{
			document.getElementById("un").innerHTML=" * User Name Required";
			document.getElementById("un").style.color="red";
			flag=false;
		}

		if(document.getElementById("username").value.length<3)
		{
			document.getElementById("un").innerHTML=" * User Name should be minimum 3 characters";
			document.getElementById("un").style.color="red";
			flag=false;
		}
		if(document.getElementById("firstname").value.length==0)
		{
			document.getElementById("fn").innerHTML=" * First Name Required";
			document.getElementById("fn").style.color="red";
			flag=false;
		}	
		if(isNaN(document.getElementById("firstname").value))
		{ 
			flag=true;
		} 
		else
		{
			document.getElementById("fn").innerHTML=" * Name can not contain number";
			document.getElementById("fn").style.color="red";
			flag=false;
		}



		if(document.getElementById("firstname").value.length<3)
			{
				document.getElementById("fn").innerHTML=" * Name should be minimum 3 characters";
				document.getElementById("fn").style.color="red";
				flag=false;
			}
		
		if(document.getElementById("lastname").value.length==0)
		{
			document.getElementById("ln").innerHTML=" * Last Name Required";
			document.getElementById("ln").style.color="red";
			flag=false;
		}
			
		if(isNaN(document.getElementById("lastname").value))
		{ 
			flag=true;
		} 
		else
		{
			document.getElementById("ln").innerHTML=" * Name can not contain number";
			document.getElementById("ln").style.color="red";
			flag=false;
		}


		if(document.getElementById("lastname").value.length<3)
		{
			document.getElementById("ln").innerHTML=" * Name should be minimum 3 characters";
			document.getElementById("ln").style.color="red";
			flag=false;
		}

		if(document.getElementById("password").value.length==0)
		{
			document.getElementById("pass").innerHTML=" * Password Required";
			document.getElementById("pass").style.color="red";
			flag=false;
		}

		if(document.getElementById("password").value.length<8)
		{
			document.getElementById("pass").innerHTML=" * password should be minimum 8 characters";
			document.getElementById("pass").style.color="red";
			flag=false;
		}
		
		if(document.getElementById("email").value.length==0)
		{
			document.getElementById("em").innerHTML=" * Email Required";
			document.getElementById("em").style.color="red";
			flag=false;
		}
		
		if(document.getElementById("email").value.length!=0)
		{
			var z = document.getElementById("email").value;
			var atpos = z.indexOf("@");
			var dotpos = z.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length)
			{
				document.getElementById("em").innerHTML=" * Not A Valid Email";
				document.getElementById("em").style.color="red";
				flag=false;
			}
		}
		
		if(document.getElementById("contactno").value.length==0)
		{
			document.getElementById("cn").innerHTML=" * Contact No Required";
			document.getElementById("cn").style.color="red";
			flag=false;
		}

		if(document.getElementById("contactno").value.length<11 || document.getElementById("contactno").value.length>11)
		{
			document.getElementById("cn").innerHTML=" * Not a Valid Contact No";
			document.getElementById("cn").style.color="red";
			flag=false;
		}
		
		return flag;
	}


	function uncheckun()
	{
		document.getElementById("un").innerHTML="";
	}
	function uncheckpass()
	{
		document.getElementById("pass").innerHTML="";
	}

	function uncheckemail()
	{
		document.getElementById("em").innerHTML="";
	}
		function uncheckfn()
	{
		document.getElementById("fn").innerHTML="";
	}
		function uncheckln()
	{
		document.getElementById("ln").innerHTML="";
	}
	function uncheckcn()
	{
		document.getElementById("cn").innerHTML="";
	}

</script>
    <?php
        include 'footer.php';
    ?>   
</body>
</html>

