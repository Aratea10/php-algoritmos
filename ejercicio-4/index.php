<?php
/* 
Ejercicio 4.
1) Crea un formulario que permita seleccionar prendas (varias) y un color (uno).
2) Selecciona el método HTTP más adecuado → POST (evita límites de URL y expone menos).
3) Muestra en la respuesta los datos recibidos; para el color, pinta un bloque con ese color via CSS inline.
*/
$prendasCatalogo = ["abrigos", "tops", "camisas", "pantalones", "zapatos", "accesorios"];
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Tienda de moda — Formulario</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        body {
            font-family: system-ui;
            margin: 2rem
        }
        label {
            display: block;
            margin: .5rem 0 .25rem
        }
        .box {
            display: inline-block;
            width: 64px;
            height: 24px;
            vertical-align: middle;
            border: 1px solid #aaa;
            margin-left: .5rem
        }
    </style>
</head>
<body>
    <h1>Tienda de moda</h1>
    <form action="recibir.php" method="post">
        <label for="prenda">Selecciona tipo de prenda:</label>
        <select id="prenda" name="prenda[]" multiple size="4" required>
            <?php foreach ($prendasCatalogo as $p): ?>
                <option value="<?= htmlspecialchars($p) ?>"><?= htmlspecialchars(ucfirst($p)) ?></option>
            <?php endforeach; ?>
        </select>
        <label for="color">Color:</label>
        <input id="color" name="color" type="color" value="#000000" required>

        <div style="margin-top:1rem">
            <button type="submit">Enviar</button>
        </div>
    </form>
    <p style="margin-top:2rem;color:#666">Consejo: mantén pulsado Ctrl o Cmd para seleccionar varias prendas.</p>
</body>
</html>