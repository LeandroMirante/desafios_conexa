<?php
function calcularFatorial($numero) {
    $fatorial = 1;

    if($numero === 1 || $numero === 0){
        return 1;
    }

    for ($i = $numero; $i > 1; $i--) {
        $fatorial *= $i;
    }

    return $fatorial;
}

echo "Digite um número para calcular o fatorial: ";
$numero = readline();
$resultado = calcularFatorial($numero);

echo "$numero! = $resultado";
