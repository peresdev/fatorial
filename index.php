<?php
function fatorial($numero) {
	return $numero > 1 ? $numero * fatorial($numero-1) : 1;
}

$quantidade = 20;

for($i = 0; $i < 20; $i++) {
	echo "{$i}! = " . fatorial($i) . "<br>";
}