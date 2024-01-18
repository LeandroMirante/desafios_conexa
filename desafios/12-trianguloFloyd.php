<?php
$n = intval(readline("Digite um número inteiro positivo N: "));

if ($n <= 0) {
    echo "Insira um número inteiro positivo.\n";
    exit();
}

$count = 1;

for ($linha = 1; $linha <= $n; $linha++) {
    for ($coluna = 1; $coluna <= $linha; $coluna++) {
        echo $count . " ";
        $count++;
    }
    echo "\n";
}
