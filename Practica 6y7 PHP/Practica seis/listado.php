<?php
include("conexion.php");
$resultado = mysqli_query($link, "SELECT * FROM Ciudades");
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Ciudad</th><th>Pais</th><th>Habitantes</th><th>Superficie</th><th>Metro</th></tr>";
while($fila = mysqli_fetch_array($resultado)) {
    echo "<tr>";
    echo "<td>".$fila['id']."</td>";
    echo "<td>".$fila['ciudad']."</td>";
    echo "<td>".$fila['pais']."</td>";
    echo "<td>".$fila['habitantes']."</td>";
    echo "<td>".$fila['superficie']."</td>";
    echo "<td>".$fila['tieneMetro']."</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($link);
?>