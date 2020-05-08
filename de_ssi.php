<?php
$uid=$_GET['id'];
$mysqli=new mysqli("localhost","root","","userdetails");
$sql="delete from ssidetails where id='$uid'";
if($mysqli->query($sql)){
 echo "Deleted Successfully";
 header('Location:adminhome.php');
}
?>