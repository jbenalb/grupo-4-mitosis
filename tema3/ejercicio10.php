<?php
include ('funciones.php');
$lista= array();
$lista[0]="Hola";
$lista[1]="si";
$lista[2]="que";

$texto= "Hola que tal, si estoy bien";
//Tipo de texto
//- c -> cursiva
//- n -> negrita
//- t -> tachado
//- s -> subrayado
//- else -> sin modificar
$resalte="n";

ejercicio10($lista,$texto,$resalte);
