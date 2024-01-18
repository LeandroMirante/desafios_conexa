<?php
$conjuntoA = array('a', 'b', 'c');
$conjuntoB = array(1, 2);

$produtoCartesiano = array();

// Loop para gerar o produto cartesiano
for ($i = 0; $i < count($conjuntoA); $i++) {
    for ($j = 0; $j < count($conjuntoB); $j++) {
        $produtoCartesiano[] = array($conjuntoA[$i], $conjuntoB[$j]);
    }
}

echo "Produto Cartesiano de A x B:\n";
foreach ($produtoCartesiano as $parOrdenado) {
    echo "(" . $parOrdenado[0] . ", " . $parOrdenado[1] . ")\n";
}