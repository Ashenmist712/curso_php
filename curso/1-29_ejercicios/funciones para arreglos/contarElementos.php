<?php

/* $numeros = [1, 2, 3, 4, 5];

echo "<h4>Para contar el numero de  elemtentos que contine un arreglo</h4>";
echo count($numeros);
echo "<hr>"; */

//para agregar un elemento al final 
/* echo "<h4>Para agregar un elemento al final del arreglo</h4>";
array_push($numeros, 6);

echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<hr>"; */
//para agregar un elemento al inicio 
/* echo "<h4>Para agregar un elemento al inicio del arreglo</h4>";
array_unshift($numeros, 0);
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<hr>"; */
//eliminar al final de un arreglo
//echo "<h4>Para eliminar el ultimo elemento de un arreglo</h4>";

/* $elimino = array_pop($numeros);
echo $elimino;
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<hr>"; */

//eliminar al inicio de un arreglo
/* echo "<h4>Para eliminar el primer elemento de un arreglo</h4>";
$elInicio = array_shift($numeros);
echo $elInicio;
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<hr>";
 */
//verificar si existe una clave
/* echo "<h4>Para verificar si existe una clave en un arreglo</h4>";
$personas = [
    "nombre" => "Axel",
    "curso" => "PHP"
];

if (array_key_exists("nombre", $personas)) {
    echo "El nombre esta en el arreglo";
} else {
    echo "No se encuentra el valor";
}
echo "<hr>"; */
// funciones de ordenamiento
echo "<h4>Funciones de ordenamiento</h4>";
//Orden ascendente
$numeros = [5, 3, 1, 4, 2];
sort($numeros);
print_r($numeros);
echo "<hr>";

//orden descendente

rsort($numeros);
print_r($numeros);
echo "<hr>";

//combinar arreglos
$arregloA = [1, 2, 3];
$arregloB = [4, 5, 6];

//para juntaer los arreglos ocupamos array_merge
$arregloC = array_merge($arregloA, $arregloB);
print_r($arregloC);
echo "<hr>";

//buscar un elemento en un arreglo
echo "<h4>Buscar un elemento en un arreglo</h4>";
$posicion = array_search(6, $arregloB);
print_r($posicion); //esto solo nos va a dar en la pasicion en la que el elemento se encuentra
echo "<br>";
echo $arregloB[$posicion]; //nos va a mostrar el valor que estamos buscando

echo "<hr>";
