<?php
function calcularVolumeCone($raio, $altura) {
    $volume = (M_PI * $raio * $raio * $altura) / 3;

    return $volume;
}

echo "Digite o raio do cone: ";
$raio = readline();

echo "Digite a altura do cone: ";
$altura = readline();

$resultado = calcularVolumeCone($raio, $altura);

echo "O volume do cone é: " . number_format($resultado, 2, '.', ',');
