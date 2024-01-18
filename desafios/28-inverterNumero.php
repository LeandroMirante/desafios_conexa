<?php

function inverterNumero($n) {
    $numString = strval($n);

    if (strlen($numString) == 1) {
        return $n;
    }

    $ultimoDigito = substr($numString, -1);
    $restoInvertido = inverterNumero(substr($numString, 0, -1));

    $numeroInvertido = intval($ultimoDigito . $restoInvertido);

    return $numeroInvertido;
}

$numero = readline('Insira um número a ser invertido: ');
$resultado = inverterNumero($numero);

echo "Número original: $numero\n";
echo "Número invertido: $resultado\n";
