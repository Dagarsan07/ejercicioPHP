<html>

<head>
    <h1>Ejercicio 2.23</h1>
</head>

<body>
    <?php
    function calculariva($precio, $iva = 21)
    {
        echo "<p>Precio sin iva: $precio €</p>";
        echo "<p>Porcentaje de IVA: $iva%</p>";
        $preciofinal = $precio + (($iva * $precio) / 100);
        echo "<p>Precio con IVA: $preciofinal €</p>";
    }
    $precio = 23;
    calculariva($precio);
    ?>
</body>

</html>