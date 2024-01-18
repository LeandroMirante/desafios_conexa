<?php
$acao = 'recuperar';
require 'funcionario_controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Cadastro de Funcionário</title>
</head>

<script>
    function editar(id, nome, idade, celular, salario, tempo_servico, funcao, nome_departamento) {
        location.href = 'editar_funcionario.php?id=' + id +
            '&nome=' + nome +
            '&idade=' + idade +
            '&celular=' + celular +
            '&salario=' + salario +
            '&tempo_servico=' + tempo_servico +
            '&funcao=' + funcao +
            '&nome_departamento=' + nome_departamento;
    }

    function remover(id) {
        location.href = 'funcionario_controller.php?acao=remover&id=' + id
    }
</script>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Sistema Funcionários</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Listar Funcionários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastrar_funcionario.php">Cadastrar Funcionário</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="d-flex flex-wrap">

        <?php foreach ($funcionarios as $key => $funcionario) { ?>
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Nome: <?= $funcionario->nome ?></h5>
                    <p class="card-text">Idade: <?= $funcionario->idade ?></p>
                    <p class="card-text">Celular: <?= $funcionario->celular ?></p>
                    <p class="card-text">Salário: R$ <?= $funcionario->salario ?></p>
                    <p class="card-text">Tempo de Serviço: <?= $funcionario->tempo_servico ?> anos</p>
                    <p class="card-text">Função: <?= $funcionario->funcao ?></p>
                    <p class="card-text">Departamento: <?= $funcionario->nome_departamento ?></p>
                    <div class="mt-3">
                        <button class="btn btn-primary mr-2" onclick="editar(
                            <?= $funcionario->id ?>,
                            '<?= $funcionario->nome ?>',
                            <?= $funcionario->idade ?>,
                            '<?= $funcionario->celular ?>',
                            <?= $funcionario->salario ?>,
                            <?= $funcionario->tempo_servico ?>,
                            '<?= $funcionario->funcao ?>',
                            '<?= $funcionario->nome_departamento ?>',
                            )">Editar</button>
                        <button class="btn btn-danger" onclick="remover(<?= $funcionario->id ?>)">Excluir</button>
                    </div>
                </div>
            </div>

        <?php } ?>


    </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>