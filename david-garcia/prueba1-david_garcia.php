<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Formulario</title>
</head>

<body style="background-color: lightgray;">
    <div class="container mx-auto mt-4">
        <h1 class="text-center">Prueba - David García</h1>
        <div class="card w-25 mx-auto mt-4">
            <div class="card-body">
                <form action="prueba2-david_garcia.php" method="post">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre">
                    <label for="apellido" class="form-label mt-2">Apellido:</label>
                    <input type="text" class="form-control" name="apellido">
                    <label for="nivel" class="form-label mt-2">Nivel:</label>
                    <select name="nivel" class="form-select">
                        <option value="Primer nivel">Primer nivel</option>
                        <option value="Segundo nivel">Segundo nivel</option>
                    </select>

                    <button class="btn btn-primary col-3 mt-4" value="enviar">Enviar</button>
                    <button class="btn btn-primary col-3 mt-4">Borrar</button>
                </form>
            </div>
        </div>
        <p class="text-center mt-2">David García</p>
    </div>

</body>

</html>