<?php

//validacion si,ple
do {
    $respuesta = "no";
    echo "¿Desea continuar? (si/no): ";
} while ($respuesta === "si");

echo "<hr>";

//iteracion garantizada
$contador = 1;
do {
    echo "Ejecucion de : $contador" . "<br>";
    $contador++;
} while ($contador <= 3);
