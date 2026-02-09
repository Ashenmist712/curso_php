<?php

//arreglo bidimensional

$estudiantes = [
    ["Axel", 20, "Ingeniero"],
    ["Jael", 24, "Abogado"]
];

//como acceder a los bidimensionales
echo $estudiantes[0][0]; //nombre
echo "<br>";
echo $estudiantes[1][2]; //profesion

//arreglo multidimensional

$productos = [
    "laptop" => [
        "marca" => "HP",
        "precio" => 10000,
        "stock" => 5
    ],
    "mause" => [
        "marca" => "logitech",
        "precio" => 500,
        "stock" => 20
    ]
];
echo "<hr>";
echo $productos["laptop"]["precio"];
