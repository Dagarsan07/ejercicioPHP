<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <div class="container mt-4 mx-auto">
        <h1 class="text-center">Formulario para iniciar sesión</h1>
        <div class="card w-25 mx-auto mt-3">
            <div class="card-body">
                <form action="ejercicio3-11-2.php" method="post">
                    <div class="form-group">
                        <label for="usuario" class="form-label">Usuario:</label>
                        <input type="text" name="usuario" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <input class="mt-3 btn btn-primary" type="submit" name="enviar" value="Enviar Datos">
                </form>
            </div>
        </div>
    </div>
</body>

</html>