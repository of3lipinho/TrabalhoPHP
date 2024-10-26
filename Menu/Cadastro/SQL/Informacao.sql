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
INSERT INTO PRESTADOR 
VALUES 
(1, 'João Silva', '1985-05-15', '(11) 98765-4321', 'joao.silva@example.com', '123.456.789-00', 'Engenheiro'),
(2, 'Maria Oliveira', '1990-10-20', '(11) 91234-5678', 'maria.oliveira@example.com', '987.654.321-00', 'Advogada'),
(3, 'Carlos Souza', '1978-03-25', '(21) 99876-5432', 'carlos.souza@example.com', '456.789.123-00', 'Professor'),
(4, 'Ana Costa', '1982-08-30', '(31) 98888-1234', 'ana.costa@example.com', '321.654.987-00', 'Médica Veterinária'),
(5, 'João Almeida', '1992-06-17', '(41) 97654-3210', 'joao.almeida@example.com', '789.123.456-11', 'Engenheiro'),
(6, 'Lucas Moreira', '1983-12-19', '(51) 93456-7890', 'lucas.moreira@example.com', '234.567.890-01', 'Professor'),
(7, 'Pedro Santos', '1989-11-11', '(61) 98761-4320', 'pedro.santos@example.com', '567.890.123-02', 'Arquiteto'),
(8, 'Paula Ferreira', '1991-03-14', '(71) 96543-2109', 'paula.ferreira@example.com', '890.123.456-03', 'Advogada'),
(9, 'Mariana Ramos', '1993-08-22', '(81) 95432-1098', 'mariana.ramos@example.com', '123.789.456-04', 'Professora'),
(10, 'Fernando Costa', '1980-05-18', '(91) 94321-0987', 'fernando.costa@example.com', '456.123.789-05', 'Médico'),
(11, 'Lucas Lima', '1987-07-12', '(21) 98765-0987', 'lucas.lima@example.com', '456.321.654-10', 'Engenheiro Civil'),
(12, 'José Silva', '1995-01-05', '(41) 98766-7890', 'jose.silva@example.com', '555.666.777-08', 'Psicólogo'),
(13, 'João Martins', '1990-09-22', '(51) 96783-1234', 'joao.martins@example.com', '111.222.333-09', 'Advogado'),
(14, 'Fernanda Araújo', '1986-02-16', '(11) 99821-3344', 'fernanda.araujo@example.com', '999.888.777-06', 'Designer Gráfico'),
(15, 'Carla Rocha', '1983-11-11', '(21) 98123-4567', 'carla.rocha@example.com', '333.444.555-66', 'Arquiteta'),
(16, 'Marcelo Ribeiro', '1994-03-08', '(51) 92345-6789', 'marcelo.ribeiro@example.com', '222.333.444-55', 'Engenheiro Eletricista'),
(17, 'Juliana Souza', '1988-04-12', '(31) 98765-4321', 'juliana.souza@example.com', '777.888.999-00', 'Enfermeira'),
(18, 'Rafael Fernandes', '1979-09-09', '(61) 91234-5678', 'rafael.fernandes@example.com', '555.666.777-11', 'Professor'),
(19, 'Camila Lima', '1993-06-27', '(71) 93210-9876', 'camila.lima@example.com', '444.555.666-77', 'Engenheira Ambiental'),
(20, 'Bruno Cardoso', '1986-10-15', '(81) 98712-3456', 'bruno.cardoso@example.com', '666.777.888-99', 'Jornalista'),
(21, 'Lucas Souza', '1991-01-18', '(41) 97856-1234', 'lucas.souza@example.com', '999.123.456-78', 'Professor'),
(22, 'Daniela Nunes', '1990-11-19', '(31) 99832-6543', 'daniela.nunes@example.com', '888.999.111-22', 'Nutricionista'),
(23, 'Rodrigo Gomes', '1985-07-03', '(21) 93456-7890', 'rodrigo.gomes@example.com', '222.555.888-00', 'Administrador'),
(24, 'Larissa Pereira', '1992-03-14', '(61) 98761-4320', 'larissa.pereira@example.com', '444.888.111-22', 'Médica');
SELECT * FROM PRESTADOR;
