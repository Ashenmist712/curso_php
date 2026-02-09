<?php
//conexion con MySQLi

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "curso";
$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

$nombre = "Axel";
$email = "axel@gmail.com";

$sql = "INSERT INTO t_usuarios (nombre,email)
        VALUES ('$nombre', '$email')";

if (mysqli_query($conexion, $sql)) {
    echo "Usuario agregado con exito ! :)";
} else {
    echo "El usuario no se agrego :(" . mysqli_errno($conexion);
}
mysqli_close($conexion);
