<?php

function isPrimo($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$n = intval(readline("Digite um número inteiro positivo N: "));

if ($n <= 0) {
    echo "Insira um número inteiro positivo.\n";
    exit();
}
$count = 0;
$num = 1;

// Loop para imprimir os n primeiros naturais ímpares e primos
while ($count < $n) {
    if ($num % 2 != 0 && isPrimo($num)) {
        echo $num . " ";
        $count++;
    }
    $num++;
}
