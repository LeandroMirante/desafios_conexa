<?php
$palavra = strtolower(readline("Digite uma palavra: "));

if ($palavra == strrev($palavra)) {
    echo "A palavra é um palíndromo.\n";
} else {
    echo "A palavra não é um palíndromo.\n";
}
