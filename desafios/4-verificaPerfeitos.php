<?php
function isPerfeito($num) {
    $somaDivisores = 1; 

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $somaDivisores += $i;
            
            if ($i != $num / $i) {
                $somaDivisores += $num / $i;
            }
        }
        
    }
    return $somaDivisores == $num;
}

function listarPerfeitos($n) {
    for ($i = 2; $i < $n; $i++) {
        if (isPerfeito($i)) {
            echo "$i é um número perfeito.\n";
        }
    }
}


$n = readline("Digite um número para os números perfeitos menores que ele: ");

listarPerfeitos($n);
