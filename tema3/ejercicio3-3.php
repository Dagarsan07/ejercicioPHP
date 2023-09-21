<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3.3</title>
</head>

<body>
    <h1>Formulario de Alta</h1>
    <?php
    if (!isset($_POST['enviar'])) {


    ?>
        <form action="ejercicio3-3.php" method="post">
            <label for="nombre">Usuario: </label> <br>
            <input type="text" name="nombre"> <br> <br>
            <label for="contrasenna">Contraseña: </label> <br>
            <input type="password" name="contrasenna"> <br> <br>
            <button type="submit" name="enviar">Enviar Datos</button>
        </form>
    <?php
    } else {
        $usuario = $_POST['nombre'];
        $password = $_POST['contrasenna'];
        if (empty($usuario) || empty($password)) {
            echo "<p>Error. Es obligatorio meter datos de usuario y contraseña</p>";
            echo "<a href='ejercicio3-3.php'>Volver al formulario</a>";
        } else {
            echo "<p>Hola <strong>$usuario</strong>!! Bienvenido!!</p>";
        }
    }
    ?>
</body>

</html>