<?php
function troca(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$valor1 = readline('Insira o valor 1: ');
$valor2 = readline('Insira o valor 2: ');

echo "Valores antes da troca: $valor1, $valor2\n";

troca($valor1, $valor2);

echo "Valores após a troca:  $valor1, $valor2\n";
