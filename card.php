<?php
include('session.php');
$addid=$_GET['id'];
echo "<a href='userhome.php'>Back</a>";




echo "<form action='cards.php?id=$addid' method='post'>";
echo "Card No:";
echo "<input type='number' name='cardno' required>";
echo "CVV :";
echo "<input type='number' name='cvv' required>";

echo "<button>Submit</button>";
echo "</form>";
echo "processing";
?>
