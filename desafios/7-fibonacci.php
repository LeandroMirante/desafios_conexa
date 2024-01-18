<?php
function fibonacci($n) {
    $fibonacci = array();
    $fibonacci[0] = 1;
    $fibonacci[1] = 1;

    for ($i = 2; $fibonacci[$i - 1] + $fibonacci[$i - 2] <= $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    $ultimosValores = array_slice($fibonacci, -2);
    $fibonacci[] = $ultimosValores[0] + $ultimosValores[1];

    return $fibonacci;
}

$numero = readline("Digite um número positivo: ");

if ($numero > 0) {
    $sequenciaFibonacci = fibonacci($numero);

    echo "Sequência de Fibonacci até o primeiro número superior a $numero:\n";
    foreach ($sequenciaFibonacci as $i) {
        echo $i . " ";
    }
} else {
    echo "Insira um número positivo.";
}
