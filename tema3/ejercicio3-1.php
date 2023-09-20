<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1>Formulario</h1>
    <form name="persona" action="recoger_datos.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre"> <br> <br>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido"> <br> <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>