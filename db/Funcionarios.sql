CREATE TABLE Funcionarios(
	IDFuncionarios int primary key auto_increment,
	Nome varchar(100),
	Salario int,
	Dt_admissão date
);

CREATE TABLE Clientes(
	IDCliente int primary key  auto_increment,
	Nome varchar(50)
);

CREATE TABLE Ctt_Cli(
	ID_Cliente int, #FK
	
	Numero int(11)
);

CREATE TABLE Ctt_Func(
	ID_Funcionario int, #FK
	
	Numero int(11)
);


CREATE TABLE Fornecedores(
	IDFornecedor int  primary key auto_increment,
	Nome_Fantasia varchar (100),
	Item set('Brin', 'Deco'),
	Email varchar(50)
);

CREATE TABLE Endereco_Cli(
	Rua varchar (50),
	Numero int (6),
	Bairro varchar (50),
	Cidade varchar (50),
	Estado varchar(2),
	

	ID_Cliente int #FK
);

CREATE TABLE Endereco_Forn(
	Rua varchar (50),
	Numero int (6),
	Bairro varchar (50),
	Cidade varchar (50),
	Estado varchar(2),
	
	ID_Fornecedor int #FK

);



 # ----------Adicionando as PKs por fora da tabela-----------

ALTER TABLE Endereco_Cli
ADD PRIMARY KEY PK_FK_CLI_END (ID_Cliente);

ALTER TABLE Endereco_Forn
ADD PRIMARY KEY PK_FK_FORN_END (ID_Fornecedor);


# ----------Adicionando as FKs por fora da tabela-----------

ALTER TABLE Ctt_Func
ADD CONSTRAINT FK_FUNC_CTT  FOREIGN KEY (ID_Funcionario)
REFERENCES Funcionarios (IDFuncionarios);

ALTER TABLE Ctt_Cli
ADD CONSTRAINT FK_CLI_CTT FOREIGN KEY (ID_Cliente)
REFERENCES Clientes (IDCLIENTE);

ALTER TABLE Endereco_Cli
ADD CONSTRAINT FK_CLI_END FOREIGN KEY (ID_Cliente)
REFERENCES Clientes (IDCLIENTE);

ALTER TABLE Endereco_Forn
ADD CONSTRAINT FK_FORN_END FOREIGN KEY (ID_Fornecedor)
REFERENCES Fornecedores (IDFornecedor);


# ----------Inserindo dados-----------

INSERT INTO Funcionarios VALUES(NULL, 'Eduardo Henrique', 2000, '2019-01-19');
INSERT INTO Funcionarios VALUES(NULL, 'Gabrielle Engel', 6000, '2021-05-10');
INSERT INTO Funcionarios VALUES(NULL, 'Gustavo Alves', 10000, '2015-03-15');
INSERT INTO Funcionarios VALUES(NULL, 'Nathalie Kessy', 8000, '2015-08-30');
INSERT INTO Funcionarios VALUES(NULL, 'Osvaldo Henrique', 9000, '1998-01-19');
INSERT INTO Funcionarios VALUES(NULL, 'Sheila Libarino', 4000, '1998-01-19');
INSERT INTO Funcionarios VALUES(NULL, 'Patricia Camilo', 12000, '2010-05-07');
INSERT INTO Funcionarios VALUES(NULL, 'Andreia Nascimento', 2000, '2002-03-14');
INSERT INTO Funcionarios VALUES(NULL, 'Gustavo Oliveira', 6000, '2002-08-19');
INSERT INTO Funcionarios VALUES(NULL, 'Willian Harrys', 2000, '1988-12-31');


INSERT INTO Clientes VALUES(NULL, 'Gira Mundo kids');
INSERT INTO Clientes VALUES(NULL, 'Planeta da criança');
INSERT INTO Clientes VALUES(NULL, 'Bagunçadas');
INSERT INTO Clientes VALUES(NULL, 'Kid Mania');
INSERT INTO Clientes VALUES(NULL, 'Mareka');
INSERT INTO Clientes VALUES(NULL, 'Cata-Vento');
INSERT INTO Clientes VALUES(NULL, 'Alegria');
INSERT INTO Clientes VALUES(NULL, 'Fabrica de sonhos');
INSERT INTO Clientes VALUES(NULL, 'Geração diversão');
INSERT INTO Clientes VALUES(NULL, 'Universo infantil');


