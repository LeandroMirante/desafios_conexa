<?php
$total = 0;
$count = 0;

while (true) {
    $input = readline("Digite um número (ou uma letra para encerrar): ");

    if (!is_numeric($input)) {
        break;
    }
    $number = (float)$input;
    $total += $number;
    $count++;
}

if ($count > 0) {
    $average = $total / $count;
    echo "A média dos números é: " . $average;
} else {
    echo "Nenhum número foi inserido.";
}
