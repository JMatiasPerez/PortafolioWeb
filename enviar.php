<?php
if ($_SERVER["REQUEST_METHOD"] == "post") {
$name = $_post['name'];
$mail = $_post['mail'];
$message = $_post['message'];
    
$header = 'From: ' . $mail . " \r";
$header .= "X-Mailer: PHP/" . phpversion() . " \r";
$header .= "Mime-Version: 1.0 \r";
$header .= "Content-Type: text/plain \r";
$header .= "Location: index.html\r";
    
$message = "Este mensaje fue enviado por: " . $name . " \r";
$message .= "Su e-mail es: " . $mail . " \r";
$message .= "Mensaje: " . $_POST['message'] . " \r";
$message .= "Enviado el: " . date('d/m/Y', time());
    
$para = 'mati_84_51@hotmail.com';
$asunto = 'Mensaje desde portafolio...';
    
mail($para, $asunto, utf8_decode($message), $header);
    
header("Location: index.html");
exit();
}
?>