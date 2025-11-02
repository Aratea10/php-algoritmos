<?php
/*
Ejercicio 6
Simula la tirada de un dado con rand() hasta obtener un 5.
Muestra cada tirada y, al final, el número de tiradas realizadas.
*/

$tiradas = [];
do {
    $valor = rand(1, 6);
    $tiradas[] = $valor;
} while ($valor !== 5);
$total = count($tiradas);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Dado hasta 5</title>
    <style>
        body {
            font-family: system-ui;
            margin: 2rem
        }
        code {
            background: #eee;
            padding: .1rem .3rem;
            border-radius: .25rem
        }
    </style>
</head>
<body>
    <h1>Tiradas de dado hasta obtener 5</h1>
    <p>Tiradas:
        <code><?= implode(', ', $tiradas) ?></code>
    </p>
    <p>Total de tiradas: <strong><?= $total ?></strong></p>
</body>
</html>