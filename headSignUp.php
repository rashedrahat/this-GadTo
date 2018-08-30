<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: aliceblue;
  padding: 20px 10px;
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

input[type=text].this {
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

input[type=text].this:focus {
    width: 99%;
}
</style>
</head>
<body>

<div class="header">
  <a href="index.php" class="logo">GadTo</a>

  <span style="float: right;">
    <form>
      <input class="this" type="text" name="search" placeholder="Search..">
    </form>
  </span>
  <span class="header-right">
    <a href="home.php">Home</a>
    <a href="signIn.php">Sign In</a>
    <a class="active" href="signUp.php">Sign Up</a>
    <a href="aboutUs.php">About Us</a>
    <a href="faq.php">FAQ</a>
    <a href="help.php">Help</a>
    <a href="feedback.php">Feedback</a>
  </span>
</div>
</body>
</html>