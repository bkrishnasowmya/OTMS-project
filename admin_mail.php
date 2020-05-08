
<?php

$mysqli=new mysqli("localhost","root","","userdetails");
echo "<a href='adminhome.php'>Back</a>";
if($_SERVER['REQUEST_METHOD']=='POST'){
$email=$_POST["toid"];
$msg=$_POST["message"];


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
    $mail->SetFrom($email);
    $mail->AddAddress($email);
    $mail->Subject = "OTMS";
    $mail->Body = $msg;


     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent ";
     }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Send Gmail</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<meta name="robots" content="noindex, nofollow">
</head>
<body>
<div id="main">
<h1><center>SEND MAIL</h1>
<div id="login">

<hr/>
<form action="admin_mail.php" method="post">
<h3>Enter mail to send</h3>
<input type="text" placeholder="To : Email Id " name="toid"/>
<br>
<h3>Enter message to send</h3>
<textarea rows="4" cols="50" placeholder="Enter Your Message..." name="message"></textarea>
<input type="submit" value="Send" name="send"/>
</form>
</div>
</div>
</center>
</body>
</html>
