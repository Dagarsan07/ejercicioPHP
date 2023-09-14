<html>
    <head>
        <title>Prueba PHP</title>
    </head>
    <body>
        <h1>Prueba instalación</h1>
        <?php echo '<p>Bombardeen Nicaragua</p>';?>
        <h1>Ejercicio 2.1 - Mi primer ejercicio con variables</h1>
        <?php 
        $x = 3;
        $y = 2.2;
        $resulreal = $x + $y;
        $resulentero = $x + (int)$y;
        echo '<p>La suma de x + y es ', $resulreal, '</p>';
        echo '<p>La suma de x + y es ', $resulentero, '</p>';
        ?>
        <h1>Ejercicio 2.2 - Mi 2º ejercicio con variables en PHP</h1>
        <?php
        $nombre = 'David';
        $edad = 19;
        echo '<p>Hola, soy ', $nombre, ' y tengo ', $edad, ' años';
        ?>
        <h1>Ejercicio 2.p2</h1>
        <?php
        $a = 2;
        $b = ++$a;
        print '<p>'. $b. '</p>';
        $b = $a++;
        print '<p>'. $b. '</p>';
        ?>
        <h1>Ejercicio 2.3 - Operaciones matemáticas con PHP</h1>
        <?php
        $a = 3;
        $b = 5;
        print '<p>El primer operando es '. $a. '</p>';
        print '<p>El segundo operando es '. $b. '</p>';
        print '<p>La suma de '. $a. ' y '. $b. ' es '. $a + $b;
        print '<p>La resta de '. $a. ' y '. $b. ' es '. $a - $b;
        print '<p>El producto de '. $a. ' y '. $b. ' es '. $a * $b;
        print '<p>La división de '. $a. ' y '. $b. ' es '. $a / $b;
        ?>
        <h1>Ejercicio 2.p3</h1>
        <?php
        $text = 'This is a test';
        echo strlen($text);
        echo $text[strlen($text)-1];
        echo substr_count($text, 'is');
        echo substr_count($text, 'is', 3);
        echo substr_count($text, 'is', 3, 3);
        echo substr_count($text, 'is', 5, 10);
        echo substr_count("Hello World. The world is nice", "world");
        ?>
    </body>
</html>