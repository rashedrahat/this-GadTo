<!DOCTYPE html>
<html>
<head>
	<title></title>
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
</body>
</html>