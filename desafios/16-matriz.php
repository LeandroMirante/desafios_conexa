<?php
function verificarMatrizIdentidade($matriz) {
    for ($i = 0; $i < count($matriz); $i++) {
        for ($j = 0; $j < count($matriz[$i]); $j++) {
            if (($i == $j && $matriz[$i][$j] != 1) || ($i != $j && $matriz[$i][$j] != 0)) {
                return false;
            }
        }
    }
    return true;
}

$matriz = array_fill(0, 4, array_fill(0, 4, 0));

echo "Digite os elementos da matriz 4x4:\n";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo "Elemento [" . ($i + 1) . "][" . ($j + 1) . "]: ";
        $matriz[$i][$j] = readline();
    }
}

// Verificar se a matriz é uma matriz identidade
if (verificarMatrizIdentidade($matriz)) {
    echo "A matriz é uma matriz identidade.\n";
} else {
    echo "A matriz não é uma matriz identidade.\n";
}