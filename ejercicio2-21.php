<html>

<head>
    <h1>Ejercicio 2.21</h1>
</head>

<body>
    <?php
    function media($numeros)
    {
        $cuantos = count($numeros);
        if ($cuantos == 0) {
            return 0;
        } else {
            $total = array_sum($numeros);
            $media = $total / $cuantos;
            return $media;
        }
    }
    $numeros = array(10, 15, 20, 25, 30);
    $resultado = media($numeros);

    echo "<p>Números: " . implode(", ", $numeros) . "</p>";
    echo "<p>Media: $resultado</p>";
    ?>
</body>

</html>