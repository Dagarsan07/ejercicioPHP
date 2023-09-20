<?php
function bienvenida($nombre, $apellido)
{
    echo "<h1>Información enviada</h1>";
    echo "<p>Bienvenido <strong>$nombre $apellido!!!</strong></p>";
    echo '<a href="ejercicio3-1.php">Rellene el formulario</a>';
}
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
bienvenida($nombre, $apellido);
