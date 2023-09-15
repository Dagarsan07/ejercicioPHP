<html>

<head>
    <h1>Ejercicio 2.16</h1>
</head>

<body>
    <?php
    $datos = array(
        "Ander" => array("Apellidos" => "Tapia Fernández", "Edad" => 19, "Ciclo" => "AS3"),
        "Ibai" => array("Apellidos" => "Etxebarria Rumayor", "Edad" => 20, "Ciclo" => "DW3"),
        "David" => array("Apellidos" => "Arrebola Porras", "Edad" => 27, "Ciclo" => "DW3"),
    );
    foreach ($datos as $alumno => $valores) {
        echo "<p>Alumno: $alumno</p>";
        echo "<ul>";
        foreach ($valores as $carac => $valor) {
            echo "<li>$carac: $valor</li>";
        }
        echo "</ul>";
    }
    ?>
</body>

</html>