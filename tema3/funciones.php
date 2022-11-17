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
            echo "<i> $texto </i>";
            break;
        case "n":
            echo "<b> $texto </b>";
            break;
        case "t":
            echo "<s> $texto </s>";
            break;
        case "s":
            echo "<u> $texto </u>";
            break;
        default:
            echo "<p> $texto </p>";
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
    $logico = "c";
    $var = - strlen($texto);
    for ($i=0; $i<=strlen($texto); $i++) {
        if ($palabra == substr($texto, $var+$i, strlen($palabra))) {
           str_replace($palabra, cursiva($palabra, $logico), $texto);
           // echo preg_replace($texto, $palabra, cursiva($palabra,$logico));
        }
    }
    echo $texto;
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
        $vector[$i]= enlace($vector, $vector, $tipo);
    }
    foreach($vector as $valor -> $i) {
        crea_lista($vector[$i]);
    }

}

?>
