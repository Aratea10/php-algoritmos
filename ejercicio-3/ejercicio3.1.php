<?php
/*
Ejercicio 3.1
Crea un script con un array con índices numéricos que contenga el número de horas extra que ha trabajado una persona durante la última semana. Calcula su salario extra sabiendo que la hora extra se paga a 12.5€.
*/
$horas = [2, 0, 1.5, 3, 0, 4, 2];  // L..D, ejemplo
$precio_hora = 12.5;
$total_horas = array_sum($horas);
$salario_extra = $total_horas * $precio_hora;
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Horas extra y salario</title>
    <style>
        body {
            font-family: system-ui;
            margin: 2rem
        }
        td,
        th {
            padding: .25rem .5rem;
            border: 1px solid #ddd
        }
    </style>
</head>
<body>
    <h1>Horas extra por día</h1>
    <table>
        <tr>
            <th>Día</th>
            <th>Horas</th>
        </tr>
        <?php foreach ($horas as $i => $h): ?>
            <tr>
                <td><?= ['L', 'M', 'X', 'J', 'V', 'S', 'D'][$i] ?></td>
                <td><?= $h ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>Total horas: <strong><?= $total_horas ?></strong></p>
    <p>Precio hora: <strong><?= number_format($precio_hora, 2, ',', '.') ?> €</strong></p>
    <p>Salario extra: <strong><?= number_format($salario_extra, 2, ',', '.') ?> €</strong></p>
</body>
</html>