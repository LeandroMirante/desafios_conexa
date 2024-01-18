<?php
function converterRealParaDolar($valorReal, $cotacaoDolar) {
    $valorDolar = $valorReal / $cotacaoDolar;

    return $valorDolar;
}

echo "Digite o valor em real: R$ ";
$valorReal = readline();

echo "Digite a cotação do dólar: ";
$cotacaoDolar = readline();

$resultado = converterRealParaDolar($valorReal, $cotacaoDolar);

echo "O valor em dólar é: \$" . number_format($resultado, 2, '.', ',');
