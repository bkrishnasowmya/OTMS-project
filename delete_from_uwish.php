<?php
$mysql=new mysqli("localhost","root","","userdetails");
$addid=$_GET['id'];
$sql="delete from wishlistitems where addid='$addid'";
if($mysql->query($sql))
  echo "removed from your wishlist";
echo "<form action='wishlistuh.php'>";
echo "<button>Back to WishListPage</button>";
echo "</form>";
?>