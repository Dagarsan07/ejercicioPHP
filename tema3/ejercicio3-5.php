<!DOCTYPE html>
<html>

<body>
    <h1>DATOS DEL ALUMNO</h1>
    <?php
    //si todavia no se ha pulsado enviar muestro el formulario
    if (!isset($_POST['enviar'])) {
    ?>
        <form>
            <label for="fname">Nombre:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Apellido:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <p>Edad</p>
            <input type="radio" id="age1" name="age" value="15">
            <label for="age1">0 - 15</label><br>
            <input type="radio" id="age2" name="age" value="60">
            <label for="age2">15 - 60</label><br>
            <input type="radio" id="age3" name="age" value="100">
            <label for="age3">60 - 100</label><br><br>
            <p>Cómo vienes al centro de estudios?</p>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Bicicleta</label><br>
            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
            <label for="vehicle2"> Coche</label><br>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="Bus">
            <label for="vehicle3"> Autobus</label><br><br>
            <label for="alta_data">Fecha de alta:</label>
            <input type="date" id="alta_data" name="alta_data"><br><br>
            <input type="submit" value="Enviar">
        </form>
    <?php
        //si se ha pulsado enviar hago el tratamiento
    } else {
        //recojo los valores enviados
        $nombre = $_POST["fname"];
        $apellido = $_POST["lname"];
        $fecha = $_POST["alta_data"];

        //si el nombre o el apellido estan vacios muestro un error
        if (empty($nombre) || empty($apellido)) {
            echo "<p>Error. Es obligatorio meter datos de nombre y apellidos</p>";
            echo "<a href='ejercicio3-5.php'>Volver al formulario</a>";
        } else {
            //compruebo si ha pulsado algun radio button de age
            if (!empty($_POST["age"])) {
                //compruebo el valor que tiene age
                switch ($_POST["age"]) {
                    case 15:
                        echo "<p>$nombre $apellido, eres muy joven, es mejor que vayas a la escuela</p>";
                        break;
                    case 60:
                        //miro si el campo coche esta pulsado
                        if (isset($_POST["vehicle2"])) {
                            echo "$nombre $apellido, intente utilizar lo menos posible el coche, por favor";
                        }
                        //muestro la fecha de alta
                        echo "<p>Fecha de alta: $fecha</p>";
                        break;
                    case 100:
                        echo "<p>$nombre $apellido, estás seguro que no prefieres dedicarte a viajar?</p>";
                        break;
                }
            } else {
                echo "<p>Error. Es obligatorio meter datos de edad</p>";
                echo "<a href='ejercicio3-5.php'>Volver al formulario</a>";
            }
        }
    }
    ?>
</body>

</html>