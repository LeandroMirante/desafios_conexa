<?php

$quantidadeValores = intval(readline("Digite a quantidade de valores a serem lidos: "));

if ($quantidadeValores <= 0) {
    echo "Insira uma quantidade válida de valores.\n";
    exit();
}

$numeros = array();

for($i=1; $i <= $quantidadeValores; $i++ ){
    $num = intval(readline("Digite o valor $i: "));
    $numeros[] = $num;
}

$menorValor = min($numeros);
$maiorValor = max($numeros);

echo "Menor valor: $menorValor\n";
echo "Maior valor: $maiorValor\n";