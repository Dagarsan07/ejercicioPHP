<html>

<head>
    <h1>Ejercicio 2.25</h1>
</head>

<body>
    <?php
    function crearAlumno($alumno, $edad, $calificacion)
    {
        global $alumnos;
        $alumnos[$alumno] = [
            "edad" => $edad,
            "calificacion" => $calificacion
        ];
    }

    function mostrarAlumno($alumno)
    {
        global $alumnos;
        if (array_key_exists($alumno, $alumnos)) {
            $resultado = $alumnos[$alumno];
            echo "<h2>Alumno: $alumno</h3>";
            echo "<p>Edad: " . $resultado["edad"] . "</p>";
            echo "<p>Calificación: " . $resultado["calificacion"] . "</p>";
        } else {
            echo "<p>El alumno '$alumno' no existe</p>";
        }
    }
    $alumnos = array();

    crearAlumno("Ricardo", 19, 7.5);
    crearAlumno("YoyaEl", 21, 10);
    mostrarAlumno("Ricardo");
    mostrarAlumno("YoyaEl");
    ?>
</body>

</html>