<?php
 $mysqli=new mysqli("localhost","root","","userdetails");
 session_start();
 $user_check=$_SESSION['login_id']; 
 $login_session=$user_check;


if(!isset($_SESSION['login_id'])){
 
  header("location:smallindlog.php");
echo "innn";
  die();
}

?>
