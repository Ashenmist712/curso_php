<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

echo "<hr>";
//tabla de multiplicar 
$numero = 2;

for ($i = 1; $i <= 10; $i++) {
    $tabla = $numero . "x" . $i . "=" . ($numero * $i);
    echo $tabla . "<br>";
}
