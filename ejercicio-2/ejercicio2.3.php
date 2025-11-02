<?php
/*
Ejercicio 3 (variante del 5.9)
Calcular S = sum_{k=0..n} (1/2)^k usando WHILE en lugar de FOR.
*/

$n = 8;
$suma = 1.0;
$ter  = 1.0;
$k = 1;
while ($k <= $n) {
    $ter  /= 2.0;
    $suma += $ter;
    $k++;
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Algoritmo 5.9 — Serie geométrica (while)</title>
    <style>
        body {
            font-family: system-ui;
            margin: 2rem
        }
    </style>
</head>

<body>
    <h1>Serie geométrica con while, n = <?= $n ?></h1>
    <p>Resultado: <strong><?= rtrim(rtrim(number_format($suma, 10, '.', ''), '0'), '.') ?></strong></p>
</body>

</html>´