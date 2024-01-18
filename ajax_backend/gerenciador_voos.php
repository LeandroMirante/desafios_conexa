<?php


class GerenciadorVoos
{
    public $voos = [];


    public function adicionarVoo($numeroVoo, $data)
    {
        if (!$this->existeVoo($numeroVoo, $data)) {
            $novoVoo = new Voo($numeroVoo, $data);

            $this->voos[] = $novoVoo;

            return $novoVoo;
        } else {
            return $this->existeVoo($numeroVoo, $data);
        }
    }

    private function existeVoo($numeroVoo, $data)
    {
        foreach ($this->voos as $voo) {
            if ($voo->numeroVoo == $numeroVoo && $voo->dataVoo == $data) {
                return $voo;
            }
        }

        return false;
    }
}
