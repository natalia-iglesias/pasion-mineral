<?php

$nombre = $_REQUEST['nombre'];
$email = $_REQUEST['email'];
$telefono = $_REQUEST['telefono'];
$mensaje = $_REQUEST['mensaje'];

$body = 'nombre:' . $nombre . '<br/>';
$body .= 'email:' . $email . '<br/>';
$body.= 'telefono:' . $telefono . '<br/>';
$body.= 'mensaje:' . $mensaje;

$asunto = 'Ha recibido un nuevo mensaje de Innovations Digital Plus';

// Cabeceras del correo
$cabeceras = 'From: ' . $email . "\r\n" .
             'Reply-To: ' . $email . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

// Enviar el correo
if (mail($para, $asunto, $mensaje_correo, $cabeceras)) {
    echo 'El mensaje ha sido enviado correctamente.';
} else {
    echo 'Error al enviar el mensaje.';
}

echo $body;
die();