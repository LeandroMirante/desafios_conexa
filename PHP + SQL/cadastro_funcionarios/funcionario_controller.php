<?php

require "../../cadastro_funcionarios/funcionario.model.php";
require "../../cadastro_funcionarios/funcionario.service.php";
require "../../cadastro_funcionarios/conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : 'recuperar';

if ($acao == 'inserir') {
    $funcionario = new Funcionario();

    $funcionario->__set('nome', $_POST['nome'])
        ->__set('idade', $_POST['idade'])
        ->__set('celular', $_POST['celular'])
        ->__set('salario', $_POST['salario'])
        ->__set('tempo_servico', $_POST['tempo_servico'])
        ->__set('funcao', $_POST['funcao'])
        ->__set('departamento_id', $_POST['departamento_id']);

    $conexao = new Conexao();

    $funcionarioService = new FuncionarioService($conexao, $funcionario);

    $funcionarioService->inserir();

    header('Location: nova_tarefa.php?inclusao=1');
} else if ($acao == 'recuperar') {
    $funcionario = new Funcionario();
    $conexao = new Conexao();

    $funcionarioService = new FuncionarioService($conexao, $funcionario);
    $funcionarios = $funcionarioService->recuperar();
} else if ($acao == 'editar') {
    $mapaDepartamentos = array(
        'Comercial' => 1,
        'Marketing' => 2,
        'Desenvolvimento' => 3,
        'Atendimento' => 4,
        'RH' => 5
    );

    $funcionario = new Funcionario();
    $funcionario->__set('nome', $_POST['nome'])
        ->__set('id', $_POST['id'])
        ->__set('idade', $_POST['idade'])
        ->__set('celular', $_POST['celular'])
        ->__set('salario', $_POST['salario'])
        ->__set('tempo_servico', $_POST['tempo_servico'])
        ->__set('funcao', $_POST['funcao'])
        ->__set('departamento_id', $mapaDepartamentos[$_POST['nome_departamento']]);

    $conexao = new Conexao();

    $funcionarioService = new FuncionarioService($conexao, $funcionario);

    $funcionarioService->atualizar();
    header('location: index.php');
} else if ($acao == 'remover') {
    echo 'chegamos aqui';
    $funcionario = new Funcionario;
    $funcionario->__set('id', $_GET['id']);

    $conexao = new Conexao;

    $funcionarioService = new FuncionarioService($conexao, $funcionario);

    $funcionarioService->remover();

    header('location: index.php');
}
