<?php
$destinatario = "alanjheis@gmail.com";
$asunto = "Correo de prueba";
$cuerpo = "
<html>
<body>
    <h1>Hola!</h1>
    <p>Este es un correo enviado con <b>formato HTML</b> desde PHP.</p>
</body>
</html>
";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: remitente@gmail.com\r\n";

if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "Correo enviado correctamente.";
} else {
    echo "Error al enviar el correo.";
}
?>