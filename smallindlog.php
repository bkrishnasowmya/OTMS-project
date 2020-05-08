<?php
 echo "<a href='firs.html'>Back</a>";
 SESSION_START();
 $_SESSION['message']=' ';
 $mysqli=mysqli_connect('localhost','root','','userdetails');
 if(isset($_POST['submit'])){

    $eml = mysqli_real_escape_string($mysqli,$_POST['email']);
    $pwd = mysqli_real_escape_string($mysqli,$_POST['password']);

    if ($eml != "" && $pwd != ""){

        $sql_query = "select count(*) as cntUser from ssidetails where email='".$eml."' and password='".$pwd."'";
        $result = mysqli_query($mysqli,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
	   $sql="select id from ssidetails where email='".$eml."' and password='".$pwd."'";
            $res=mysqli_query($mysqli,$sql);
            $row=mysqli_fetch_array($res);
            $active=$row['active'];
    	    
            $_SESSION['login_id']=$row;
	    
            $_SESSION['message'] = $eml;
            header('Location:logssiwelcome.php');
	    exit();
        }else{
            echo "Invalid username and password";
        }

    }

}


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/logincss.css">
<body>

<h2><i><b><center>Login Form For Small Scale Industries</i></b></center></h2>

<form action="smallindlog.php" method="post"><?= $_SESSION['message'] ?>
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

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="mail_for_ssi.php">password?</a></span>
       <span class="psw">Register <a href="smallindreg.php">Create a new Account</a></span>
  
 </div>
</form>

</body>
</html>
