<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio3-7.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fichero" type="MAX_FILE_SIZE" value="15000">
        <button type="submit" value="subir">Subir archivo</button>
    </form>
    <?php
    if (empty($_FILES["fichero"])) {
        echo "<p>No has subido ningún archivo. Selecciona uno</p>";
        echo "<a href='ejercicio3-7.php'>Volver al formulario</a>";
    } else {
        if ($_FILES["fichero"]['size'] > 15000) {
            echo "<p>Error. El archivo es demasiado pesado. Elige otro</p>";
        } else {
            echo "<p>Se ha subido correctamente el fichero</p>";
        }
    }
    ?>
</body>

</html>