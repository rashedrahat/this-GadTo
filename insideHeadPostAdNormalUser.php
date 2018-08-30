<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #222;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="ProfileHome.php">Profile Home</a></li>
  <li><a href="ProfileInfo.php">Profile Info</a></li>
  <li><a class="active" href="PostAd.php">Post Ad</a></li>
  <li><a href="AdInfo.php">Ad Info</a></li>
  <li><a href="notification.php">Notification</a></li>
  <li style="float: right;"><a href="signOut.php">Logout</a></li>
</ul>

</body>
</html>