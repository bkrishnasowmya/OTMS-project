<?php
echo "<a href='userhome.php'>Back</a>";
?>
<!DOCTYPE html>
<html>
<head>
<style>
.request{
font-size:200%;
text-align:center;
}
</style>
</head>
<body style="background:#1BA3E7;">
<center>
<h1 style="text-align:center">REQUEST FOR ITEM</h1>
<br>
<br>
<br>
<br>
<form action="user_req.php" method="post">
<label  class="request" for="category">Choose Category:</label>
  <select class="request" name="request">
    <option value="ELECTRONICS">ELECTRONICS</option>
    <option value="KICTHEN ACCESSORIES">KICTHEN ACCESSORIES</option>
    <option value="CLOTHES">CLOTHES</option>
    <option value="MUSICAL INSTRUMENTS">MUSICAL INSTRUMENTS</option>
    <option value="VEHICLES">VEHICLES</option>
  </select>
<br>
<br>
<br>
<br>
   <p1 class="request">Item Name:</p1>
<input type="text"  class="request" name="iname" >
<br>
<br>
<br>
<br>
  <button type="submit"  class="request" style="height:50px;width:150px">Submit</button>
</form>
</center>
</body>
</html>
<?php
$mysqli=new mysqli('localhost','root','','userdetails');
if($_SERVER['REQUEST_METHOD']=='POST'){
$cat=$mysqli->real_escape_string($_POST["request"]);
$iname=$mysqli->real_escape_string($_POST["iname"]);
$sql="INSERT into request(category,itemname)values('$cat','$iname')";
if($mysqli->query($sql)){
echo "Your Request Uploaded Successfully";
}
}
?>
