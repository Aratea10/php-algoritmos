<?php
/*
Ejercicio 1 (Algoritmos.pdf — Algoritmo 5.8)
Para un nº n dado, calcular la suma de los n primeros números impares.
Pseudocódigo base: i = 1,3,5,...,2*n-1 → suma = suma + i
*/
$n = 7;                     // cambia el valor para probar
$suma = 0;
for ($i = 1; $i <= 2 * $n - 1; $i += 2) {
    $suma += $i;
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Algoritmo 5.8 — Suma impares</title>
    <style>
        body {
            font-family: system-ui;
            margin: 2rem
        }
    </style>
</head>

<body>
    <h1>Suma de los <?= $n ?> primeros impares</h1>
    <p>Resultado: <strong><?= $suma ?></strong></p>
</body>

</html>