<?php
 $id=$_GET['id'];
echo "<a href='userhome.php'>Back</a>";
echo "<h1><center><i>Payment Page</i></center></h1>";
 echo "<a href='cod.php?id=$id'><button>COD</button></a>";
 echo "<br><br><a href='card.php?id=$id'><button>CARD</button></a>";
?>
