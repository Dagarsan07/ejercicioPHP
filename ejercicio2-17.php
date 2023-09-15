<html>

<head>
    <h1>Ejercicio 2.17</h1>
</head>

<body>
    <?php
    $frutas = array("naranja", "platano");
    echo "<h2>Array inicial</h2>";
    var_dump($frutas);
    $limon = "limon";
    $manzana = "manzana";
    array_push($frutas, $limon, $manzana);
    echo "<h2>Array final</h2>";
    var_dump($frutas);
    ?>
</body>

</html>