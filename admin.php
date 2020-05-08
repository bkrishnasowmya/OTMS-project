<?php
echo "<a href='firs.html'>Back</a>";
if($_SERVER['REQUEST_METHOD']=='POST')
{
$mail=$_POST["email"];
$pass=$_POST["password"];
 if($mail="otmsmini@gmail.com" and $pass="otms12345"){
   header('Location:adminhome.php');
 }
}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/logincss.css">
<body>

<h2><i><b><center>Admin Login Form </i></b></center></h2>

<form action="admin.php" method="post">
  <div class="imgcontainer">
    <img src="images/logo/logo1.jpg" alt="Avtar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>email</b></label>
    <input type="text" placeholder="Enter email " name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>


</form>

</body>
</html>
