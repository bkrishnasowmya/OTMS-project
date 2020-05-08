<?php
$addid=$_GET['id'];
$mysqli=new mysqli("localhost","root","","userdetails");
$sql="delete from purchaseditems where addid='$addid'";
if($mysqli->query($sql)){
 echo "Deleted Successfully";
 header('Location:adminhome.php');
}
?>