<?php

class Data
{
    private $dia;
    private $mes;
    private $ano;

    public function __construct($dia, $mes, $ano)
    {
        if ($this->validarData($dia, $mes, $ano)) {
            $this->dia = $dia;
            $this->mes = $mes;
            $this->ano = $ano;
        } else {
            $this->dia = 1;
            $this->mes = 1;
            $this->ano = 1971;
        }
    }

    private function validarData($dia, $mes, $ano)
    {
        return checkdate($mes, $dia, $ano);
    }

    public function comparar(Data $outraData)
    {
        $dataAtual = strtotime($this->getISO());
        $outraDataTimestamp = strtotime($outraData->getISO());

        if ($dataAtual == $outraDataTimestamp) {
            return 0;
        } elseif ($dataAtual > $outraDataTimestamp) {
            return 1;
        } else {
            return -1;
        }
    }

    public function getDia()
    {
        return sprintf("%02d", $this->dia);
    }

    public function getMes()
    {
        return sprintf("%02d", $this->mes);
    }

    public function getMesExtenso()
    {
        $meses = [
            1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março',
            4 => 'Abril', 5 => 'Maio', 6 => 'Junho',
            7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro',
            10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
        ];

        return $meses[$this->mes];
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function isBissexto()
    {
        return ($this->ano % 4 == 0 && ($this->ano % 100 != 0 || $this->ano % 400 == 0));
    }

    public function clonar()
    {
        return clone $this;
    }

    public function getISO()
    {
        return "{$this->ano}-{$this->getMes()}-{$this->getDia()}";
    }

    public function getPtBr()
    {
        return "{$this->getDia()}/{$this->getMes()}/{$this->ano}";
    }
}

// Exemplo de uso da classe
$data1 = new Data(40, 12, 2023);
$data2 = new Data(1, 1, 2024);

echo "Data 1: " . $data1->getPtBr() . "\n";
echo "Data 2: " . $data2->getPtBr() . "\n";

$resultadoComparacao = $data1->comparar($data2);

if ($resultadoComparacao == 0) {
    echo "As datas são iguais.\n";
} elseif ($resultadoComparacao == 1) {
    echo "A data 1 é maior que a data 2.\n";
} else {
    echo "A data 2 é maior que a data 1.\n";
}
