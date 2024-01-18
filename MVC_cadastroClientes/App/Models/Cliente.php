<?php

namespace App\Models;

class Cliente
{
    protected $clientes = array(array(
        "nome" => "NewClient",
        "email" => "newclient@gmail.com",
        "senha" => "789012"
    ));

    public function getClientes()
    {
        return $this->clientes;
    }

    public function setCliente($cliente)
    {
        $this->clientes[] = $cliente;
    }
}
