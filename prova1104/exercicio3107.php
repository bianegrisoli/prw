<?php

$velocidade = readline();
$distancia = readline();
$consumo = readline();

$combustivel = $distancia/$consumo;
$horas = $distancia/$velocidade;


$comb = number_format($combustivel, 2, '.','');
$hr = number_format($horas, 2, '.',''); 

echo "Total de horas: $hr\n";
echo "Total do combustível: $comb\n";

?> 