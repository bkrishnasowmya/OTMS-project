<?php
include('session.php');
$addid=$_GET['id'];
echo "<a href='userhome.php'>Back</a>";

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

$w=$row["who"];
$image=$row["image"];
$des=$row["description"];

if($_SERVER['REQUEST_METHOD']=='POST'){

$card=$mysqli->real_escape_string($_POST['cardno']);
$cvv=$mysqli->real_escape_string($_POST['cvv']);
$mode='card';

if($sid!=$bid){
$s="INSERT into purchaseditems(sellerid,buyerid,price,who,mode,cardno,cvv,image,description,addid)"." values('$sid','$bid','$p','$w','$mode','$card','$cvv','$image','$des','$addid')";



if($mysqli->query($s)){

$sq="delete from sellingitems where addid='$addid'";
$mysqli->query($sq);
}
echo "Payment is Successful and Item Was Placed";
header('Location:mail.php');
}

else{
 echo "Buyer and Seller should not be same";
}
}
?>
