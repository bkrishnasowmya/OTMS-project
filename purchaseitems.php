<?php
echo "<a href='adminhome.php'>Back</a>";

echo "<style>";
include ('css/image.css'); 
echo "</style>";

$conn = new mysqli("localhost", "root", "", "userdetails");

$sql="select * from purchaseditems"; 
$result1 = $conn->query($sql);
echo "<center><h1><i>Purchased Product Details</i></h1>"; 
if ($result1->num_rows > 0) {
echo "<table border='5px'>";
echo "<tr>";
echo "<th width='100px'>image</th><th width='200px'>description</th><th>price</th><th width='100px'>sellerid</th><th>buyerid</th>";
echo "<th>who</th><th>who</th><th>cardno</th><th>cvv</th><th>addid</th>";
echo "<tr>";
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
echo "<td>" ; echo $row["description"]; echo "</td><br><td>";echo $row["price"]; echo "</td>";




$sellerid=$row["sellerid"];
$price=$row["price"];
$description=$row["description"];
$image=$row["image"];
$addid=$row["addid"];
echo "<td width='100px'>" ; echo $row["sellerid"]; echo "</td>";
echo "<td>" ; echo $row["buyerid"]; echo "</td>";


echo "<td>" ; echo $row["who"]; echo "</td>";
echo "<td>" ; echo $row["mode"]; echo "</td>";
echo "<td>" ; echo $row["cardno"]; echo "</td>";
echo "<td>" ; echo $row["cvv"]; echo "</td>";
echo "<td>" ; echo $row["addid"]; echo "</td>";

echo "<td><a href='del_pur_item.php?id=$addid'><button>Cancel</button></a></td>";
echo "</tr>";
}
echo "</table>";
}
else{
 echo "No Items";
}

$conn->close();
?>