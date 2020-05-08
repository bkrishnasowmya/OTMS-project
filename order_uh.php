<?php
include('session.php');
include('displayitems.php');
$mysqli=new mysqli("localhost","root","","userdetails");
$sql="select * from sellingitems where sellerid='$login_session[0]' AND who='user'";
displayorder($sql);
?>
