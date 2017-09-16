<?php
echo !extension_loaded('openssl')?"Not Available":"Available";
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$s = new SMTP;
$s->setTimeout(60); 
$mail->setSMTPInstance($s);
$mail->IsSMTP();                              // send via SMTP
$mail->Host = "ssl://smtp.gmail.com"; 
$mail->SMTPAuth = true;                       // turn on SMTP authentication
$mail->Username = "iamcoolquaid@gmail.com";        // SMTP username
$mail->Password = "1234ultimate";               // SMTP password
$webmaster_email = "myemail@gmail.com";       //Reply to this email ID
$email="tahapipewala@gmail.com";                // Recipients email ID
$name="My Name";                              // Recipient's name
$mail->From = $webmaster_email;
$mail->Port = 465;
$mail->FromName = "My Name";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"My Name");
$mail->WordWrap = 50;                         // set word wrap
$mail->IsHTML(true);                          // send as HTML
$mail->Subject = "subject";
$mail->Body = "Hi,
This is the HTML BODY ";                      //HTML Body 
$mail->AltBody = "This is the body when user views in plain text format"; //Text Body 

if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent";
}
?>
