<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: aliceblue;
  padding: 20px 5px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 99%;
}
</style>
</head>
<body>

<div class="header">
  <a href="index.php" class="logo">GadTo</a>

  <span style="float: right;">
    <form>
      <input class="sug" type="text" name="search" placeholder="Search.." onkeyup="searchedResult(this.value)">
    </form>
  </span>
  <span class="header-right">
    <a class="active" href="home.php">Home</a>
    <a href="aboutUs.php">About Us</a>
    <a href="faq.php">FAQ</a>
    <a href="help.php">Help</a>
    <a href="feedback.php">Feedback</a>
    <?php if (!isset($_SESSION['user_name'])) {?>
    <a href="signIn.php">Sign In</a>
    <a href="signUp.php">Sign Up</a>
    <?php }else {?>
        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><img class="img-rounded" src="user.jpg" alt="<?=$_SESSION['user_name']?>" width='35'>
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li>
            <a href="ProfileHome.php">Logged in as: <b><?=$_SESSION['user_name']?></b></a> <br>
          </li>
          <li>
            <a href="signout.php">Logout</a>
          </li>
        </ul>
    <?php  } ?>
  </span>
</div>
<!-- Ajax implementation-->
<div style="text-align: right; padding-right: 8px;">
        <i id="sug"><small style="text-align: center;">&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>Quick See:</b> Write something in "Search" to see here the seraching thing is or not in website?</small></i>
        <script>
            function searchedResult(str)
            {
                if (str.length == 0) {document.getElementById("sug").innerHTML = "Empty!";}

                else{
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function()
                    {
                        if(this.readyState == 4 && this.status == 200)
                        {document.getElementById("sug").innerHTML = this.responseText;}
                    };
                    xhttp.open("GET", "searchedResData.php?q="+str,true);
                    xhttp.send();
                }
            }
        </script>
</div>
</body>
</html>
