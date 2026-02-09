<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_FILES["archivo"]["name"];
    $temporal = $_FILES["archivo"]["tmp_name"];
    $destino = "subidos/" . $nombre;

    if (move_uploaded_file($temporal, $destino)) {
        echo "archivo subido con exito";
    } else {
        echo "no se subio el archivo";
    }
}
