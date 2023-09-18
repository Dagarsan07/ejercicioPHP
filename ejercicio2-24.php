<html>

<head>
    <h1>Ejercicio 2.24</h1>
</head>

<body>
    <?php
    function masuno()
    {
        static $numero = 0;
        ++$numero;
        echo "<p>$numero</p>";
    }
    echo "<p>Primera llamada</p>";
    masuno();
    echo "<p>Segunda llamada</p>";
    masuno();
    echo "<p>Tercera llamada</p>";
    masuno();
    ?>
</body>

</html>