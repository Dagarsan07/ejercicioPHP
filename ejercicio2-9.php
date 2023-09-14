<html>

<head>
    <h1>Ejercicio 2.9</h1>
</head>

<body>
    <?php
    echo '<table border>';
    for ($row = 0; $row <= 3; $row++) {
        echo '<tr>';
        for ($col = 0; $col <= 4; $col++) {
            if ($col > 0 && $row > 0) {
                echo "<td>$row - $col</td>";
            } else if ($col == 0 && $row > 0) {
                echo "<td><strong>$row</strong></td>";
            } else if ($row == 0 && $col > 0) {
                echo "<td><strong>$col</strong></td>";
            } else if ($row == 0 && $col == 0) {
                echo "<td></td>";
            }
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>

</html>