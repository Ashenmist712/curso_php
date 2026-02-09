<?php

if (true) {
    echo "Esta condicion se ejcuto de maera correcta";
}
echo "<hr>";
//verificar si el numero es mayor a 10
$numero = 15;
if ($numero > 10) {

    //interpolacion
    echo "El numero: $numero es mayor a 10";
}
echo "<hr>";

//verificar si una varianle esta definida y no esta vacia

$texto = "Hola a todos!";

if (isset($texto) && !empty($texto)) {
    echo "El texto: $texto es valido";
}
echo "<hr>";
// verificar si una persona tiene acceso

$estaRegistrado = true;

if ($estaRegistrado) {
    echo "Acceso concedido";
}
