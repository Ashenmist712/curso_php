<?php

declare(strict_types=1); //esto hace que se tenga que respetar el tipo de dato, tambien podemos poner 0

function dividir(float $valor1, float $valor2): float
{
    return $valor1 / $valor2;
}

echo dividir(10, 2);
echo dividir(10, 2);
