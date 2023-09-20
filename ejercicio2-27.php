<html>

<body>
    <?php
    function numeroAleatorio()
    {
        global $numero;
        $numero = rand(0, 5);
        return $numero;
    }
    function mostrarImagenes()
    {
        include("tabla-imagenes.php");
    }
    $numero = numeroAleatorio();
    switch ($numero) {
        case 0:
            echo "<p>Acceso denegado</p>";
            break;
        case 1:
            echo "<p>Bienvenido, que tengas un buen dia!</p>";
            break;
        case 2:
            for ($i = 0; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<p>$numero X $i = $resultado</p>";
            }
            break;
        case 3:
            mostrarImagenes();
            break;
        default:
            echo "<p>El número no está entre 0 y 3</p>";
            break;
    }
    ?>
</body>

</html>