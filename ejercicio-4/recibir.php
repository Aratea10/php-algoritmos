<?php
/*
Vista de datos recibidos del formulario.
- Método esperado: POST
- Campos: prenda[] (array de strings), color (hex #rrggbb)
- Mostrar el listado recibido y un bloque con background-color = color elegido.
*/
$prendas = $_POST['prenda'] ?? [];
$color   = $_POST['color']  ?? '#000000';

if (!is_array($prendas)) {
    $prendas = [$prendas];
}

$prendasSafe = array_map(fn($x) => htmlspecialchars((string)$x), $prendas);
$colorSafe   = htmlspecialchars((string)$color);

$esHex = (bool)preg_match('/^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/', $colorSafe);
if (!$esHex) {
    $colorSafe = '#000000';
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Datos recibidos</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        body {
            font-family: system-ui;
            margin: 2rem
        }
        .badge {
            display: inline-block;
            padding: .25rem .5rem;
            border: 1px solid #ddd;
            border-radius: .25rem;
            margin: .2rem 0
        }
        .color-demo {
            display: inline-block;
            width: 80px;
            height: 24px;
            border: 1px solid #aaa;
            vertical-align: middle;
            margin-left: .5rem
        }
        pre {
            background: #f6f6f6;
            padding: .75rem;
            border: 1px solid #e5e5e5;
            border-radius: .25rem;
            overflow: auto
        }
    </style>
</head>
<body>
    <h1>Estos son los datos recibidos de tu formulario</h1>
    <h2>Prendas</h2>
    <?php if ($prendasSafe): ?>
        <ul>
            <?php foreach ($prendasSafe as $p): ?>
                <li><span class="badge"><?= $p ?></span></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No se recibió ninguna prenda.</p>
    <?php endif; ?>
    <h2>Color</h2>
    <p>
        <span>Valor recibido: <strong><?= $colorSafe ?></strong></span>
        <span class="color-demo" style="background-color: <?= $colorSafe ?>;"></span>
    </p>
    <h2>Dump (debug)</h2>
    <pre><?php
            print_r([
                'prenda' => $_POST['prenda'] ?? null,
                'color'  => $_POST['color'] ?? null,
            ]);
            ?></pre>
    <p style="margin-top:1.5rem">
        <a href="index.php">Volver al formulario</a>
    </p>
</body>
</html>