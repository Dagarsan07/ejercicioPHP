<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Formulario - Correción</title>
</head>

<body style="background-color: lightgray;">
    <div class="container mx-auto mt-4">
        <h1 class="text-center">Prueba Septiembre</h1>
        <h3 class="text-center mt-4">Resultado del alumno</h3>
        <div class="card mx-auto w-50 mt-4">
            <div class="card-body">
                <?php
                $preguntas = [
                    0 => ["pregunta" => "Cual es la capital de Euskadi?", "respuesta" => "Bilbao"],
                    1 => ["pregunta" => "Qué banda publicó el álbum “Master of Puppets”?", "respuesta" => "Metallica"],
                    2 => ["pregunta" => "Muchas compañías utilizan 'www' en sus webs. Que es 'www'?", "respuesta" => "World Wide Web"],
                    3 => ["pregunta" => "En qué país se encuentra la torre Big Ben?", "respuesta" => "Reino Unido"],
                    4 => ["pregunta" => "Cómo se escribe 'perro' en inglés?", "respuesta" => "Dog"],
                    5 => ["pregunta" => "Cuantos planetas tiene nuestro sistema solar?", "respuesta" => "8"],
                    6 => ["pregunta" => "Cuantos continentes hay en el mundo?", "respuesta" => "7"],
                    7 => ["pregunta" => "Qué ciudad es la capital de los EEUU de América?", "respuesta" => "Washington"],
                    8 => ["pregunta" => "En qué pais se encuentra la torre Eifel?", "respuesta" => "Francia"],
                    9 => ["pregunta" => "Cuántos océanos hay en el mundo?", "respuesta" => "4"],
                ];

                echo "<p>Nombre: </p>";
                echo "<h4>Resultado de la prueba</h4>";
                foreach ($_POST as $key => $value) {
                    $indice = substr($key, 9);
                    $pregunta = $preguntas[$indice]["pregunta"];
                    $respuesta = $value;
                    $correcto = $preguntas[$indice]["respuesta"];
                    echo "<h6>$pregunta: ";
                    if (strtolower($respuesta) == strtolower($correcto)) {
                        echo "<p class='text-success'>Correcto</p>";
                    } else {
                        echo "<p class='text-danger'>No es correcto ($correcto)</p>";
                    }
                    echo "</h6>";
                }
                ?>
            </div>
        </div>
        <p class="text-center mt-3"><a href="prueba1-david_garcia.php">Inténtalo de nuevo</a></p>
    </div>
</body>

</html>