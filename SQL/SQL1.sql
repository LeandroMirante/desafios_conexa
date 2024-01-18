CREATE DATABASE conexa;

CREATE TABLE funcionarios( 
    id int not null PRIMARY KEY AUTO_INCREMENT, 
    nome varchar(15) not null, 
    idade int null, 
    telefone varchar (20) null, 
    salario float(6,2) not null, 
    tempo_servico int(2) null );

INSERT INTO funcionarios (idade, nome, salario, telefone, tempo_servico)
VALUES (24, 'Mateus', 1500, '55999999999', 3);
INSERT INTO funcionarios (idade, nome, salario, telefone, tempo_servico)
VALUES (30, 'Joana', 3500, '55999999999', 5);
INSERT INTO funcionarios ( idade, nome, salario, telefone, tempo_servico)
VALUES (33, 'Felipe', 4000, '55999999999', 4);


ALTER TABLE funcionarios add COLUMN funcao varchar(20);

INSERT INTO funcionarios (idade, nome, salario, telefone, tempo_servico, funcao)
VALUES (24, 'Leandro', 8000, '55999999999', 2, 'desenvolvedor');

SELECT nome, salario FROM funcionarios;

SELECT nome, salario
FROM funcionarios
WHERE idade BETWEEN 18 AND 30;

SELECT nome, funcao
FROM funcionarios
WHERE salario > 3000.00;

SELECT nome, idade
FROM funcionarios
WHERE idade > 22 AND funcao = 'desenvolvedor';

SELECT AVG(idade) AS media_idade
FROM funcionarios
WHERE salario > 2000.00;

SELECT COUNT(*) AS total_funcionarios_mais_de_40
FROM funcionarios
WHERE idade > 40;

SELECT SUM(salario) AS total_folha_pagamento
FROM funcionarios;

SELECT *
FROM funcionarios
WHERE tempo_servico > 2 OR salario >= 5500.00;

SELECT MIN(salario) AS menor_salario
FROM funcionarios;

SELECT *
FROM funcionarios
WHERE tempo_servico = (SELECT MAX(tempo_servico) FROM funcionarios);

ALTER TABLE funcionarios
DROP COLUMN idade;

ALTER TABLE funcionarios CHANGE telefone celular int;

drop TABLE funcionarios;

