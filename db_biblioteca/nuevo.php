<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Agregar libro - Biblioteca</title>
</head>

<body>
    <div class="container mt-4 mx-auto">
        <div class="col-3 mx-auto mb-3">
            <h1 class="text-center py-3" style="background-color: orange;">ALTA DE LIBRO</h1>
            <form action="nuevo.php" method="post">
                <div class="form-group">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" name="titulo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="autor" class="form-label">Autor:</label>
                    <input type="text" name="autor" class="form-control">
                </div>
                <div class="text-center mt-3">
                    <p>Disponible?</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="disponible" value="1" id="1">
                        <label for="1" class="form-check-label">Si</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="disponible" value="0" id="0">
                        <label for="2" class="form-check-label">No</label>
                    </div>
                    <br>
                    <button type="submit" class="btn mt-3 py-3 py-2" name="guardar" style="background-color: orange;">Guardar</button>
                </div>
            </form>
        </div>
        <?php
        if (isset($_POST['guardar'])) {
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $disponible = $_POST['disponible'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_biblioteca";
            try {
                $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            } catch (PDOException $e) {
                echo "<p>No se ha podido conectar a la base de datos</p>";
                exit;
            }
            $stmt = $conexion->prepare("INSERT INTO libros VALUES (null, :titulo, :autor, :disponible)");
            $stmt->bindValue(':titulo', $titulo);
            $stmt->bindValue(':autor', $autor);
            $stmt->bindValue(':disponible', $disponible);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                echo '<div class="alert alert-success text-center w-50 mx-auto" role="alert">';
                echo "$titulo del autor/ra $autor ha sido añadido correctamente a la base de datos";
                echo '</div>';
            } else {
                echo '<div class="alert alert-success text-center w-50 mx-auto" role="alert">';
                echo "$titulo del autor/ra $autor no ha podido añadirse a la base de datos. Ha tenido que ocurrir algún problema";
                echo '</div>';
            }
        }
        ?>
    </div>
</body>

</html>