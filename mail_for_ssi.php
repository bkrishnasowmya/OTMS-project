<?php


echo "<a href='smallindlog.php'>Back</a>";
if($_SERVER['REQUEST_METHOD']=='POST'){
$mal=$_POST["email"];


require("PHPMailer-master/src/PHPMailer.php");
    require("PHPMailer-master/src/SMTP.php");
    require("PHPMailer-master/src/Exception.php");


    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 

    $mail->CharSet="UTF-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug = 0; 
    $mail->Port = 465 ; //465 or 587

     $mail->SMTPSecure = 'ssl';  
    $mail->SMTPAuth = true; 
    $mail->IsHTML(true);

    //Authentication
    $mail->Username = "otmsmini@gmail.com";
    $mail->Password = "otms12345";

    //Set Params
    $mail->SetFrom($mal);
    $mail->AddAddress($mal);
    $mail->Subject = "OTMS";
    $mail->Body = "Did you forgot your password? click this link http://localhost/minipp/forgotpwdssi.php";


     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent to your mail";
     }
}
?>




<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
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
body{
background-color:#1BA3E7;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>

<body>

<h2><i><b><center>SmallScale Industry Forgot Password? Mail</i></b></center></h2>

<form action="mail_for_ssi.php" method="post">
  <div class="imgcontainer">
    <img src="images/logo/logo1.jpg" alt="Avtar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>email</b></label>
    <input type="text" placeholder="Enter email " name="email" required>

        
    <button type="submit" name="submit">Update</button>
  </div>

  </form>

</body>
</html>
