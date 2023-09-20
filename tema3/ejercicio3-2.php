<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="recoger_datos_post.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre"> <br> <br>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido"> <br> <br>
        <label for="email">Email: </label>
        <input type="email" name="email"> <br> <br>
        <button type="submit" name="enviar">Enviar</button>
    </form>
</body>

</html>