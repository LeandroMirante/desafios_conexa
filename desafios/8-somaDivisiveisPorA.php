<?php

$a = intval(readline("Digite o valor de a (deve ser maior que 1): "));
$b = intval(readline("Digite o valor de b: "));
$c = intval(readline("Digite o valor de c: "));

if ($a > 1) {
    $soma = 0;

    for ($i = $b; $i <= $c; $i++) {
        if ($i % $a == 0) {
            echo "somando: $i\n";
            $soma += $i;
        }
    }
    echo "A soma dos inteiros entre $b e $c que são divisíveis por $a é: $soma\n";
} else {
    echo "O valor de a deve ser maior que 1.\n";
}
