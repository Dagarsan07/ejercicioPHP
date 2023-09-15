<html>

<head>
    <h1>Ejercicio 2.15</h1>
</head>

<body>
    <?php
    $notas = array("Ander" => "3.5", "Bego" => "7", "Jon" => "6.3");
    echo "<h2>De uno en uno</h2>";
    print "<p>Nota de Ander: " . $notas["Ander"] . "</p>";
    print "<p>Nota de Bego: " . $notas["Bego"] . "</p>";
    print "<p>Nota de Jon: " . $notas["Jon"] . "</p>";
    echo "<h2>Utilizando forEach</h2>";
    foreach ($notas as $alumno => $nota) {
        echo "<p>Alumno: $alumno - Nota: $nota</p>";
    }
    ?>
</body>

</html>