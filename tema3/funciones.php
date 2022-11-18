<?php
//*****************EJERCICIO 1*******************
function cabecera_apertura_html($titulo){
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>"; echo "<title>$titulo</title>";
    echo "</head>";
    echo "<body>";
    }

function cierre_html() {
 echo "</body>";
 echo "</html>";
}

//*************EJERCICIO 2 + AMPLIACION**************

function cursiva($texto, $logico) {
    //Tipo de texto
    //- c -> cursiva
    //- n -> negrita
    //- t -> tachado
    //- s -> subrayado
    //- else -> sin modificar
    switch (strtolower($logico)){
        case "c":
            return "<i> $texto </i>";
            //echo "<i> $texto </i>";

            break;
        case "n":
            return "<b> $texto </b>";
            //echo "<b> $texto </b>";
            break;
        case "t":
            return "<s> $texto </s>";
           // echo "<s> $texto </s>";
            break;
        case "s":
            return "<u> $texto </u>";
            //echo "<u> $texto </u>";
            break;
        default:
            return "<p> $texto </p>";
           // echo "<p> $texto </p>";
            break;
    }
}

////*************EJERCICIO 3 **************
function titulo($cad, $num) {
    echo "<h$num> $cad </h$num>";
}

//*************EJERCICIO 4 **************
function enlace($link, $txt, $tipo) {
    echo "<a href='https://$link' target='$tipo'>$txt</a>";
}

//*************EJERCICIO 5 **************
function enlace2($palabra, $tipo,$web) {
    $link=$web . $palabra;
    enlace($link,$palabra,$tipo);
}

//*************EJERCICIO 6 **************


function enlace3($palabra,$web,$tipo){
    enlace2($palabra, $tipo,$web);
}






//*************EJERCICIO 7 **************
function resaltador($palabra, $texto) {
    $logico = "n";
    //$var = - strlen($texto);
    //for ($i=0; $i<=strlen($texto); $i++) {
       // if ($palabra == substr($texto, $var+$i, strlen($palabra))) {
    //$txt_html=cursiva($palabra, $logico);
   // $text=str_replace($palabra, $txt_html, $texto);
           $text=str_replace($palabra, cursiva($palabra, $logico), $texto);
           //$text=str_replace($palabra, "zanahorias", $texto);
           // echo preg_replace($texto, $palabra, cursiva($palabra,$logico));
       // }
    //}
    echo $text;
}

//*************EJERCICIO 8 **************
function crea_lista($vector) {
    $logico = count($vector);
    echo "<ul>";
        for ($i; $i <= $logico; $i++) {
            echo "<li> $vector[$i] </li>";
    }
    echo "</ul>";

}

//*************EJERCICIO 9 **************
function definiciones($vector) {
    $tipo = "";
    for ($i=0; $i<count($vector);$i++) {
        $vector[$i]= enlace($vector[$i], $vector[$i], $tipo);
    }
    foreach($vector as $valor -> $i) {
        crea_lista($vector[$i]);
    }

}
//*************EJERCICIO 10 **************
function ejercicio10($list_pal,$text,$resalte){

    $txt=str_replace($list_pal[0], cursiva($list_pal[0], $resalte), $text); //por defecto se ejecuta una vez, para luego
                                                                            //sustutir el texto pasado por parametro $text, por el texto
                                                                            //ya modificado $txt
        for ($i=1; $i<count($list_pal); $i++) {
                $txt=str_replace($list_pal[$i], cursiva($list_pal[$i], $resalte), $txt);
                echo $txt;
        }

    echo "<p>$txt<p>";
}

//*************EJERCICIO 11 **************
function ejercicio11($array_asoc,$tip_titulo)
{
    foreach ($array_asoc as $item => $value) { //item=indice del array y value el valor de la posicion del array
        $enlace = "https://dle.rae.es/$item";
        $titulo = "h$tip_titulo";

        echo "<$titulo>$item</$titulo>";
        echo "<p>$value</p>";
        echo "<a href=$enlace>Ver definición de perro en RAE</a>";
    }
}
?>
