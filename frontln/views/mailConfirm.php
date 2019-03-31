<?php
require '../phpMailer/PHPMailerAutoload.php';

if(!isset($_SESSION)) 
    { 
        session_start(); 

    } 


    
function sendMail($name,$maill,$message)
{
    $url=$_SERVER['HTTP_REFERER'];
    $mail = new PHPMailer;
    $msg = wordwrap($message,70);
    $mail->Debugoutput = 'html';
    // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'siwar.hassen@esprit.tn';                 // SMTP username
    $mail->Password = 'lufian2018';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    $mail->From = $maill;
    $sujet=$name;
     
    $mail->addAddress($maill);               // Name is optional
    $mail->Subject = $sujet;
    //$mail->Body    = ;

   
  $mail->MsgHTML(
$message
);
	
    if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}

$url=$_SERVER['HTTP_REFERER'];
//header('location:'.$url);?>