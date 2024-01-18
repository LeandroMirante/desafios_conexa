<?php
class Aluno
{
    private $matricula;
    private $nome;
    private $notaProva1;
    private $notaProva2;
    private $notaTrabalho;

    public function __construct($matricula, $nome, $notaProva1, $notaProva2, $notaTrabalho)
    {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->notaProva1 = $notaProva1;
        $this->notaProva2 = $notaProva2;
        $this->notaTrabalho = $notaTrabalho;
    }

    public function media()
    {
        $media = ($this->notaProva1 * 2.5 + $this->notaProva2 * 2.5 + $this->notaTrabalho * 2) / 7;
        return $media;
    }

    public function final()
    {
        $media = $this->media();
        $notaFinal = 0;

        if ($media < 6.0) {
            $notaFinal = 10 - $media;
        }

        if ($media < 4.0) {
            $notaFinal = 0;
        }

        return $notaFinal;
    }
}
