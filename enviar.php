<?php
$name = $_POST['nombre'];
$tel = $_POST['num'];
$email = $_POST['email'];
$comment = $_POST['comentarios'];

$header = 'De: ' . $email . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-version: 1.0 \r\n";
$header .= "Content-Type text/plain";

$mensaje = "Cliente: " . $name . "\r\n";
$mensaje .= "Teléfono del cliente: " . $num . "\r\n";
$mensaje .= "Email del cliente: " . $email . "\r\n";
$mensaje .= "Comentarios: " . $comment . "\r\n";

$para = 'giovannitcas1604@gmail.com';
$asunto = 'Comentario de cliente';

if (mail($para, $asunto, utf8_decode($mensaje), $header)) 
echo "<script type= 'text/javascript'>alert('Tus comentarios hansido enviados con éxito');</script>";


?>