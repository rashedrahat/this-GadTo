<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
.navbar {
    overflow: hidden;
    background-color: #333;
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

input[type=text].the {
    width: 190px;
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
</style>
</head>
<body>
  <div class="navbar">
  <a href="signout.php">LogOut</a>
  <a href="notification_2.php">Notifications</a>
  <a href="adminProfileInfo.php">Profile Info</a>
  <div class="dropdown">
    <button class="dropbtn">Manage Admin
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="createAdmin.php">Create Admin</a>
      <a href="makeAdmin.php">Make an Admin</a>
      <a href="manageAdmin.php">Manage Exist</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Manage Gadget Info
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="manageGadCat.php">Gadget Categories</a>
      <a href="manageBrandCat.php">Brand Categories</a>
      <a href="manageSpcsCat.php">Specifications Categories</a>
      <a href="manageSpcsInfo.php">Specifications Info Type</a>
      <a href="manageCompany.php">Company Info</a>
      <a href="manageReviews.php">Reviews</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Manage User
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="manageReqUser.php">Requested User</a>
      <a href="manageBlockedUser.php">Blocked User</a>
      <a href="manageActUser.php">Registered User</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Manage Ad
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="manageReqAd.php">Requested Ad</a>
      <a href="manageActAd.php">Activated Ad</a>
      <a href="manageExpAd.php">Expired Ad</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Manage Database
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="manageDB.php">Backup/Restore</a>
    </div>
  </div>
  <a href="superAdminPortal.php">Profile Home</a>
  <a href="Home.php">Home</a>
  <form>
    &emsp;<input type="text" name="search" placeholder="Search.."
    onkeyup="searchedResult(this.value)" class="the">
  </form>
</div>
<!-- Ajax implementation-->
<div style="text-align: center;">
        <i id="sug"><small style="text-align: center;">&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b></b></small></i>
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
                    xhttp.open("GET", "searchedAdminData.php?q="+str,true);
                    xhttp.send();
                }
            }
        </script>
</div>
</body>
</html>