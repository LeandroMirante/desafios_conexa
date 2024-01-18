<?php

namespace App\Controllers;

use MF\Controller\Action;


class IndexController extends Action
{

    public function listarClentes()
    {
        $clientes = $this->cliente->getClientes();

        $this->view->clientes = $clientes;


        $this->render('listarClientes', 'layout');
    }

    public function formCadastro()
    {
        $this->render('formCadastro', 'layout');
    }

    public function salvarCliente()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];


            $newClient = array(
                "nome" => $nome,
                "email" => $email,
                "senha" => $senha
            );
            $this->cliente->setCliente($newClient);

            print_r($this->cliente->getClientes());
        }
        //header('Location: /');
    }
}
