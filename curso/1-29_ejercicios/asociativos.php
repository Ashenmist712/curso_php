<?php

$persona = [
    "nombre" => "Axel",
    "edad" => 20,
    "ciudad" => "CDMX",
    "profesion" => "programador"
];

foreach ($persona as $key => $value) {
    /*     echo $value; //para ver el valor
    echo "<br>";
    echo $key . ":"; //para ver la llave
    echo "<br>";
    echo "la llave es: $key y el valor es: $value"; //para mostrar ambos
    echo "<hr>"; */
    if (is_int($value)) {
        echo "El entero es: $value";
    }
}
