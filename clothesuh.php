<?php
include('displayitems.php');
$conn=new mysqli("localhost","root","","userdetails");
$sql2="SELECT * FROM sellingitems WHERE category='clothes'";
display($sql2);
?>