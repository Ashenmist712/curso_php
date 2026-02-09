<?php

/* var_dump($_POST);
$materia = $_POST['Materia'];

if ($materia == 'Programacion') {
    echo "Felicidades por estudiar";
} */

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "El formulario se proceso bien :)";
} else {
    echo "El formulario no se proceso bien :(";
}
