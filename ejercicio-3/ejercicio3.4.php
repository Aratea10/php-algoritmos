<?php
/*
Ejercicio 3.4
Dado un entero positivo del 1 al 10, crear un array asociativo con la tabla de multiplicar del número dado. Claves como "Nx0", "Nx1", ..., "Nx10"; valores con el resultado.
Mostrar el array resultado.
*/
$N = 7;
$tabla = [];
for ($k = 0; $k <= 10; $k++) {
    $clave = "{$N}x{$k}";
    $tabla[$clave] = $N * $k;
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Tabla de multiplicar</title>
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
    <h1>Tabla de multiplicar del <?= $N ?></h1>
    <ul>
        <?php foreach ($tabla as $k => $v): ?>
            <li><strong><?= $k ?></strong> = <?= $v ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>