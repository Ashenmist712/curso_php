<?php
/*
*verificar si un numero es
negativo
o
positivo
*/
$numero = -5;
if ($numero >= 0) {
    echo "El numero: $numeroes positivo";
} else {
    echo "El numero: $numero es negativo";
}

echo "<hr>";

//verificar si un usuario esta logeado

$usuarioLogeado = false;

if ($usuarioLogeado) {
    echo "Bienvenido";
} else {
    echo "Por favor inicia sesion";
}
