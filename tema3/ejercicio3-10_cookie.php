<!DOCTYPE html>

<?php
if (isset($_COOKIE['ultima_sesion'])) {
    $ultima_sesion = $_COOKIE['ultima_sesion'];
    echo "<p>Su última sesión fue: $ultima_sesion</p>";
} else {
    echo "<p>Aún no se ha creado una cookie</p>";
}

$fecha = date('Y-m-d H:i:s');
setcookie('ultima_sesion', $fecha);
echo "<p>Se ha creado o actualizado su última sesión: $fecha</p>";
?>