<?php 
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
else {
$servername = "localhost";
$uname      = "root";
$password   = "";
$dbname     = "gadto";

$conn       = mysqli_connect($servername, $uname, $password, $dbname);

if (!$conn) {
    die("Connection Error!" . mysqli_connect_error());
}

$username   = $_SESSION['user_name'];
$sql        = "select * from user_info where user_name='$username'";
$result     = mysqli_query($conn, $sql);
$row        = mysqli_fetch_assoc($result);

}
?>


<html>

<head>
    <title>Super Admin Profile Info</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div style="padding-bottom: 77px;">
        <div class="login-box">
                <img src="ppic.png" class="avatar">

                <?php
 
                    if (isset($_POST['submit'])) {
                        $email      = $_POST['email'];
                        $pass       = $_POST['pass'];
                        $first_name = $_POST['first_name'];
                        $last_name  = $_POST['last_name'];
                        $phone      = $_POST['phone'];

                        $sql        = "UPDATE user_info SET email = '$email', pass ='$pass', first_name = '$first_name', last_name = '$last_name', phone = '$phone' WHERE user_name = '$username'";

                        if (mysqli_query($conn, $sql)) {
                            header("Location: adminProfileInfo.php?ret=Updated Successfully");
                                } 
                            else {
                                echo "Error updating record: " . mysqli_error($conn);
                                }
                        }
                        mysqli_close($conn);
                ?>
                <form method="POST" action="">
                    <lebel>First Name</lebel>
                    <input type="text" onkeyup="uncheckfn()" id="firstname" name="first_name" value="<?php echo $row['first_name']?>" border-style: solid> <span id="fn"></span>
                    <lebel>Last Name</lebel>
                    <input type="text" onkeyup="uncheckln()" id="lastname" name="last_name" value="<?php echo $row['last_name']?>" border-style: solid> <span id="ln"></span>
                    <lebel>Username</lebel>
                    <input type="text" name="user_name" value="<?php echo $row['user_name']?>" readonly border-style: solid />
                    <lebel>Mobile Number</lebel>
                    <input type="text" onkeyup="uncheckcn()" id="contactno" name="phone" value="<?php echo $row['phone']?>" border-style: solid /> <span id="cn"></span>
                    <lebel>Password</lebel>
                    <input type="password" onkeyup="uncheckpass()" id="password" name="pass" value="<?php echo $row['pass']?>"> <span id="pass"></span>
                    <lebel>E-mail</lebel>
                    <input type="email" onkeyup="uncheckemail()" id="email" name="email" value="<?php echo $row['email']?>"> <span id="em"></span>
                    <br/>
                    <br/>


                    <input type="submit" onclick="return validation()" name="submit" value="Update">
                    <br/>
                    <a href="superAdminPortal.php"><input type="button" value="Back To Home"></a>
                    <br/>
                    <a style="color:green;"><?php if(isset($_GET['ret'])){$ret=$_GET['ret']; echo $ret;} ?></a>


                </form>
            </div>
    </div>
    </form>
</div>
</div>
</div>
</body>
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
</html>