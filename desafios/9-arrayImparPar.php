<?php
$numerosImpares = array();
$numerosPares = array();

for ($i = 1; $i <= 10; $i++) {
    $numero = intval(readline("Digite o número $i: "));

    if ($numero % 2 == 0) {
        $numerosPares[] = $numero;
    } else {
        $numerosImpares[] = $numero;
    }
}

echo "Números Ímpares: ";
print_r($numerosImpares);

echo "Números Pares: ";
print_r($numerosPares);
