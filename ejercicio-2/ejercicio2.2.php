<?php
/*
Ejercicio 2 (Algoritmos.pdf — Algoritmo 5.9)
Para un nº n dado, calcular: S = sum_{k=0..n} (1/2)^k
En el apunte: se inicia suma=1 y ter=1; en cada paso ter=ter/2; suma+=ter
*/
$n = 8;
$suma = 1.0;
$ter  = 1.0;
for ($k = 1; $k <= $n; $k++) {
    $ter  /= 2.0;
    $suma += $ter;
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Algoritmo 5.9 — Serie geométrica (for)</title>
    <style>
        body {
            font-family: system-ui;
            margin: 2rem
        }
    </style>
</head>

<body>
    <h1>Serie geométrica S = Σ(1/2)^k, k=0..<?= $n ?></h1>
    <p>Resultado: <strong><?= rtrim(rtrim(number_format($suma, 10, '.', ''), '0'), '.') ?></strong></p>
</body>

</html>