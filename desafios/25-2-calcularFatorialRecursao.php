<?php
function calcularFatorial($numero) {
    if ($numero == 0 || $numero == 1) {
        return 1;
    } else {
        return $numero * calcularFatorial($numero - 1);
    }
}

echo "Digite um número para calcular o fatorial: ";
$numero = readline();
$resultado = calcularFatorial($numero);

echo "$numero! = $resultado";
