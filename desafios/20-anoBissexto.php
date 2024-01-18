<?php
function verificaBissexto($ano) {
    if ($ano % 100 !== 0) {
        return ($ano % 4 === 0);
    } else {
        return ($ano % 400 === 0);
    }
}

echo "Digite um ano para verificar se é bissexto: ";
$ano = readline();

if (verificaBissexto($ano)) {
    echo $ano . " é um ano bissexto.";
} else {
    echo $ano . " não é um ano bissexto.";
}
