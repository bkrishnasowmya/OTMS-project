<?php
$addid=$_GET['id'];
$mysqli=new mysqli("localhost","root","","userdetails");
$sql="delete from sellingitems where addid='$addid'";
if($mysqli->query($sql)){
 echo "Deleted successfully";
 header('Location:adminhome.php');
}
?>