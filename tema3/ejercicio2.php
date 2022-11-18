<?php
include ('funciones.php');

$cadena = "Texto de prueba";

echo "<p>¿Cómo desea el texto?<p>";
echo "<p> - cursiva (c)<p>";
echo "<p>- negrita (n)<p>";
echo "<p> - tachado (t)<p>";
echo "<p> - subrayado (s) <p>";

$logico = "n";

echo cursiva($cadena, $logico);

?>