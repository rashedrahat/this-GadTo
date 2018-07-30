<?php
session_start();

if ($_SESSION['loggedIn'] != 2)
{
    header("location: SignIn.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

.container {
  width: 100%;
  background-color: #ddd;
}

.skills {
  text-align: right;
  padding-right: 20px;
  line-height: 40px;
  color: white;
}

.html {width: 90%; background-color: #4CAF50;}
.css {width: 80%; background-color: #2196F3;}
.js {width: 65%; background-color: #f44336;}
.php {width: 60%; background-color: #808080;}
.s8 {width: 50%; background-color: #908060;}
</style>
</head>
<body>
<div style="padding-right: 100px; padding-left: 100px;"><br><br><br>
 <h1><i>Top 5 gadgets list of this week:</i><span><small>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Filter By:<select>
                  <option>Rating</option>
                  <option>Recommendation</option>
           </select></small></span></h1>

<p>iPhoneX</p>
<div class="container">
  <div class="skills html">90909</div>
</div>

<p>S9+</p>
<div class="container">
  <div class="skills css">80888</div>
</div>

<p>OnePlus</p>
<div class="container">
  <div class="skills js">65656</div>
</div>

<p>mi 6</p>
<div class="container">
  <div class="skills php">59659</div>
</div>

<p>S8</p>
<div class="container">
  <div class="skills s8">524321</div>
</div><br><br><br>
<div align="center">
      <a href="adminPortal.php">Go back to Profile Home</a>
    </div> 
</div>


</body>
</html>
