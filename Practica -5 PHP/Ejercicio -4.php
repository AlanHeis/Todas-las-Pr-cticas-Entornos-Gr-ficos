<?php
session_start();

if (!isset($_SESSION['paginas'])) {
    $_SESSION['paginas'] = 0;
}

$_SESSION['paginas']++;

echo "<p>Has visitado " . $_SESSION['paginas'] . " página/s durante esta sesión.</p>";
echo "<a href='ejercicio4.php'>Recargar página</a>";
?>