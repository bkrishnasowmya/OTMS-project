


<!DOCTYPE html>
<html>
<head>

<title>customer account</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/userhome.css">


</script>
</head>
<body>

<div class="topnav">
  <h1 class=>OTMS</h1>
<div class="search-container">
<form>
<button onclick="window.open('sell.php')">SELL</button>
</form>
</div>
<div class="dropdown">
   <button class="fa fa-bars"></button>
     <div class="dropdown-content">

    <a href="displayuserprofile.php">PROFILE</a>
    <a href="order_uh.php">YOUR ORDERS</a>
    <a href="user_req.php">REQUEST</a>
    <a href="wishlistuh.php">WISH LIST</a>
    <a href="logout.php">LOG OUT</a>
  </div>
  </div>



   

<div class="search-container">

    <form action="user_search.php" method="post">

      <input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
     
    </form>

</div>
</div><center><marquee>
<form action="electronicsuserhome.php">
<button type ="submit" style="height:100px;width:600px;">ELECTRONICS</button></form>

<form action="kitchenacc.php">
<button type ="submit" style="height:100px;width:600px;">KITCHEN ACCESSORIES</button></form>

<form action="clothesuh.php">
<button type ="submit" style="height:100px;width:600px;">CLOTHES</button></form>

<form action="misicaluh.php">
<button type ="submit" style="height:100px;width:600px;">MUSICAL INSTRUMENTS</button></form>

<form action="vehicelsuh.php">
<button type ="submit" style="height:100px;width:600px;">VEHICLES</button></form>
</marquee>
</center>

</body>
</html>



<?php
include('session.php');
include('displayitems.php');
$sql1 = "SELECT * FROM sellingitems";

display($sql1);




?>



