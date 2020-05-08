
<?php
include('session.php');
$mysqli=new mysqli("localhost","root","","userdetails");
echo "<a href='userhome.php'>Back</a>";

$sql="select * from userdetails where id='$login_session[0]'";
$res=$mysqli->query($sql);
$row=$res->fetch_assoc();
$email=$mysqli->real_escape_string($row["email"]);


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
    $mail->Body = "Your order is placed successfully.Thank you!! Happy Shopping with OTMS :D";


     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent to your mail";
     }
?>
