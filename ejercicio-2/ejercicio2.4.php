<?php
/*
Ejercicio 4 (sobre 5.9 con criterio de parada)
Calcular S = sum_{k=0..n} (1/2)^k usando WHILE, pero detener si la suma alcanza un valor mínimo >= 2 (permitido exceder n sumandos para alcanzar el mínimo).
Nota: La serie converge a 2, así que necesitaremos extender más allá de n si hace falta.
*/
$n = 5;
$minimo = 2.0;
$suma = 1.0;
$ter  = 1.0;
$k = 1;
while ($suma < $minimo || $k <= $n) {
    $ter  /= 2.0;
    $suma += $ter;
    $k++;
    if ($suma >= $minimo) break;
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Serie geométrica con umbral</title>
    <style>
        body {
            font-family: system-ui;
            margin: 2rem
        }
    </style>
</head>
<body>
    <h1>Serie geométrica hasta alcanzar S ≥ <?= $minimo ?></h1>
    <p>n nominal: <?= $n ?> | términos sumados (incluye k=0): <strong><?= $k ?></strong></p>
    <p>Suma: <strong><?= rtrim(rtrim(number_format($suma, 12, '.', ''), '0'), '.') ?></strong></p>
</body>
</html>