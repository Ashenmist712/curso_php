<?php

function multiplicar($valor1, $valor2)
{
    return $valor1 * $valor2;
}

multiplicar(8, 8);
//para mostrar en el navegador necesitmos un echo
echo multiplicar(8, 8);

$total = multiplicar(7, 7);

if ($total < 100) {
    echo "$total Es un valor menor a 100";
}
