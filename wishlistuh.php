<?php
include('session.php');
include('wishlist_display_uh.php');
$uid=$login_session[0];
$mysqli=new mysqli("localhost","root","","userdetails");
$sql="select * from wishlistitems where userid='$uid'";
display($sql);
?>