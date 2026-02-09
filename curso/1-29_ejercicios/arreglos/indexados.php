<?php

//forma uno
$frutas = array("naranja", "moras", "fresas");

//esta etiqueta es para mostrar el arreglo de una manera horizontal, en vez de una sola linea
echo "<pre>";
var_dump($frutas);
echo "</pre>";
echo "<hr>";
//forma dos
$colores = ["azul", "negro", "rojo", "naranja"];

echo "<pre>";
var_dump($colores);
echo "</pre>";

echo "<hr>";
//para acceder a un elemento de un arreglo ponemos:
echo $frutas[1];

//exite una manera de agregar un elemento al final del arreglo es:
echo "<hr>";
$colores[] = "gris";
$colores[1] = "blanco";
$colores[10] = "purpura";
var_dump($colores);
