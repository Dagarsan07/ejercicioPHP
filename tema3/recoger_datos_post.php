<?php
if (isset($_POST['enviar'])) {
    mostrar();
} else {
    echo "<p>El formulario no se ha enviado</p>";
}

function mostrar()
{
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    if (empty($nombre) || empty($apellido) || empty($email)) {
        echo "<p>Faltan datos por introducir</p>";
    } else {
        echo "<p>Nombre: <strong>$nombre</strong></p>";
        echo "<p>Apellido: <strong>$apellido</strong></p>";
        echo "<p>Email: <strong>$email</strong></p>";
    }

    echo '<a href="ejercicio3-2.php">Volver al formulario</a>';
}
