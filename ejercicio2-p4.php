<html>

<head>
    <h1>Ejercicio 2 Prueba 4</h1>
</head>

<body>
    <?php
    date_default_timezone_set('Europe/Madrid');
    $mes = date('F');
    $diasemana = date('N');
    $diames = date('j');
    $anno = date('Y');
    switch ($mes) {
        case 'January':
            $mes = 'Enero';
            break;
        case 'February':
            $mes = 'Febrero';
            break;
        case 'March':
            $mes = 'Marzo';
            break;
        case 'April':
            $mes = 'Abril';
            break;
        case 'May':
            $mes = 'Mayo';
            break;
        case 'June':
            $mes = 'Junio';
            break;
        case 'July':
            $mes = 'Julio';
            break;
        case 'August':
            $mes = 'Agosto';
            break;
        case 'September':
            $mes = 'Septiembre';
            break;
        case 'October':
            $mes = 'Octubre';
            break;
        case 'November':
            $mes = 'Noviembre';
            break;
        case 'December':
            $mes = 'Diciembre';
            break;
    }

    switch ($diasemana) {
        case 1:
            $diasemana = 'Lunes';
            break;
        case 2:
            $diasemana = 'Martes';
            break;
        case 3:
            $diasemana = 'Miércoles';
            break;
        case 4:
            $diasemana = 'Jueves';
            break;
        case 5:
            $diasemana = 'Viernes';
            break;
        case 6:
            $diasemana = 'Sábado';
            break;
        case 7:
            $diasemana = 'Domingo';
            break;
    }
    echo "<p>La fecha de hoy es: $diasemana, $diames de $mes de $anno</p>";
    ?>
</body>

</html>