INSERT INTO Fornecedores VALUES(NULL, 'CIA dos brinquedos', 'Brin', 'ciadosbrinquedos@gmail.com');
INSERT INTO Fornecedores VALUES(NULL, 'Armatinhos Fernandes', 'Deco', 'armatinhos@outlook.com');
INSERT INTO Fornecedores VALUES(NULL, 'Cantinho da pelucia', 'Brin', 'c.pelucia@yahoo.com.br');
INSERT INTO Fornecedores VALUES(NULL, 'Morelli Fantasias', 'Deco', 'morellifantasias@hotmail.com');


INSERT INTO Endereco_Cli VALUES ('Machado de Assis', '98', 'Vitoria', 'SBC', 'SP', 1);
INSERT INTO Endereco_Cli VALUES ('Alberto Breccia', '17', 'Conquista', 'SBC', 'SP', 2);
INSERT INTO Endereco_Cli VALUES ('Padre Ronaldo de Azevedo', '35', 'dos Casa', 'SBC', 'SP', 3);
INSERT INTO Endereco_Cli VALUES ('Rua das begônias', '255', 'Casagrande', 'STA', 'SP', 4);
INSERT INTO Endereco_Cli VALUES ('Rua das olivas', '98', 'Mato Alto', 'Diadema', 'SP', 5);
INSERT INTO Endereco_Cli VALUES ('Hamilton Barros', '10', 'Centro', 'SCS', 'SP', 6);
INSERT INTO Endereco_Cli VALUES ('Florestan Fernandes', '14', 'Vitoria', 'STA', 'SP', 7);
INSERT INTO Endereco_Cli VALUES ('Castro Alves', '128', 'Massa', 'Diadema', 'SP', 8);
INSERT INTO Endereco_Cli VALUES ('Projetada', '98', 'Cassique', 'SBC', 'SP', 9);
INSERT INTO Endereco_Cli VALUES ('Principal', '50', 'Centro', 'STA', 'SP', 10);


INSERT INTO Endereco_Forn VALUES ('Rua Perimetral', '110', 'Casagrande', 'STA', 'SP' ,1);
INSERT INTO Endereco_Forn VALUES ('Rua Mauricio Piolli', '235', 'Vitoria', 'SBC', 'SP' ,2);
INSERT INTO Endereco_Forn VALUES ('Jose Camargo', '98', 'Massa', 'Diadema', 'SP' ,3);
INSERT INTO Endereco_Forn VALUES ('Projetada', '17', 'Cassique', 'SBC', 'SP' ,4);

INSERT INTO Ctt_Cli VALUES (1, '11952907443');
INSERT INTO Ctt_Cli VALUES (2, '11952905522');
INSERT INTO Ctt_Cli VALUES (3, '11916887443');
INSERT INTO Ctt_Cli VALUES (4, '11923558977');
INSERT INTO Ctt_Cli VALUES (5, '11917485962');
INSERT INTO Ctt_Cli VALUES (6, '11913054856');
INSERT INTO Ctt_Cli VALUES (7, '11969524774');
INSERT INTO Ctt_Cli VALUES (8, '11935355252');
INSERT INTO Ctt_Cli VALUES (9, '11945507443');
INSERT INTO Ctt_Cli VALUES (10, '11952908956');


INSERT INTO Ctt_Func VALUES (1, '11956621014');
INSERT INTO Ctt_Func VALUES (2, '11961100805');
INSERT INTO Ctt_Func VALUES (3, '11962095888');
INSERT INTO Ctt_Func VALUES (4, '11942364562');
INSERT INTO Ctt_Func VALUES (5, '11948856335');
INSERT INTO Ctt_Func VALUES (6, '11948221314');
INSERT INTO Ctt_Func VALUES (7, '11920503040');
INSERT INTO Ctt_Func VALUES (8, '11999235648');
INSERT INTO Ctt_Func VALUES (9, '11977826358');
INSERT INTO Ctt_Func VALUES (10, '11917283964');












#CREATE DATABASE decoracao;
#use decoracao;
#drop database decoracao;
#drop table Endereco;