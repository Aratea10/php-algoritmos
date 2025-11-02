<?php
/*
Recurso: Algoritmos.pdf — Algoritmo 5.2
Enunciado:
Crea un script PHP que muestre en un documento HTML5, para una altura en cm dada, el número de pulgadas y de pies que le corresponda.
Partir de una variable dada: $altura_cm = 105.4
Fórmulas: pulgadas = altura_cm / 2.54 ; pies = pulgadas / 12
*/
$altura_cm = 105.4;
$pulgadas = $altura_cm / 2.54;
$pies = $pulgadas / 12;
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Algoritmo 5.2 — cm a pulgadas y pies</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>body{font-family:system-ui;margin:2rem}</style>
</head>
<body>
	<h1>Conversión de altura</h1>
	<p><strong>Altura (cm):</strong> <?= number_format($altura_cm, 2, ',', '.') ?></p>
	<p><strong>Pulgadas:</strong> <?= number_format($pulgadas, 4, ',', '.') ?></p>
	<p><strong>Pies:</strong> <?= number_format($pies, 4, ',', '.') ?></p>
</body>
</html>