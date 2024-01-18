<?php

class Funcionario
{
    private $id;
    private $nome;
    private $idade;
    private $celular;
    private $salario;
    private $tempo_servico;
    private $funcao;
    private $departamento_id;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
        return $this;
    }
}
