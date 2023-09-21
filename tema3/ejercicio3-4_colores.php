<?php
$color = $_POST['color'];
if (empty($color)) {
    echo "<h2>No se ha seleccionado color</h2>";
} else {
    echo "<h2>El color seleccionado ha sido $color</h2>";
}
echo "<a href='ejercicio3-4.php'>Selecciona otro color</a>";
