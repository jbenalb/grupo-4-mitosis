<?php
//Ejercicio 1. Función cabecera_apertura_html con un parámetro de entrada
// y devolverá un parámetro de salida.
// y función cierre_html() sin parámetros de entrada
// Ambos strings.
include ('funciones.php');

$titulo = "Texto de ejemplo"; //(string) readline("Incluye el titulo de la pagina: ")"";
cabecera_apertura_html($titulo);
cierre_html();
?>
