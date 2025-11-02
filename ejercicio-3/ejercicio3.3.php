<?php
/*
Ejercicio 3.3
Dado un número entero positivo o negativo, crear un array que contenga tantos números enteros desde el cero hasta el número dado incluido.
- Si n = 3 → [0,1,2,3]
- Si n = -3 → [-3,-2,-1,0]
*/
$n = -3; // cambia para probar
$result = [];
if ($n >= 0) {
    for ($i = 0; $i <= $n; $i++) $result[] = $i;
} else {
    for ($i = $n; $i <= 0; $i++) $result[] = $i;
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Rango hasta n</title>
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
    <h1>Rango generado para n = <?= $n ?></h1>
    <p><code><?= implode(', ', $result) ?></code></p>
</body>
</html>