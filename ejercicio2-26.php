<html>

<head>
    <h1>Ejercicio 2.26</h1>
</head>

<body>
    <?php
    function seleccionarGanador($eleccion)
    {
        global $opciones;
        $aleatorio = array_rand($opciones, 1);
        echo "<p>Tu elección: " . $opciones[$eleccion];
        echo "<p>Elección de la computadora: " . $opciones[$aleatorio];
        if ($opciones[$eleccion] == $opciones[$aleatorio]) {
            echo "<p>El resultado es: EMPATE</p>";
        } else {
            switch ($aleatorio) {
                case 0:
                    if ($eleccion == 1) {
                        echo "<p>Has ganado</p>";
                    } else if ($eleccion == 2) {
                        echo "<p>Has perdido</p>";
                    }
                    break;
                case 1:
                    if ($eleccion == 0) {
                        echo "<p>Has perdido</p>";
                    } else if ($eleccion == 2) {
                        echo "<p>Has ganado</p>";
                    }
                    break;
                case 2:
                    if ($eleccion == 0) {
                        echo "<p>Has ganado</p>";
                    } else if ($eleccion == 1) {
                        echo "<p>Has perdido</p>";
                    }
                    break;
            }
        }
    }

    $opciones = [0 => "piedra", 1 => "papel", 2 => "tijeras"];
    seleccionarGanador(1);
    ?>
</body>

</html>