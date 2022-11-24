<?php
include ('funciones.php');

//Ejercicio 2. Entrada una cadena con el texto y un carácter que indica la modificación del texto.
// Cadena : string.
// Logico: string.
$cadena = "Texto de prueba";

echo "<p>¿Cómo desea el texto?<p>";
echo "<p> - cursiva (c)<p>";
echo "<p>- negrita (n)<p>";
echo "<p> - tachado (t)<p>";
echo "<p> - subrayado (s) <p>";

$logico = "n";

//Función salida: string
echo cursiva($cadena, $logico);

?>