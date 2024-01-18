<?php
$n = intval(readline("Digite um número maior que 3: "));

if ($n <= 3) {
    echo "Insira um número maior que 3.\n";
    exit();
}

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i == 1 || $i == $n || $j == 1 || $j == $n || $i == $j) {
            echo "*\t";
        } else {
            echo "\t";
        }
    }
    echo "\n";
}
