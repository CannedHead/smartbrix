<?php

// $email and $message are the data that is being
// posted to this page from our html contact form
$name = $_REQUEST['name'] ;
$edad = $_REQUEST['edad'] ;
$anos = $_REQUEST['anos'] ;
$email = $_REQUEST['email'] ;
$linkcv = $_REQUEST['linkcv'];
$interest = $_REQUEST['interest'] ;


// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
require("mailer/PHPMailerAutoload.php");



$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'julian@cannedhead.com';                 // SMTP username
$mail->Password = 'Idiota90GRAFO';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('contact@cannedhead.com');     // Add a recipient         // Name is optional




$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Se ha contactado alguien en SmartBrix';
$mail->Body    = '<h4>Información del cliente</h4><p> <b>Nombre:</b>'. $name . '<br> <b>Edad:</b>' . $edad . '<br> <b>E-mail:</b>' . $email . '<br><b>Link CV:</b>' . $linkcv . '<br><b>Interes:</b>' . $interest . '</p>';


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>