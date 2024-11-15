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
(1, 'Ricardo Oliveira', '1984-04-10', '(11) 92345-6789', 'ricardo.oliveira@example.com', '234.567.890-12', 'Dentista'),
(2, 'Cláudia Santos', '1989-02-22', '(21) 96754-3210', 'claudia.santos@example.com', '345.678.901-23', 'Psicóloga'),
(3, 'Renato Silva', '1977-07-15', '(51) 99832-6543', 'renato.silva@example.com', '456.789.012-34', 'Médico'),
(4, 'Tatiane Costa', '1995-01-10', '(61) 96452-1234', 'tatiane.costa@example.com', '567.890.123-45', 'Professora'),
(5, 'André Costa', '1980-11-05', '(81) 92765-4321', 'andre.costa@example.com', '678.901.234-56', 'Advogado'),
(6, 'Marcos Almeida', '1993-03-30', '(31) 96321-6543', 'marcos.almeida@example.com', '789.012.345-67', 'Engenheiro de Software'),
(7, 'Sofia Martins', '1988-06-08', '(11) 99872-5431', 'sofia.martins@example.com', '890.123.456-78', 'Farmacêutica'),
(8, 'Gustavo Pereira', '1991-12-10', '(41) 96743-2109', 'gustavo.pereira@example.com', '901.234.567-89', 'Advogado'),
(9, 'Larissa Costa', '1992-02-15', '(71) 96574-1234', 'larissa.costa@example.com', '123.456.789-00', 'Psicóloga'),
(10, 'Felipe Santos', '1983-05-25', '(61) 93456-7890', 'felipe.santos@example.com', '234.567.890-01', 'Médico'),
(11, 'Isabela Rocha', '1990-07-03', '(51) 91234-5678', 'isabela.rocha@example.com', '345.678.901-12', 'Engenheira Ambiental'),
(12, 'Roberto Almeida', '1985-03-13', '(21) 98234-5678', 'roberto.almeida@example.com', '456.789.012-23', 'Professor'),
(13, 'Carla Silva', '1993-09-18', '(31) 91345-6789', 'carla.silva@example.com', '567.890.123-34', 'Arquiteta'),
(14, 'Eduardo Souza', '1988-11-25', '(41) 92345-6789', 'eduardo.souza@example.com', '678.901.234-45', 'Jornalista'),
(15, 'Patrícia Lima', '1990-04-05', '(71) 93345-1234', 'patricia.lima@example.com', '789.012.345-56', 'Engenheira Civil'),
(16, 'Rafael Costa', '1992-08-16', '(51) 95321-0987', 'rafael.costa@example.com', '890.123.456-67', 'Médica'),
(17, 'Luciana Fernandes', '1987-06-22', '(11) 93456-7890', 'luciana.fernandes@example.com', '901.234.567-78', 'Psicóloga'),
(18, 'Vitor Pereira', '1994-05-09', '(61) 94832-6543', 'vitor.pereira@example.com', '123.456.789-12', 'Advogado'),
(19, 'Mariana Rocha', '1993-12-05', '(21) 93123-9876', 'mariana.rocha@example.com', '234.567.890-23', 'Nutricionista'),
(20, 'Felipe Lima', '1986-08-13', '(41) 96452-1234', 'felipe.lima@example.com', '345.678.901-34', 'Designer Gráfico'),
(21, 'Bruna Oliveira', '1995-02-22', '(11) 98345-6789', 'bruna.oliveira@example.com', '456.789.012-45', 'Médica Veterinária'),
(22, 'Marcelo Costa', '1980-12-14', '(31) 98674-1234', 'marcelo.costa@example.com', '567.890.123-56', 'Engenheiro Eletricista'),
(23, 'Juliana Martins', '1991-03-10', '(51) 97654-3210', 'juliana.martins@example.com', '678.901.234-67', 'Arquiteta'),
(24, 'Tiago Almeida', '1983-01-17', '(61) 92134-5678', 'tiago.almeida@example.com', '789.012.345-78', 'Professor');
SELECT * FROM PRESTADOR;
CREATE TABLE VAGAS(
CODVAGAS INT KEY AUTO_INCREMENT,
NOME VARCHAR(100),
DATA_NASC DATE,
TELEFONE VARCHAR(20),
EMAIL VARCHAR(200),
CPF CHAR(14),
VAGA VARCHAR(255),
DESCRICAO VARCHAR(255)
);
INSERT INTO VAGAS (codvagas, nome, data_nasc, telefone, email, cpf, vaga, descricao) 
VALUES 
(1, 'João Silva', '1985-05-15', '(11) 98765-4321', 'joao.silva@example.com', '123.456.789-00', 'Engenheiro Civil', 'Desenvolver projetos de engenharia civil, supervisionar obras e garantir a qualidade da construção.'),
(2, 'Oliveira Advogados', '1990-10-20', '(11) 91234-5678', 'oliveira.advogados@example.com', '987.654.321-00', 'Advogada', 'Atuar como advogada, oferecendo consultoria jurídica, representando clientes em tribunais e redigindo contratos.'),
(3, 'Escola Souza & Silva', '1978-03-25', '(21) 99876-5432', 'escola.souza.silva@example.com', '456.789.123-00', 'Professor de Matemática', 'Ministrar aulas de matemática no ensino fundamental e médio, preparando material didático e avaliando alunos.'),
(4, 'Ana Costa', '1982-08-30', '(31) 98888-1234', 'ana.costa@example.com', '321.654.987-00', 'Médica Veterinária', 'Realizar exames clínicos, diagnóstico e tratamento de animais, além de oferecer cuidados preventivos e cirurgias.'),
(5, 'Construtora Almeida & Filhos', '1992-06-17', '(41) 97654-3210', 'construtora.almeida@example.com', '789.123.456-11', 'Engenheiro Civil', 'Planejar, projetar e gerenciar obras de infraestrutura, coordenando equipes e controlando cronogramas.'),
(6, 'Lucas Moreira', '1983-12-19', '(51) 93456-7890', 'lucas.moreira@example.com', '234.567.890-01', 'Professor de Ciências', 'Ensinar Ciências para o ensino fundamental, elaborar atividades pedagógicas e acompanhar o desempenho dos alunos.'),
(7, 'Pedro Santos Arquitetura', '1989-11-11', '(61) 98761-4320', 'pedro.santos@example.com', '567.890.123-02', 'Arquiteto', 'Desenvolver projetos arquitetônicos, planejar espaços e supervisionar a execução de obras.'),
(8, 'Paula Ferreira', '1991-03-14', '(71) 96543-2109', 'paula.ferreira@example.com', '890.123.456-03', 'Advogada', 'Atuar em casos jurídicos de diversas áreas, incluindo consultoria, litígios e mediação de conflitos.'),
(9, 'Mariana Ramos', '1993-08-22', '(81) 95432-1098', 'mariana.ramos@example.com', '123.789.456-04', 'Professora', 'Ministrar aulas de literatura e redação, organizar atividades culturais e promover o desenvolvimento educacional.'),
(10, 'Hospital Costa & Oliveira', '1980-05-18', '(91) 94321-0987', 'hospital.costa@example.com', '456.123.789-05', 'Médico', 'Atender pacientes, realizar exames clínicos, diagnosticar doenças e prescrever tratamentos médicos.'),
(11, 'Lucas Lima', '1987-07-12', '(21) 98765-0987', 'lucas.lima@example.com', '456.321.654-10', 'Engenheiro Civil', 'Desenvolver projetos de construção civil, elaborar orçamentos e coordenar a execução de obras.'),
(12, 'José Silva', '1995-01-05', '(41) 98766-7890', 'jose.silva@example.com', '555.666.777-08', 'Psicólogo', 'Realizar atendimentos psicológicos, acompanhamento terapêutico e promover bem-estar emocional de pacientes.'),
(13, 'M. Ribeiro Consultoria', '1990-09-22', '(51) 96783-1234', 'marcelo.ribeiro@example.com', '111.222.333-09', 'Consultor Empresarial', 'Prestar consultoria estratégica para empresas, analisando processos e sugerindo melhorias.'),
(14, 'Fernanda Araújo', '1986-02-16', '(11) 99821-3344', 'fernanda.araujo@example.com', '999.888.777-06', 'Designer Gráfico', 'Desenvolver identidade visual, criar peças gráficas e materiais de comunicação para marcas.'),
(15, 'Carla Rocha Arquitetura', '1983-11-11', '(21) 98123-4567', 'carla.rocha@example.com', '333.444.555-66', 'Arquiteta', 'Projetar espaços residenciais e comerciais, coordenar equipes e supervisionar obras de construção.'),
(16, 'Marcelo Ribeiro', '1994-03-08', '(51) 92345-6789', 'marcelo.ribeiro@example.com', '222.333.444-55', 'Engenheiro Eletricista', 'Responsável por projetos elétricos, instalação e manutenção de sistemas elétricos em edificações e indústrias.'),
(17, 'Juliana Souza', '1988-04-12', '(31) 98765-4321', 'juliana.souza@example.com', '777.888.999-00', 'Enfermeira', 'Realizar atendimentos de enfermagem, administrar medicamentos e auxiliar médicos em procedimentos hospitalares.'),
(18, 'Rafael Fernandes Consultoria', '1979-09-09', '(61) 91234-5678', 'rafael.fernandes@example.com', '555.666.777-11', 'Consultor Financeiro', 'Prestar consultoria financeira a empresas e indivíduos, ajudando a melhorar a gestão de recursos e investimentos.'),
(19, 'Camila Lima Engenharia', '1993-06-27', '(71) 93210-9876', 'camila.lima@example.com', '444.555.666-77', 'Engenheira Ambiental', 'Analisar impactos ambientais, desenvolver projetos sustentáveis e garantir conformidade com normas ambientais.'),
(20, 'Bruno Cardoso', '1986-10-15', '(81) 98712-3456', 'bruno.cardoso@example.com', '666.777.888-99', 'Jornalista', 'Produzir conteúdo jornalístico, realizar entrevistas e reportagens, e garantir a apuração e qualidade da informação.'),
(21, 'Lucas Souza', '1991-01-18', '(41) 97856-1234', 'lucas.souza@example.com', '999.123.456-78', 'Professor de História', 'Ministrar aulas de História, elaborar conteúdos pedagógicos e promover debates sobre temas históricos.'),
(22, 'Daniela Nunes', '1990-11-19', '(31) 99832-6543', 'daniela.nunes@example.com', '888.999.111-22', 'Nutricionista', 'Orientar sobre alimentação saudável, elaborar planos alimentares e realizar acompanhamento nutricional de pacientes.'),
(23, 'Rodrigo Gomes Administradora', '1985-07-03', '(21) 93456-7890', 'rodrigo.gomes@example.com', '222.555.888-00', 'Administrador', 'Gerenciar processos administrativos, coordenar equipes e elaborar estratégias para otimização de recursos.'),
(24, 'Larissa Pereira', '1992-03-14', '(61) 98761-4320', 'larissa.pereira@example.com', '444.888.111-22', 'Médica', 'Prestar atendimentos médicos, diagnosticar doenças, prescrever tratamentos e acompanhar a recuperação dos pacientes.');


