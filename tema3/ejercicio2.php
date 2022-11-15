<?php
include ('funciones.php');
$cadena = "Texto de prueba";
echo "¿Cómo desea el texto?";
echo " - cursiva (c)";
echo " - negrita (n)";
echo " - tachado (t)";
echo " - subrayado (s) \n";
$logico = "t";

cursiva($cadena, $logico);
?>