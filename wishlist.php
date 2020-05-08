<?php
include('session.php');
$conn=new mysqli("localhost","root","","userdetails");
$id=$_GET['id'];
$sql="SELECT * FROM sellingitems WHERE addid='$id'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$cat=$row['category'];
$price=$row['price'];
$details=$row['description'];
$sellerid=$row['sellerid'];
$image=$row['image'];
$who=$row['who'];
$sql1="INSERT INTO wishlistitems (sellerid,image,addid,category,price,description,userid,who)  VALUES ('$sellerid','$image','$id','$cat','$price','$details','$login_session[0]','$who')";
if($conn->query($sql1)){
   echo '<script>alert("added to wishlist")</script>';
}

echo "<form action='userhome.php'>";
echo "<button>Back to HomePage</button>";
echo "</form>";
?>


