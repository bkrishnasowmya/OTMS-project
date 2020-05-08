
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>company account</title>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

h1 {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.dropdown,.sell {
  float: right;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav .search-container{
 float:right;
}

.topnav input[type=text] {
  padding: 6px 10px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}




.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}


html, body {
    max-width: 100%;
    overflow-x: hidden;
}
</style>
</head>
<body>

<div class="topnav">
  <h1 class=>OTMS</h1>
<div class="search-container">
<form action="ssisell.php">
<button class="sell" type="submit">SELL</button>
</form>
</div>
<div class="dropdown">
   <button class="fa fa-bars"></button>
     <div class="dropdown-content">
    <a href="displayssiprofile.php">PROFILE</a>
    <a href="yourorders_ssi.php">SELLED DETAILS</a>
    <a href="retrieve_user_req.php">USERS REQUEST</a>
    <a href="logout.php">LOG OUT</a>
  </div>
  </div>
</div>

</body>
</html>

<?php
include('sessionind.php');
include('displayitemssi.php');
$sql1 = "SELECT * FROM sellingitems where sellerid='$login_session[0]' AND who='company'";

display($sql1);


