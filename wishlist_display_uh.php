
<?php

function display($sql1){
echo "<style>";
include ('css/image.css'); 
echo "</style>";

$conn = new mysqli("localhost", "root", "", "userdetails");
echo "<a href='userhome.php'>Back</a>";


$result1 = $conn->query($sql1);

if ($result1->num_rows == 0) {
echo "nothing in your wishlist";

}
echo "<table>";

while($row = $result1->fetch_assoc()) {

echo "<br>";
echo "<br>";	
echo "<tr>";
$path=$row["image"];
echo "<td>";
echo "<img src='$path' id='myImg' height='150' width='150' />"; echo "</td>";
echo "<center><div id='myModal' class='modal'><span class='close'>&times;</span><img class='modal-content' id='img01'><div id='caption'></div></div></center>";

echo "<script>
var modal = document.getElementById('myModal');
var img = document.getElementById('myImg');
var modalImg = document.getElementById('img01');
var captionText = document.getElementById('caption');
img.onclick = function(){
  modal.style.display = 'block';
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName('close')[0];
span.onclick = function() { 
  modal.style.display = 'none';
}
</script>";

echo "<td>"; echo "</td>"; echo "<td>" ; echo $row["description"]; echo "<br>"; echo "price : Rs.";echo $row["price"]; echo "</td>";
$addid=$row["addid"];

$sellerid=$row["sellerid"];
$who=$row["who"];
if($who=='user'){
 $s="select * from userdetails where id='$sellerid'";
 $res=$conn->query($s);
 $r=$res->fetch_assoc();
 $ph=$r["phnumber"];
 }
else{
$s="select * from ssidetails where id='$sellerid'";
 $res=$conn->query($s);
 $r=$res->fetch_assoc();
 $ph=$r["phnumber"];
 }


echo "<td width='100'>"; echo "</td>";

echo "<td>"; echo "<a href='payment.php?id=$addid'><button >Buy</button></a>";  echo "<br><br>";
echo "<td>"; echo "<a href='tel:$ph'><button>Call</button></a>";  echo "<br><br>";

$price=$row["price"];
$description=$row["description"];
$image=$row["image"];
$category=$row["category"];

echo "<a href='delete_from_uwish.php?id=$addid'> Delete</a>";
echo "</tr>";



}
echo "</table>";


$conn->close();
}

?>


