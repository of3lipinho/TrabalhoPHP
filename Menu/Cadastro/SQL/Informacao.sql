CREATE DATABASE INFORMACAO;
USE INFORMACAO;
CREATE TABLE PRESTADOR(
CODPRESTADOR INT KEY AUTO_INCREMENT,
NOME VARCHAR(45),
DATANASC DATE,
TELEFONE VARCHAR(20),
EMAIL VARCHAR(100),
CPF VARCHAR(20),
ESPECIALIDADE VARCHAR(100)
);
SELECT * FROM PRESTADOR;
DROP table prestador;
CREATE TABLE PRESTADOR(
CODPRESTADOR INT KEY AUTO_INCREMENT,
NOME VARCHAR(45),
DATANASC DATE,
TELEFONE VARCHAR(20),
EMAIL VARCHAR(100),
CPF VARCHAR(20),
ESPECIALIDADE VARCHAR(100)
);
