<?php
$arr1 = [9, 32, 45, 21, 56, 67, 42, 55];
$arr2 = [24, 42, 32, 12, 45, 11, 67, 66];

$arrNew = array_intersect($arr1, $arr2);

echo "Números comuns nos arrays:\n";
print_r($arrNew);
