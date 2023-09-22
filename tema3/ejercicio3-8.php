<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Formulario</title>
</head>

<body>
    <div class="container w-50 mx-auto mt-4">
        <form action="ejercicio3-8.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="text" class="form-control" name="edad">
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Sube una imagen:</label>
                <input type="file" class="form-control" name="imagen">
            </div>
            <button type="submit" class="btn btn-primary" value="buscar">Buscar</button>
        </form>
        <?php
        if (!empty($_POST)) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $imagen = $_FILES['imagen'];
            $origen = $imagen['tmp_name'];
            $archivonombre = $imagen['name'];
            $destino = "./imagenes/$archivonombre";
            move_uploaded_file($origen, $destino);
            echo "<h2>Datos de alumnos</h2>";
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Apellido: $apellido</p>";
            echo "<p>Edad: $edad</p>";

            echo "<h2>Imagen</h2>";
            echo "<p>Nombre de la imagen: " . $_FILES['imagen']['name'] . "</p>";
            echo "<p>Tipo de imagen: " . $_FILES['imagen']['type'] . "</p>";
            echo "<p>Tamaño de la imagen: " . $_FILES['imagen']['size'] . "</p>";
            echo "<img src='$destino'>";
        }
        ?>
    </div>
</body>

</html>