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
  $phnumber=$mysqli->real_escape_string($_POST['phnumber']);
  $_SESSION['name']=$name;
    $_SESSION['place']=$place;
  $_SESSION['email']=$email;
   $_SESSION['phnumber']=$phnumber;
  $_SESSION['password']=$password;
  $sql="INSERT into userdetails(name,place,email,password,phnumber)"." values('$name','$place','$email','$password','$phnumber')";
  if($mysqli->query($sql)){
  $_SESSION['message']="registration succesful";
  header("location:login.php");
 }
}
else{
 $_SESSION['message']="2 passwords are different";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus,  input[type=number]:focus  {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<?$_SESSION['message']?>
<form action="res.php" method="post">
  <div class="container"><?= $_SESSION['message']?>
	
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
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
</form>  
</body>
</html>
