<?php
if (isset($_POST['enviar'])) {
    $email_amigo = $_POST['email_amigo'];
    $Alan = $_POST['Alan'];
    
    $destinatario = $email_amigo;
    $asunto = "$Alan te recomienda este sitio";
    $cuerpo = "Hola!\n\n$Alan te recomienda visitar nuestro sitio web.\n\nhttp://www.tusitio.com";
    $headers = "From: recomendacion@tusitio.com\r\n";
    
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "<p>Recomendación enviada correctamente.</p>";
    } else {
        echo "<p>Error al enviar.</p>";
    }
}
?>
<html>
<head><title>Recomendar sitio</title></head>
<body>
    <h2>Recomendar a un amigo</h2>
    <form method="post">
        <label>Tu nombre:</label><br>
        <input type="text" name="Alan"><br><br>
        <label>Email de tu amigo:</label><br>
        <input type="text" name="email_amigo"><br><br>
        <input type="submit" name="enviar" value="Enviar recomendación">
    </form>
</body>
</html>