CREATE TABLE Usuarios (
	cpf varchar (13) not null,
	nome varchar (50) not null,
	senha varchar (50) not null,
	email varchar (30) not null unique,
    primary key (cpf)
);

CREATE TABLE Jogos (
	id int auto_increment,
    nome varchar (50) not null,
	produtora varchar (50) not null,
    ano int(4),
	primary key (id)
);

CREATE TABLE Anuncios (
	idanuncio int auto_increment,
	titulo varchar (40),
	descricao varchar (200),
	valor float (10) not null,
	cpf varchar (13),
	id int (5),
	data datetime,
	primary key (idanuncio),
	foreign key (cpf) references Usuarios (cpf),
	foreign key (id) references Jogos (id)
);

CREATE TABLE Enderecos (
	id int auto_increment,
	rua varchar(30),
	numero varchar(10),
	bairro varchar(30),
	cep varchar(8),
	cpf varchar(13),
    primary key (id),
	foreign key (cpf) references Usuarios (CPF)
);



INSERT INTO Usuarios (cpf, nome, email, senha) 
	VALUES ('40100100105', 'admin', 'admin@gmail.com', '1234');

INSERT INTO Jogos (nome, produtora, ano) 
	VALUES ('Minecraft', 'Mojang', '2012');

drop table Enderecos;
drop table Usuarios;
drop table Jogos;
drop table Anuncios;
