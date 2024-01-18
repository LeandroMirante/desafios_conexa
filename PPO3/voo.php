<?php

class Voo
{
    public $numeroVoo;
    public $dataVoo;
    public $cadeirasOcupadas;

    public function __construct($numeroVoo, Data $dataVoo)
    {
        $this->numeroVoo = $numeroVoo;
        $this->dataVoo = $dataVoo;
        $this->cadeirasOcupadas = [];
    }

    public function proximoLivre()
    {
        for ($i = 1; $i <= 100; $i++) {
            if (!$this->verifica($i)) {
                return $i;
            }
        }
        return null;
    }

    public function verifica($numeroCadeira)
    {
        return in_array($numeroCadeira, $this->cadeirasOcupadas);
    }

    public function ocupa($numeroCadeira)
    {
        if (!$this->verifica($numeroCadeira) && $numeroCadeira > 0 && $numeroCadeira <= 100) {
            $this->cadeirasOcupadas[] = $numeroCadeira;
            return true;
        } else {
            return false;
        }
    }

    public function vagas()
    {
        return 100 - count($this->cadeirasOcupadas);
    }


    public function clonar()
    {
        return clone $this;
    }
}
