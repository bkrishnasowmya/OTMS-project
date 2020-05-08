
<?php

function display($sql1){

$conn = new mysqli("localhost", "root", "", "userdetails");

echo "<a href='ssihomepage.php'>Back</a>";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {

echo "<table>";

while($row = $result1->fetch_assoc()) {

echo "<br>";
echo "<br>";	
echo "<tr>";
$path=$row["image"];
echo "<td>";
echo "<img src='$path' height='150' width='150' />"; echo "</td>";

echo "<td>"; echo "</td>"; echo "<td>" ; echo $row["description"]; echo "<br>"; echo "price : Rs.";echo $row["price"]; echo "</td>";

echo "<td width='100'>"; echo "</td>";
$addid=$row["addid"];
echo "<td>"; echo "<a href='del_from_ssi.php?id=$addid'><button>Delete</button></a>";  echo "<br><br>";
$sellerid=$row["sellerid"];
$price=$row["price"];
$description=$row["description"];
$image=$row["image"];
$category=$row["category"];





}
echo "</table>";
}
else{
 echo "No Items";
}

$conn->close();
}



function displaypurchase($sql1){

$conn = new mysqli("localhost", "root", "", "userdetails");
echo "<a href='ssihomepage.php'>Back</a>";


$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {

echo "<table>";

while($row = $result1->fetch_assoc()) {

echo "<br>";
echo "<br>";	
echo "<tr>";
$path=$row["image"];
echo "<td>";
echo "<img src='$path' height='150' width='150' />"; echo "</td>";

echo "<td>"; echo "</td>"; echo "<td>" ; echo $row["description"]; echo "<br>"; echo "price : Rs.";echo $row["price"]; echo "</td>";

echo "<td width='100'>"; echo "</td>";

echo "<td>";   echo "<br><br>";
$sellerid=$row["sellerid"];
$price=$row["price"];
$description=$row["description"];
$image=$row["image"];






}
echo "</table>";
}
else{
 echo "No Items";
}

$conn->close();
}

?>


