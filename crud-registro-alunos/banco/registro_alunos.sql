CREATE DATABASE registro_alunos;
USE registro_alunos;

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    idade INT NOT NULL,
    turma VARCHAR(100) NOT NULL,
    nota1 FLOAT,
    nota2 FLOAT,
    nota3 FLOAT,
    nota4 FLOAT,
    media FLOAT
);