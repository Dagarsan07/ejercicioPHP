<html>

<head>
    <h1>Ejercicio 2.19</h1>
</head>

<body>
    <?php
    $paises = array('alemania', 'rumania', 'italia', 'chile', 'uruguay', 'australia');
    echo "<h2>Array inicial</h2>";
    print_r($paises);
    unset($paises[0]);
    unset($paises[3]);
    unset($paises[5]);
    echo "<h2>Array quitando paises</h2>";
    print_r($paises);
    $paises[] = 'argentina';
    $paises[] = 'bolivia';
    echo "<h2>Array añadiendo paises</h2>";
    print_r($paises);
    sort($paises);
    echo "<h2>Array ordenado</h2>";
    print_r($paises);
    ?>
</body>

</html>