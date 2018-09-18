<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
    overflow: hidden;
    background-color: #007;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: right;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
  <div>
    <div class="navbar">
  <a href="signout.php">LogOut</a>
  <a href="leave.php">Leave</a>
  <a href="notification_3.php">Notifications</a>
  <a href="adminProfileInfo_2.php">Profile Info</a>
  <a href="AdminPortal.php">Profile Home</a>
  <a href="Home.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Manage Gadget Info
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="manageGadCat_2.php">Gadget Categories</a>
      <a href="manageBrandCat_2.php">Brand Categories</a>
      <a href="manageSpcsCat_2.php">Specifications Categories</a>
      <a href="manageSpcsInfo_2.php">Specifications Info Type</a>
      <a href="manageCompany_2.php">Company Info</a>
      <a href="manageReviews_2.php">Reviews</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Manage User
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="manageReqUser2.php">Requested User</a>
      <a href="manageBlockedUser2.php">Blocked User</a>
      <a href="manageActUser2.php">Registered User</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Manage Ad
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="manageReqAd_2.php">Requested Ad</a>
      <a href="manageActAd_2.php">Activated Ad</a>
      <a href="manageExpAd_2.php">Expired Ad</a>
    </div>
  </div>
</div>
  </div>
<br><br>
<div align="center">
  <b>Welcome <?php echo $_SESSION['user_name'] . "<br/>You logged in at:" . $_COOKIE['loggedintime'];?></b> 
</div>
<br>
<div id="piechart" align="center"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Product', 'Per Week'],
  ['iPhoneX', 814564],
  ['Samsung S9+', 215641],
  ['OnePlus 6', 112567]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Top 3 gadgets of this week that people are talking!', 'width':600, 'height':500};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<div align="center">
	<a href="stats_2.php">See more Stats</a>
</div>
<?php
  include 'insidePortalFooterAdmin.php';
?>
</body>
</html>