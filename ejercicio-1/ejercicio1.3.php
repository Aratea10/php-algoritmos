<?php
/*
Recurso: Algoritmos.pdf — Algoritmo 5.4
Enunciado:
Crea un script PHP que muestre en un documento HTML5, para unos valores a, b, c dados, las raíces de la ecuación de segundo grado ax^2 + bx + c = 0, distinguiendo:
- Si D = b^2 - 4ac ≥ 0 → raíces reales: x1, x2 = (-b ± sqrt(D)) / (2a)
- Si D < 0 → raíces complejas conjugadas: Re = -b/(2a), Im = sqrt(-D)/(2a)
Partir de valores dados en variables, por ejemplo: $a=1, $b=-3, $c=2
*/
$a = 1.0; $b = -3.0; $c = 2.0; // puedes cambiar estos valores
$dis = $b*$b - 4*$a*$c;
$den = 2*$a;

$resultado = [];
if ($a == 0.0) {
	$resultado['tipo'] = 'No es cuadrática (a=0)';
} elseif ($dis >= 0) {
	$dd = sqrt($dis);
	$x1 = (-$b + $dd) / $den;
	$x2 = (-$b - $dd) / $den;
	$resultado['tipo'] = 'Reales';
	$resultado['x1'] = $x1;
	$resultado['x2'] = $x2;
} else {
	$dd = sqrt(-$dis);
	$re = -$b / $den;
	$im = $dd / $den;
	$resultado['tipo'] = 'Complejas conjugadas';
	$resultado['re'] = $re;
	$resultado['im'] = $im;
}
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Algoritmo 5.4 — Raíces ecuación cuadrática</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>body{font-family:system-ui;margin:2rem}</style>
</head>
<body>
	<h1>Ecuación cuadrática</h1>
	<p><strong>Ecuación:</strong> <?= $a ?>·x² + <?= $b ?>·x + <?= $c ?> = 0</p>
	<p><strong>Discriminante D:</strong> <?= $dis ?></p>

	<?php if (($resultado['tipo'] ?? '') === 'Reales'): ?>
		<p><strong>Raíces reales:</strong></p>
		<ul>
			<li>x₁ = <?= $resultado['x1'] ?></li>
			<li>x₂ = <?= $resultado['x2'] ?></li>
		</ul>
	<?php elseif (($resultado['tipo'] ?? '') === 'Complejas conjugadas'): ?>
		<p><strong>Raíces complejas conjugadas:</strong></p>
		<ul>
			<li>x₁ = <?= $resultado['re'] ?> + <?= $resultado['im'] ?>·i</li>
			<li>x₂ = <?= $resultado['re'] ?> − <?= $resultado['im'] ?>·i</li>
		</ul>
	<?php else: ?>
		<p><strong>Advertencia:</strong> No es ecuación de segundo grado porque a=0.</p>
	<?php endif; ?>
</body>
</html>