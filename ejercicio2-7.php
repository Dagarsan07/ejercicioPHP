<html>

<head>
    <h1>Ejercicio 2.7</h1>
</head>

<body>
    <?php
    $nombre1 = "David";
    $nombre2 = "Lekue";
    $nombre3 = "Alkorta";
    if ($nombre1 == "Elisabet" || ($nombre2 == "Lekue" && $nombre3 = "Alkorta")) {
        echo "<p>Bienvenido/a!!!</p>";
    } else {
        echo "<p>Acceso denegado</p>";
    }
    ?>
</body>

</html>