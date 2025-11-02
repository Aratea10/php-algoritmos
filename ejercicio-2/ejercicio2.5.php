<?php
/*
Ejercicio 5 (Algoritmos.pdf — Algoritmo 5.10)
Para un nº n dado, mostrar la lista de sus divisores en orden decreciente.
Pseudocódigo: i = ParteEntera(n/2) hasta 2 (decremento -1) si resto(n/i)=0 imprimir i; finalmente imprimir 1.
Salida pedida: lista desordenada HTML (ul/li).
*/
$n = 84;
$divisores = [];
for ($i = intdiv($n, 2); $i >= 2; $i--) {
    if ($n % $i === 0) $divisores[] = $i;
}
array_unshift($divisores, $n);
$divisores[] = 1;
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Algoritmo 5.10 — Divisores decrecientes</title>
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
    <h1>Divisores de <?= $n ?> (orden decreciente)</h1>
    <ul>
        <?php foreach ($divisores as $d): ?>
            <li><?= $d ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>