<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incrustado</title>
</head>

<body>
    <h1 style="text-align: center; ">Bienvenido</h1>
    <?php

    $nombre = "Axel";
    echo "<p style='text-align: center;'>Hola " . $nombre . "</p>";

    ?>
    <u>
        <p>Este es un blucle de controles div</p>
        <?php
        $nombre = "Axel";
        $edad = 20;
        for ($i = 0; $i <= 4; $i++):
            echo "<li>Elemento " . ($i + 1) . "</li>";
        endfor;
        ?>
    </u>
    <h2>Usuario: <?= $nombre ?></h2>
    <p>Edad: <?= $edad ?></p>

</body>

</html>