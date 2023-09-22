<?php
if (empty($_POST['color'])) {
    echo "<h2>No se ha seleccionado color</h2>";
} else {
    $color = $_POST['color'];
    echo "<body style='background-color:$color'>";
    switch ($color) {
        case "#F30F0F":
            echo "<h2>El color seleccionado ha sido rojo</h2>";
            break;
        case "#3BED0F":
            echo "<h2>El color seleccionado ha sido verde</h2>";
            break;
        case "#0FBEED":
            echo "<h2>El color seleccionado ha sido azul</h2>";
            break;
        case "#EDE60F":
            echo "<h2>El color seleccionado ha sido amarillo</h2>";
            break;
        case "#BB0FED":
            echo "<h2>El color seleccionado ha sido morado</h2>";
            break;
    }
}
echo "<a href='ejercicio3-4.php'>Selecciona otro color</a>";
echo "</body>";
