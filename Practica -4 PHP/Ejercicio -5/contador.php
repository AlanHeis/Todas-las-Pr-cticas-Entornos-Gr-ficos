<?php
$archivo = "contador.dat";

$abrir = fopen($archivo, "r");
if (filesize($archivo) > 0) {
    $cont = fread($abrir, filesize($archivo));
} else {
    $cont = 0;
}
fclose($abrir);

$abrir = fopen($archivo, "w");
$cont = $cont + 1;
fwrite($abrir, $cont);
fclose($abrir);

echo "<font face='arial' size='3'>Cantidad de visitas: " . $cont . "</font>";
?>