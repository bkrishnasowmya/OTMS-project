<?php
echo "<a href='adminhome.php'>Back</a>";

echo "<style>";
include ('css/image.css'); 
echo "</style>";

$conn = new mysqli("localhost", "root", "", "userdetails");

$sql="select * from ssidetails";
$result1 = $conn->query($sql);
echo "<center><h1><i>SmalScale Industries Details</i></h1>";
if ($result1->num_rows > 0) {

echo "<table border='5px'>";

while($row = $result1->fetch_assoc()) {

echo "<br>";
echo "<br>";	
echo "<tr>";
echo "<td width='30px'>"; echo $row["id"]; echo "</td>";
$uid=$row["id"];

echo "<td width='100px'>"; echo $row["name"]; echo "</td>";


echo "<td width='70px'>"; echo $row["place"]; echo "</td>";
echo "<td width='100px'>"; echo $row["email"]; echo "</td>";
echo "<td><a href='del_ssi.php'?id=$uid><button>Cancel</button></a></td>";
echo "</tr>";
}
echo "<center></table>";
}
else{
 echo "No Items";
}

$conn->close();
?>   
