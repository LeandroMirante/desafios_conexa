<?php
function kEsimoDigito($numero, $k) {
    $numeroString = (string)$numero;

    $digito = (int)$numeroString[-$k];

    return $digito;
}

echo "Insira o número a calcular o k-ésimo: \n";
$numero = (int)readline();
echo "Insira o k: \n";
$k = (int)readline();

$resultado = kEsimoDigito($numero, $k);
echo "O $k-ésimo dígito da parte inteira de $numero é: $resultado";

