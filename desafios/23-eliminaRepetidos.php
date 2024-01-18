<?php
$meuArray = array();
while (true) {
    $input = readline("Digite um número (ou uma letra para encerrar): ");

    if (!is_numeric($input)) {
        break;
    }
    $meuArray[] = $input;
}

$resultado = array_unique($meuArray);

echo "Array original: [" . implode(", ", $meuArray) . "]\n";
echo "Array sem valores repetidos: [" . implode(", ", $resultado) . "]";
