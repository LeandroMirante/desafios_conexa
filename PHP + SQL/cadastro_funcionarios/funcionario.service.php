<?php

class FuncionarioService
{

    private $conexao;
    private $funcionario;

    public function __construct(Conexao $conexao, Funcionario $funcionario)
    {
        $this->conexao = $conexao->conectar();
        $this->funcionario = $funcionario;
    }

    public function inserir()
    {
        $query = 'insert into 
        funcionarios(nome, idade, celular, salario, tempo_servico, funcao, departamento_id) 
        values (:nome, :idade, :celular, :salario, :tempo_servico, :funcao, :departamento_id)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $this->funcionario->__get('nome'));
        $stmt->bindValue(':idade', $this->funcionario->__get('idade'));
        $stmt->bindValue(':celular', $this->funcionario->__get('celular'));
        $stmt->bindValue(':salario', $this->funcionario->__get('salario'));
        $stmt->bindValue(':tempo_servico', $this->funcionario->__get('tempo_servico'));
        $stmt->bindValue(':funcao', $this->funcionario->__get('funcao'));
        $stmt->bindValue(':departamento_id', $this->funcionario->__get('departamento_id'));
        $stmt->execute();
    }

    public function recuperar()
    {
        $query = 'select 
            f.id, f.nome, f.idade, f.celular, f.salario, f.tempo_servico, f.funcao, d.nome_departamento 
        from 
            funcionarios as f
        left join departamento as d on (f.departamento_id = d.id)
            ';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function atualizar()
    {
        $query = 'update funcionarios
        set 
        nome = :nome, 
        idade = :idade, 
        celular = :celular, 
        salario = :salario, 
        tempo_servico = :tempo_servico,
        funcao = :funcao,
        departamento_id = :departamento_id
        where
        id = :id
            ';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $this->funcionario->__get('nome'));
        $stmt->bindValue(':idade', $this->funcionario->__get('idade'));
        $stmt->bindValue(':celular', $this->funcionario->__get('celular'));
        $stmt->bindValue(':salario', $this->funcionario->__get('salario'));
        $stmt->bindValue(':tempo_servico', $this->funcionario->__get('tempo_servico'));
        $stmt->bindValue(':funcao', $this->funcionario->__get('funcao'));
        $stmt->bindValue(':departamento_id', $this->funcionario->__get('departamento_id'));
        $stmt->bindValue(':id', $this->funcionario->__get('id'));
        return $stmt->execute();
    }

    public function remover()
    {
        $query = 'delete from funcionarios where id = ?';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->funcionario->__get('id'));
        $stmt->execute();
    }
}
