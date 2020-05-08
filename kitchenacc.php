<?php
include('displayitems.php');
$conn=new mysqli("localhost","root","","userdetails");
$sql1="SELECT * FROM sellingitems WHERE category='kitchenaccessories'";
display($sql1);
?>