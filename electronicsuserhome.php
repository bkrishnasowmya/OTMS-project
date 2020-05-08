<?php
include('displayitems.php');
$conn=new mysqli("localhost","root","","userdetails");
$sql="SELECT * FROM sellingitems WHERE category='electronics'";
display($sql);
?>