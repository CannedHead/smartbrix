<?php

// $email and $message are the data that is being
// posted to this page from our html contact form
$name = $_REQUEST['name'] ;
$email = $_REQUEST['email'] ;
$telephone = $_REQUEST['telephone'] ;
$interest = $_REQUEST['interest'] ;


// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
require("mailer/PHPMailerAutoload.php");



$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'smartbrix.diseno@gmail.com';                 // SMTP username
$mail->Password = 'smartbrix08';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('alega@smartbrix.com');     // Add a recipient         // Name is optional




$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Se ha contactado alguien en SmartBrix';
$mail->Body    = '<h4>Información del cliente</h4><p> <b>Nombre:</b>'. $name . '<br> <b>E-mail:</b>' . $email . '<br><b>Teléfono:</b>' . $telephone . '<br><b>Interes:</b>' .$interest. '</p>';


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>