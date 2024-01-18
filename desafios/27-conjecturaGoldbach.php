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

function verificaConjecturaGoldbach($k) {
    if ($k % 2 != 0 || $k < 4) {
        echo "Insira um número par maior que 4.\n";
        return;
    }

    for ($i = 4; $i <= $k; $i += 2) {
        for ($j = 2; $j <= $i / 2; $j++) {
            if (isPrimo($j) && isPrimo($i - $j)) {
                echo "Conjectura Goldbach verdadeira para $i, sendo $i = $j + " . ($i - $j) . "\n";
                break;
            }
        }
    }
}

$k = readline('Insira um número par maior que 4: ');
verificaConjecturaGoldbach($k);
