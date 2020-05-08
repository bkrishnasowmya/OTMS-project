<?php
include('displayitems.php');
$conn=new mysqli("localhost","root","","userdetails");
$sql4="SELECT * FROM sellingitems WHERE category='vehicles'";
display($sql4);
?>
