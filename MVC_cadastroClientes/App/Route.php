<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {

        $routes['clientes'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'listarClentes'
        );

        $routes['form-cadastro'] = array(
            'route' => '/form_cadastro',
            'controller' => 'indexController',
            'action' => 'formCadastro'
        );

        $routes['salvar-cliente'] = array(
            'route' => '/salvarCliente',
            'controller' => 'indexController',
            'action' => 'salvarCliente'
        );

        $this->setRoutes($routes);
    }
}
