<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    if (!empty($_POST['nombre'])) {
        echo "El nombre es $nombre";
    } else {
        echo "No mandaste nombre :(";
    }
}
?>
</DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="text-align: center;">Procesar Formulario en el mismo Script</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="">Escribe tu nombre</label>
        <br>
        <input type="text" name="nombre">
        <br>
        <button>Procesar</button>

    </form>
</body>

</html>