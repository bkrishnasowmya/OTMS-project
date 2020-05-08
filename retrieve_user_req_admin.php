<?php
echo "<a href='adminhome.php'>Back</a>";

$conn=new mysqli("localhost","root","","userdetails");
$sql="SELECT * FROM request";
$result=$conn->query($sql);
if($result->num_rows > 0){
echo "<body style='backgroundcolor:#1B2AE'>";
echo "<center>";
echo "<h1><i>Requests From Users</i></h1>";

echo "<table border='5px'>";
echo "<tr>";
echo "<th width='400' >Category</th>";
echo "<th width='400' >Request</th>";
echo "</tr>";
while($rows=$result->fetch_assoc()){
echo "<br>";
echo "<br>";
echo "<tr>";
echo "<td>";
echo $rows['category'];
echo "</td>";
echo "<td>";
echo $rows['itemname'];
echo "</td>";
echo "</tr>";
}
echo "</center></table></body>";
}
?>
