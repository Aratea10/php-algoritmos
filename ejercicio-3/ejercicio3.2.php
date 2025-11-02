<?php
/*
Ejercicio 3.2
Array asociativo con los 5 valores del IBEX que más han subido hoy con su subida porcentual.
Recorrer mostrando clave y valor y, al final, la media de las subidas.
*/
$ibex = [
    "IBE"  => 2.35,
    "SAN"  => 1.80,
    "ITX"  => 1.25,
    "BBVA" => 1.95,
    "REP"  => 2.10,
];
$media = array_sum($ibex) / count($ibex);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>IBEX subidas</title>
    <style>
        body {
            font-family: system-ui;
            margin: 2rem
        }
        li {
            margin: .25rem 0
        }
    </style>
</head>
<body>
    <h1>Top 5 subidas IBEX (ejemplo)</h1>
    <ul>
        <?php foreach ($ibex as $ticker => $pct): ?>
            <li><strong><?= htmlspecialchars($ticker) ?>:</strong> <?= number_format($pct, 2, ',', '.') ?> %</li>
        <?php endforeach; ?>
    </ul>
    <p>Media subidas: <strong><?= number_format($media, 2, ',', '.') ?> %</strong></p>
</body>
</html>