<?php
/*
Ejercicio 5
Crea un programa que imprima "Es verano" si la fecha ingresada por teclado en un formulario es mayor o igual al 20 de junio y menor o igual al 21 de septiembre. El formulario enviará el parámetro tipo "date" mediante POST.
Detalles:
- Consideramos año de la fecha ingresada para construir los límites:
  verano_desde = YYYY-06-20
  verano_hasta = YYYY-09-21
- Si no hay fecha enviada, solo se muestra el formulario.
*/

$mensaje = null;
$fecha_recibida = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fecha_recibida = $_POST['fecha'] ?? '';
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha_recibida)) {
        [$yy, $mm, $dd] = array_map('intval', explode('-', $fecha_recibida));
        $verano_desde = sprintf('%04d-06-20', $yy);
        $verano_hasta = sprintf('%04d-09-21', $yy);

        if ($fecha_recibida >= $verano_desde && $fecha_recibida <= $verano_hasta) {
            $mensaje = 'Es verano';
        } else {
            $mensaje = 'No es verano';
        }
    } else {
        $mensaje = 'Fecha inválida. Usa el selector de fecha.';
    }
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Ejercicio 5 — ¿Es verano?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: system-ui;
            margin: 2rem
        }
        form {
            display: flex;
            gap: 1rem;
            align-items: center
        }
        .msg {
            margin-top: 1rem;
            font-size: 1.1rem
        }
    </style>
</head>
<body>
    <h1>¿Es verano?</h1>
    <form action="" method="post">
        <label for="fecha">Fecha:</label>
        <input id="fecha" name="fecha" type="date" required
            value="<?= htmlspecialchars($fecha_recibida ?? '') ?>">
        <button type="submit">Comprobar</button>
    </form>
    <?php if ($mensaje !== null): ?>
        <p class="msg"><strong><?= htmlspecialchars($mensaje) ?></strong>
            <?php if ($fecha_recibida): ?>
                — Fecha introducida: <?= htmlspecialchars($fecha_recibida) ?>
            <?php endif; ?>
        </p>
    <?php endif; ?>
    <p style="color:#666;margin-top:1rem">
        Criterio: entre 20 de junio y 21 de septiembre (ambos inclusive) del mismo año.
    </p>
</body>
</html>