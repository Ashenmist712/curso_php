<?php

try {
    $a = 10;
    $b = 0;
    if ($b === 0) {
        throw new Exception("No se puede dividir entre: 0");
    }
    echo $a / $b;
} catch (\Throwable $th) {
    echo $th->getMessage();
} finally {
    echo "Operacion finalizada";
}
echo "<hr>";
//validacion de gmail este puede venir por formulario html
try {
    $email = "correo@hola.com";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("El correo no es valido");
    }
    echo "El correo es valido" . $email;
} catch (Exception $th) {
    echo "Error " . $th->getMessage();
}
