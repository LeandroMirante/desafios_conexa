<?php
function calcularAmplitude($numeros) {
    if (count($numeros) < 2) {
        return "Informe pelomenos 2 números";
    }

    $minimo = min($numeros);
    $maximo = max($numeros);

    $amplitude = $maximo - $minimo;

    return $amplitude;
}

$numeros = array();

while (true) {
    $input = readline("Digite um número (ou uma letra para encerrar): ");
    if (!is_numeric($input)) {
        break;
    }
    $numeros[] = $input;
}

$resultado = calcularAmplitude($numeros);
echo "Amplitude da relação: $resultado\n";
