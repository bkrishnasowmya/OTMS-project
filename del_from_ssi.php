<?php
$mysql=new mysqli("localhost","root","","userdetails");
$addid=$_GET['id'];
$sql="delete from sellingitems where addid='$addid'";
$s="select * from wishlistitems where addid='$addid'";
$result=$mysql->query($s);
echo $result->num_rows;
if($result->num_rows>0)
{
 echo $result->num_rows;
$sq="delete from wishlistitems where addid='$addid'";
 if($mysql->query($sq))
   echo "removed from wishlist";
}

if($mysql->query($sql))
  echo "removed from selling list";
?>