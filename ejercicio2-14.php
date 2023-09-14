<html>

<head>
    <h1>Ejercicio 2.14</h1>
</head>

<body>
    <?php
    $numeros = array(1 => 1, 2 => 8, 3 => 10, 4 => 4);
    $resultado = 0;
    foreach ($numeros as $numero) {
        $resultado += $numero;
    }
    echo "<p>La suma de todos los valores del array es: {$resultado}</p>"
    ?>
</body>

</html>