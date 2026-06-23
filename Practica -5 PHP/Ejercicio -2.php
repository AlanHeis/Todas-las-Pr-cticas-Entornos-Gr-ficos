<?php
if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    $destinatario = "webmaster@gmail.com";
    $asunto = "Consulta de: " . $nombre;
    $cuerpo = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
    $headers = "From: $email\r\n";
    
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "<p>Consulta enviada correctamente.</p>";
    } else {
        echo "<p>Error al enviar.</p>";
    }
}
?>
<html>
<head><title>Contacto</title></head>
<body>
    <h2>Contacto</h2>
    <form method="post">
        <label>Nombre:</label><br>
        <input type="text" name="nombre"><br><br>
        <label>Email:</label><br>
        <input type="text" name="email"><br><br>
        <label>Mensaje:</label><br>
        <textarea name="mensaje" rows="5" cols="40"></textarea><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>