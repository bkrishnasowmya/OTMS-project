<?php
echo "<a href='firs.html'>Back</a>";
SESSION_START();
$_SESSION['message']=' ';
$mysqli=new mysqli('localhost','root','','userdetails');
if($_SERVER['REQUEST_METHOD']=='POST'){
 if($_POST['password']==$_POST['password-repeat'])
 {
  $name=$mysqli->real_escape_string($_POST['name']);
  $place=$mysqli->real_escape_string($_POST['place']);
  $email=$mysqli->real_escape_string($_POST['email']);
  $password=$mysqli->real_escape_string($_POST['password']);
  $companyname=$mysqli->real_escape_string($_POST['companyname']);
  $phnumber=$mysqli->real_escape_string($_POST['phnumber']);
  $image_path=$mysqli->real_escape_string('images/'.$_FILES["img"]["name"]);
  if(preg_match("!image!",$_FILES['img']['type']))
  {
   if(copy($_FILES['img']['tmp_name'],$image_path))
   {
  
    $_SESSION['name']=$name;
    $_SESSION['place']=$place;
    $_SESSION['email']=$email;
    $_SESSION['phnumber']=$phnumber;
    $_SESSION['password']=$password;
    $_SESSION['image']=$image_path;
    $sql="INSERT into ssidetails(name,place,email,password,phnumber,companyname,image)"." values('$name','$place','$email','$password','$phnumber','$companyname','$image_path')";
    if($mysqli->query($sql)===true){
      $_SESSION['message']="registration succesful";
      header("location:smallindlog.php");
    }
   }
  }
}
else{
 $_SESSION['message']="2 passwords are different";
}
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/smallindcss.css">
</head>
<body>
<?= $_SESSION['message']?>
<form action="smallindreg.php" method="post" enctype="multipart/form-data">
  <div class="container">
	
    <h1 align="center" fontsize="333px">Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>
    <hr>
    <label for="place"><b>Place</b></label>
    <input type="text" placeholder="Enter Place" name="place" required>
     <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password-repeat" required>
    <hr>
    <label for="phnumber"><b>Number</b></label>
    <input type="number" placeholder="number" name="phnumber" required>
    <hr>
<label for="companyname"><b>Company Name</b></label>
    <input type="text" placeholder="enter company name" name="companyname" required>
    <hr>
    
    <div>
      <label for="image"> select the company approval ID :</label>
      <hr>
      <input type="file" name="img" value="img" required />
     </div>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a></p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
</form>  
</body>
</html>
