<?php

function somatorio($n) {
    if ($n == 0) {
        return 0;
    }

    return $n + somatorio($n - 1);
}

$numero = readline('Insira o valor do somatorio: ');
$resultado = somatorio($numero);

echo "O somatório dos números de 1 até $numero é: $resultado\n";
