<?php
include('session.php');
$addid=$_GET['id'];
$mysqli=new mysqli("localhost","root","","userdetails");
$sql="select * from sellingitems where addid='$addid'";
$res=$mysqli->query($sql);
$row=$res->fetch_assoc();
$s="select * from wishlistitems where addid='$addid'";
$result=$mysqli->query($s);
if($result->num_rows>0)
{
 $sq="delete from wishlistitems where addid='$addid'";
$mysqli->query($sq);

}

$sid=$row["sellerid"];
$bid=$login_session[0];


$p=$row["price"];

$image=$row["image"];
$des=$row["description"];
$w=$row["who"];
$card=0;
$cvv=0;
$mode='cod';

if($sid!=$bid){
$s="INSERT into purchaseditems(sellerid,buyerid,price,who,mode,cardno,cvv,image,description,addid)"." values('$sid','$bid','$p','$w','$mode','$card','$cvv','$image','$des','$addid')";



if($mysqli->query($s)){

$sq="delete from sellingitems where addid='$addid'";
$mysqli->query($sq);
}
echo "Item Was Placed";
header('Location:mail.php');
}

else{
 echo "Buyer and Seller should not be same";
}
?>



