<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
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
        <form action="checkCreateAdmin.php"  method="POST">
            <table align="center" height="200" width="400" style="padding-top: 100px">
                <tr>
                    <td>
                        <b>
                            <font size="4">
                                <label align="center">&emsp;&emsp;&emsp;&emsp;Complete details to create a admin.
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
                        <input type="email" name="email" placeholder="Email address" size="50" style="height: 40px; width: 400px;"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pass" placeholder="Create password" size="50"style="height: 40px; width: 400px;"/>
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
                        <input type="text" name="phone" placeholder="Phone number" size="50" style="height: 40px; width: 400px;"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Select your Gender:
                        <input type="radio" name="gender" value="Male"/>Male
                        <input type="radio" name="gender" value="Female"/>Female
                        <input type="radio" name="gender" value="Other"/>Other
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <p class="this">
                            <br/>
                            <input type="submit" value="Create" style="height:40px; width:250px;" onclick="window.location.href='createdAdmin.php'"/>
                            <br/>
                            <br/>
                        </p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div align="center">
        <a href="superAdminPortal.php">Go back to Profile Home</a>
    </div>   
</body>
</html>

