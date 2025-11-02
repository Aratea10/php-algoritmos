<?php
/*
Recurso: Algoritmos.pdf — Algoritmo 5.3
Enunciado:
Crea un script PHP que muestre en un documento HTML5, para un valor x dado, la salida de f(x) definida por:
f(x) = 0 si x ≤ 0
f(x) = x^2 si x > 0
Partir de un valor dado en una variable, por ejemplo: $x = -3.5 (modifícalo si quieres)
*/
$x = -3.5;
$f = ($x > 0) ? ($x * $x) : 0.0;
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Algoritmo 5.3 — f(x)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>body{font-family:system-ui;margin:2rem}</style>
</head>
<body>
	<h1>Función por tramos</h1>
	<p><strong>x:</strong> <?= $x ?></p>
	<p><strong>f(x):</strong> <?= $f ?></p>
	<p>Definición: f(x)=0 si x≤0, y f(x)=x² si x&gt;0.</p>
</body>
</html>