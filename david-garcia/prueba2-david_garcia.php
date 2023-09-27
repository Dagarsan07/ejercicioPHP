<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Formulario - Preguntas</title>
</head>

<body style="background-color: lightgray;">
    <div class="container mx-auto mt-4">
        <?php
        $preguntas = [
            0 => "Cual es la capital de Euskadi?",
            1 => "Qué banda publicó el álbum “Master of Puppets”?",
            2 => "Muchas compañías utilizan 'www' en sus webs. Que es 'www'?",
            3 => "En qué país se encuentra la torre Big Ben?",
            4 => "Cómo se escribe 'perro' en inglés?",
            5 => "Cuantos planetas tiene nuestro sistema solar?",
            6 => "Cuantos continentes hay en el mundo?",
            7 => "Qué ciudad es la capital de los EEUU de América?",
            8 => "En qué pais se encuentra la torre Eifel?",
            9 => "Cuántos océanos hay en el mundo?"
        ];

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $nivel = $_POST['nivel'];
        $indices = array_rand($preguntas, 3);
        echo "<h1 class='text-center'>Estas son tus preguntas: $nombre $apellido</h1>";
        echo '<div class="card mx-auto w-50 mt-4">';
        echo '<div class="card-body">';
        echo '<form action="prueba3-david_garcia.php" method="post">';
        echo "<h3>Preguntas de la prueba ($nivel)</h3>";
        foreach ($indices as $key => $valor) {
            $pregunta = $preguntas[$valor];
            echo "<p class='mt-3'>$pregunta</p>";
            echo "<label class='form-label' for='respuesta$valor'>Respuesta:</label>";
            echo "<input type='text' class='form-control' name='respuesta$valor'>";
        }
        echo '<button type="submit" class="btn btn-primary mt-3" value="seleccionar">Seleccionar Respuesta</button>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
        ?>
    </div>
</body>

</html>