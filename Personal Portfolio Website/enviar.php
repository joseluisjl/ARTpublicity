<?php
$name = $_POST["Name"];
$email = $_POST["Email"];
$Subject = $_POST["Subject"]
$Message = $_POST["Message"]

$header = 'from: ' . $email. "\r\n";
$header .= "X-Mailer:php/" . phpversion() . "\r\n";
$header .= "mine-version: 1.0 \r\n";
$header .= "content-type: text/plain";

$message = "este es un enviado por: " . $name . "\r\n";
$message .= "su email es: " . $email ."\r\n";
$message .= "escribe algo" . $subject . "\r\n";
$message .= "mensaje: " . $_POST['message'] . "\r\n";
$message .= "enviado al: " . date('d/m/Y', time());

$para = 'artpublicity989@gmail.com';
$asunto= 'asunto del mensaje';

email($para, $asunto, utf8_decode($message), $header);

header("location:index.html");
?>