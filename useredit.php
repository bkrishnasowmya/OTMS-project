<?php
include('session.php');
$uid=$login_session[0];
$mysqli=new mysqli('localhost','root','','userdetails');
$sql="select * from userdetails where id='$uid'";
$res=$mysqli->query($sql);
$row=$res->fetch_assoc();
?>
<?php
echo "<a href='userhome.php'>Back</a>";

$uid=$login_session[0];
$mysqli=new mysqli('localhost','root','','userdetails');
if($_SERVER['REQUEST_METHOD']=='POST'){
  $n=$mysqli->real_escape_string($_POST['name']);
  $e=$mysqli->real_escape_string($_POST['email']);
  $p=$mysqli->real_escape_string($_POST['place']);
  $ph=$mysqli->real_escape_string($_POST['phnumber']);
  $sql1="UPDATE userdetails SET name='$n',email='$e',place='$p',phnumber='$ph' WHERE id='$uid'";
  if($mysqli->query($sql1)){
    echo "Updated Successfully"; 
   }
}
?>

<html>
<body>
<form action="useredit.php" method="post">
<h3>Name : 
<input type="text" name="name" value="<?php echo $row["name"]; ?>">
</h3>
<h3>Place : 
<input type="text" name="place" value="<?php echo $row["place"]; ?>">
</h3>
<h3>Email : 
<input type="text" name="email" value="<?php echo $row["email"]; ?>">
</h3>
<h3>phone Number : 
<input type="text" name="phnumber" value="<?php echo $row["phnumber"]; ?>">
</h3>

 <button>Update</button>
</form>
</body>
</html>