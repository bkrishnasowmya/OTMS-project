<?php
 include('session.php');
?>
<html>
<head>
<style>
.id1{
 background-color: #4CAF50;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius:15px;
}
body{
background-color:#1BA3E7;
}
.imgcontainer {
  text-align: center;
   height: 200px;
  width: 50%;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

</style>
</head>
<body>
<div class="imgcontainer">
    <img src="images/logo/logo1.jpg" alt="Avtar" class="avatar">
  </div><br>
<br>
<hr>
<hr>
<h1>welcome <?php echo $login_session[0];
  echo "\tid";
?>

 




</h1>
<form action="userhome.php">
  <button type="submit" class="id1" >submit</button>

</form>
</body>
</html>