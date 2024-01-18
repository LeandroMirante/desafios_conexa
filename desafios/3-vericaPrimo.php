<?php
function isPrimo($n) {
    if ($n <= 1) {
        return false;
    }

    for ($i = 2;  $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$input = readline("Digite um número para verificar se é primo: ");

if(isPrimo($input)){
    echo 'O número inserido é primo';
}else{
    echo 'O número inserido não é primo';
}