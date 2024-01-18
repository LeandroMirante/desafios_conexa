<?php
function menorMultiploMaiorQue($inteiroA, $inteiroB) {
    $multiplo = $inteiroA;

    while ($multiplo <= $inteiroB) {
        $multiplo += $inteiroA;
    }

    return $multiplo;
}

echo "Digite o multiplo: ";
$inteiroA = readline();

echo "Digite o segundo inteiro: ";
$inteiroB = readline();

$resultado = menorMultiploMaiorQue($inteiroA, $inteiroB);
echo "O menor múltiplo de $inteiroA maior que $inteiroB é: $resultado";
