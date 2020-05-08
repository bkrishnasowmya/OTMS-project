

<?php
include('session.php');
$conn = new mysqli("localhost", "root", "", "userdetails");

$sql1="select * from userdetails where id=$login_session[0]";

$result1 = $conn->query($sql1);

$row = $result1->fetch_assoc();

echo "<b><center><h1><i>";  echo "Profile";  echo "</b></center></h1></i>";

echo "<center><table border='12px'>";


echo "<tr>";

echo "<td width='400' height='100'><b><font size='5'>";  echo "UserID"; echo "</font></b></td>";
echo "<td width='300' height='100'>";  echo $row["id"]; echo "</td>";

echo "</tr>";

echo "<tr>";

echo "<td width='100' height='100'><b><font size='5'>";  echo "Name"; echo "</font></b></td>";
echo "<td width='100' height='100'>";  echo $row["name"]; echo "</td>";

echo "</tr>";


echo "<tr>";

echo "<td width='100' height='100'><b><font size='5'>";  echo "Place"; echo "</font></b></td>";
echo "<td width='100' height='100'>";  echo $row["place"]; echo "</td>";

echo "</tr>";

echo "<tr>";

echo "<td width='100' height='100'><b><font size='5'>";  echo "Email"; echo "</font></b></td>";
echo "<td width='100' height='100'>";  echo $row["email"]; echo "</td>";

echo "</tr>";


echo "<tr>";

echo "<td width='100' height='100'><b><font size='5'>";  echo "Number"; echo "</font></b></td>";
echo "<td width='100' height='100'>";  echo $row["phnumber"]; echo "</td>";

echo "</tr>";

echo "<tr>";

echo "<td>"; echo "<a href=\"useredit.php\">Edit</a>";  echo "</td>";

echo "</tr>";
echo "</center></table>";
?>








