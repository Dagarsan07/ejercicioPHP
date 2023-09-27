<!DOCTYPE html>

<?php
if (isset($_POST['nombre'])) {
    setcookie("persona", $_POST['nombre']);
}
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <div class="container mt-4 mx-auto">
        <h1 class="text-center">Datos del Usuario</h1>
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <form action="ejercicio3-9.php" method="post">
                    <div class="form-group">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                    <button class="btn btn-primary mt-3" value="buscar">Buscar</button>
                </form>
            </div>
        </div>
        <div class="text-center mt-3">
            <?php
            if (isset($_COOKIE['persona'])) {
                $nombre = $_COOKIE['persona'];
                echo "<h3>Datos del usuario (Cookie)</h3>";
                echo "<p>Bienvenid@ de nuevo: $nombre</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>