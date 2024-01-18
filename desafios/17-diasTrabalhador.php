<?php
function calcularSalario($quantidadeDias, $adesaoPlanoSaude, $funcionarioDoMes) {
    $valorPorDia = 113.24;

    $salarioBruto = $quantidadeDias * $valorPorDia;

    if($adesaoPlanoSaude){
        $salarioComDesconto = $salarioBruto - ($salarioBruto * 0.20);
    }else{
        $salarioComDesconto = $salarioBruto;
    }

    if($funcionarioDoMes){
        $salarioFinal = $salarioComDesconto + 150;
    }else{
        $salarioFinal = $salarioComDesconto;
    }
    
    return $salarioFinal;
}

echo "Digite a quantidade de dias trabalhados: ";
$quantidadeDias = readline();

echo "O trabalhador possui adesão ao plano de saúde? (S para sim, N para não): ";
$adesaoPlanoSaude = strtoupper(readline()) == 'S';

echo "O trabalhador foi eleito funcionário do mês? (S para sim, N para não): ";
$funcionarioDoMes = strtoupper(readline()) == 'S';


$salarioLiquido = calcularSalario($quantidadeDias, $adesaoPlanoSaude, $funcionarioDoMes);
echo "O salário é: R$ " . number_format($salarioLiquido, 2, ',', '.');
