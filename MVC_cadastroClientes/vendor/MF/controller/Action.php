<?php

namespace MF\Controller;

use App\Models\Cliente;

class Action
{
    protected $view;
    protected $cliente;

    public function __construct()
    {
        $this->view = new \stdClass();
        $this->cliente = new Cliente();
    }

    protected function render($view, $layout)
    {
        $this->view->page = $view;
        require_once '../App/Views/' . $layout . '.phtml';
    }

    protected function content()
    {
        $class = get_class($this);
        $class = str_replace("App\\Controllers\\", "", $class);
        $class = str_replace("Controller", "", $class);
        $class = strtolower($class);

        require_once "../App/Views/" . $class . "/" . $this->view->page . ".phtml";
    }
}
