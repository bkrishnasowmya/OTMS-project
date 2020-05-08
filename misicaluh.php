<?php
include('displayitems.php');
$conn=new mysqli("localhost","root","","userdetails");
$sql3="SELECT * FROM sellingitems WHERE category='musical instruments'";
display($sql3);
?>