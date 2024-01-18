<!DOCTYPE html>
<html lang="en">

<?php
$valorSelecionado = $_GET['nome_departamento'];
$opcoes = array('Comercial', 'Marketing', 'Desenvolvimento', 'Atendimento', 'RH');
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Editar Funcionário</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Sistema Funcionários</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Listar Funcionários</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="cadastrar_funcionario.php">Cadastrar Funcionário</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container mt-5">
		<h2>Edição de Funcionário</h2>

		<form action="funcionario_controller.php?acao=editar" method="post">
			<input type="hidden" id="id" name="id" value="<?= $_GET['id'] ?>">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="nome">Nome:</label>
					<input value='<?= $_GET['nome'] ?>' type="text" class="form-control" id="nome" name="nome" required>
				</div>

				<div class="form-group col-md-6">
					<label for="idade">Idade:</label>
					<input value='<?= $_GET['idade'] ?>' type="number" class="form-control" id="idade" name="idade" required>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="celular">Celular:</label>
					<input value='<?= $_GET['celular'] ?>' type="text" class="form-control" id="celular" name="celular" required>
				</div>

				<div class="form-group col-md-6">
					<label for="salario">Salário:</label>
					<input value='<?= $_GET['salario'] ?>' type="number" class="form-control" id="salario" name="salario" required>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="tempo_servico">Tempo de Serviço:</label>
					<input value='<?= $_GET['tempo_servico'] ?>' type="number" class="form-control" id="tempo_servico" name="tempo_servico" required>
				</div>

				<div class="form-group col-md-6">
					<label for="funcao">Função:</label>
					<input value='<?= $_GET['funcao'] ?>' type="text" class="form-control" id="funcao" name="funcao" required>
				</div>
			</div>

			<div class="form-group">
				<label for="departamento">Departamento:</label>
				<select class="form-control" id="departamento" name="nome_departamento" required>
					<?php
					foreach ($opcoes as $opcao) {
						$selected = ($valorSelecionado == $opcao) ? 'selected' : '';
						echo '<option value="' . $opcao . '" ' . $selected . '>' . ucfirst($opcao) . '</option>';
					}
					?>
				</select>
			</div>

			<button type="submit" class="btn btn-primary">Editar</button>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>