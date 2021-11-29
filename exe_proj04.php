<?php

$a = 10;
$b = 20;

echo "Valor de A: {$a} - Valor de B: {$b}<br>";

//$a = 10 ...... $b = 20 ----- $c = 10

$c = $a;
$a = $b;
$b = $c;

echo "Valor de A: {$a} - Valor de B: {$b}";