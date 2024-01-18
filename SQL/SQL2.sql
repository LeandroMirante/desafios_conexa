CREATE TABLE departamento(
    id int PRIMARY KEY,
    nome varchar(20) not null,
    status boolean DEFAULT 1
);

INSERT INTO departamento (id, nome, status) VALUES
(1, 'Comercial', true),
(2, 'Marketing', true),
(3, 'Desenvolvimento', true),
(4, 'Atendimento', true);


ALTER TABLE funcionarios
ADD COLUMN departamento_id INT,
ADD CONSTRAINT fk_departamento
    FOREIGN KEY (departamento_id)
    REFERENCES departamento(id);


SELECT * FROM departamento;


SELECT nome,salario 
from funcionarios 
LEFT JOIN departamento ON (funcionarios.departamento_id = departamento.id) 
WHERE nome_departamento = 'Desenvolvimento';


SELECT nome,salario 
from funcionarios 
LEFT JOIN departamento ON (funcionarios.departamento_id = departamento.id) 
WHERE nome_departamento = 'Marketing' AND tempo_servico < 1;


INSERT INTO departamento (id, nome_departamento) VALUES (5,'RH');

INSERT INTO funcionarios (nome, celular, salario, tempo_servico,departamento_id) 
VALUES ('Maria da Silva','75985965896', 2500, 20, 5)

UPDATE funcionarios
SET celular = '71982365890'
WHERE nome = 'Maria da Silva';

UPDATE departamento
SET status = 0
WHERE nome_departamento = 'RH';

SELECT AVG(f.salario) AS media_salarial
FROM funcionarios f
JOIN departamento d ON f.departamento_id = d.id
WHERE d.nome_departamento = 'Marketing';

SELECT SUM(f.salario) AS soma_salarial
FROM funcionarios f
JOIN departamento d ON f.departamento_id = d.id
WHERE d.nome_departamento IN ('Atendimento' , 'Desenvolvimento');

SELECT f.nome, f.tempo_servico
FROM funcionarios f
JOIN departamento d ON f.departamento_id = d.id
WHERE d.nome_departamento = 'Comercial'
ORDER BY f.tempo_servico DESC
LIMIT 1;

DELETE FROM funcionarios
WHERE nome = 'Maria da Silva';

UPDATE funcionarios f
JOIN departamento d ON f.departamento_id = d.id
SET f.salario = 0
WHERE d.status = 0;

DELETE f
FROM funcionarios f
JOIN departamento d ON f.departamento_id = d.id
WHERE d.nome_departamento = 'Atendimento' AND f.tempo_servico > 5;
