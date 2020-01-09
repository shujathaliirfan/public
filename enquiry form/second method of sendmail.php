<?php

require_once "php-mailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['number'];
  $message = $_POST['message'];
$msg="
<html>
<head>
<style>

</style>
</head>
<body>
<p>A New Mail Received</p>
<table border='1' cellspacing='0' cellpadding='5' style='border-color: #fff;width: 70%' >
<tr>
<td style='background-color: #266986; color: #fff; '>Name</td>
<td>$name</td>
</tr>

<tr>
<td style='background-color: #266986; color: #fff;'>Email</td>
<td>$email</td>
</tr>

<tr>
<td style='background-color: #266986; color: #fff;'>Mobile</td>
<td>$mobile</td>
</tr>

<tr>
<td style='background-color: #266986; color: #fff;'>Message</td>
<td>$message</td>
</tr>
</table>
</body>
</html>";
//echo $msg;
//exit();
//Enable SMTP debugging. 
$mail->SMTPDebug =0;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "mail.venchembiotech.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "info@venchembiotech.com";                 
$mail->Password = "info@venchem";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "ssl";                           
//Set TCP port to connect to 
$mail->Port = 465;                                   
$mail->From = "info@venchembiotech.com";
$mail->FromName = "venchembiotech";

$mail->addReplyTo("info@venchembiotech.com", "Venchem");
$mail->addAddress("venchembiotech@gmail.com", "Venchem Biotech");
$mail->addCC("mohan@xmediasolution.com", "Mohan");
//Set CC address
// $mail->addCC("info@revolite.io", "Revolite");
$mail->isHTML(true);

$mail->Subject = "You Have New mail form venchembiotech";
$mail->Body = $msg;
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    // echo "Message has been sent successfully";
    echo"<script>alert('Message has been sent successfully');
    window.location.href = 'index.html';</script>";
  
}
