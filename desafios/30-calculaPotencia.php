<?php

function calcularPotencia($base, $expoente) {
    if ($expoente == 0) {
        return 1;
    }

    return $base * calcularPotencia($base, $expoente - 1);
}

$base = readline('Insira o valor base: ');
$expoente = readline('Insira o expoente: ');
$resultado = calcularPotencia($base, $expoente);

echo "$base elevado a $expoente é: $resultado";
