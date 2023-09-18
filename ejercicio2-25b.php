<html>

<head>
    <h1>Ejercicio 2.25b</h1>
</head>

<body>
    <?php
    function crearAlumno($nombre, $edad, $calificaciones)
    {
        global $alumnos;

        $alumnos[$nombre] = [
            "edad" => $edad,
            "calificaciones" => $calificaciones
        ];
    }

    function mostrarAlumno($nombre)
    {
        global $alumnos;
        if (array_key_exists($nombre, $alumnos)) {
            $resultado = $alumnos[$nombre];
            echo "<h2>Alumno: $nombre</h3>";
            echo "<p>Edad: " . $resultado["edad"] . "</p>";
            echo "<p>Calificaciones: " . implode(", ", $resultado["calificaciones"]) . "</p>";
        } else {
            echo "<p>El alumno '$nombre' no existe</p>";
        }
    }

    function media($nombre)
    {
        global $alumnos;
        if (array_key_exists($nombre, $alumnos)) {
            $resultado = $alumnos[$nombre];
            $cantidad = count($resultado["calificaciones"]);
            $total = array_sum($resultado["calificaciones"]);
            $media = $total / $cantidad;
            echo "<p>Media de las calificaciones: $media</p>";
        } else {
            echo "<p>El alumno '$nombre' no existe</p>";
        }
    }

    $alumnos = [];
    crearAlumno("YoyaEl", 21, [10, 8, 9.5, 7, 6.25, 8]);
    mostrarAlumno("YoyaEl");
    media("YoyaEl");
    ?>
</body>

</html>