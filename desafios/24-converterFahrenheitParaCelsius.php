<?php
function converterFahrenheitParaCelsius($temperaturaFahrenheit) {

    $temperaturaCelsius = ($temperaturaFahrenheit - 32) * 5 / 9;

    return $temperaturaCelsius;
}

echo "Digite a temperatura em Fahrenheit: ";
$temperaturaFahrenheit = readline();

$resultado = converterFahrenheitParaCelsius($temperaturaFahrenheit);

echo "A temperatura em Celsius é: " . number_format($resultado, 2, '.', ',') . " ºC";
