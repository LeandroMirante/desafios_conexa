<?php
function classificarLutador($peso) {
    if ($peso <= 56.7) {
        return "Peso Mosca (Flyweight)";
    } elseif ($peso <= 61.2) {
        return "Peso Galo (Bantamweight)";
    } elseif ($peso <= 65.8) {
        return "Peso Pena (Featherweight)";
    } elseif ($peso <= 70.3) {
        return "Peso Leve (Lightweight)";
    } elseif ($peso <= 77.1) {
        return "Peso Meio-Médio (Welterweight)";
    } elseif ($peso <= 83.9) {
        return "Peso Médio (Middleweight)";
    } elseif ($peso <= 93.0) {
        return "Peso Meio-Pesado (Light Heavyweight)";
    } elseif ($peso <= 120.2) {
        return "Peso Pesado (Heavyweight)";
    } else {
        return "Fora das categorias padrão";
    }
}

echo "Digite o peso do lutador em kg: ";
$pesoLutador = readline();

$categoria = classificarLutador($pesoLutador);
echo "O lutador se enquadra na categoria: " . $categoria;