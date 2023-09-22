<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio3-6.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
        <input type="file" name="fichero"> <br> <br>
        <button type="submit" value="subir">Subir</button>
    </form>
    <?php
    $fichero = $_FILES["fichero"];
    if (empty($fichero)) {
        echo "<p>No has subido ningún archivo. Selecciona uno</p>";
        echo "<a href='ejercicio3-6.php'>Volver al formulario</a>";
    } else {
        foreach ($fichero as $propiedad => $valor) {
            echo "<p>Propiedad: $propiedad - Valor: $valor</p>";
        }
    }
    ?>
</body>

</html>