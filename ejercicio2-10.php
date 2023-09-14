<html>

<head>
    <h1>Ejercicio 2.10</h1>
</head>

<body>
    <p>
        <?php
        for ($i = 5; $i <= 50; $i++) {
            $resto = $i % 2;
            if ($resto == 0) {
                echo "$i, ";
            }
        }
        ?>
    </p>
</body>

</html>