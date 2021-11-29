<?php

$vcarro = 10000;
$imposto = $vcarro * (45/100);
$dist = $vcarro * (28/100);

$vcarro = $vcarro + $imposto + $dist;
echo "O valor do carro foi de: {$vcarro}";