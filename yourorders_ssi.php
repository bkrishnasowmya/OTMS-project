<?php
include('sessionind.php');
include('displayitemssi.php');
$mysqli=new mysqli("localhost","root","","userdetails");
$sql="select * from purchaseditems where sellerid='$login_session[0]' AND who='company'";
displaypurchase($sql);
?>