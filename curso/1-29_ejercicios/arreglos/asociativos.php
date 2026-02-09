<?php

$persona = array(
    "nombre" => "Axel",
    "edad" => 20,
    "ciudad" => "CDMX"
);

//forma corta

$producto = [
    "nombre" => "Laptop",
    "precio" => 10000,
    "marca" => "Dell"
];

//acceso

echo $persona["nombre"];

//agregar elementos
$persona["profesion"] = "Ingeniero";
echo "<pre>";
var_dump($persona);
echo "</pre>";
