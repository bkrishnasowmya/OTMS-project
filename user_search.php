<?php
include('displayitems.php');
$mysql=new mysqli("localhost","root","","userdetails");
$search=$_POST['search'];
$sql="select * from sellingitems where description like '%$search%' or category like '%$search%'";

display($sql);
?>