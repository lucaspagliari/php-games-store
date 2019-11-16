/* Creating tables */
CREATE TABLE Usuario (
	cpf varchar (13) not null,
	nome varchar (50) not null,
	senha varchar (50) not null,
	email varchar (30) not null,
    primary key (cpf)
);

CREATE TABLE Jogo (
	id int auto_increment,
    nome varchar (50) not null,
    valor decimal (8) not null,
    digital bool not null,
    primary key (id)
);


CREATE TABLE Anunciar (
	cadastro int auto_increment,
	cpf varchar (10),
	id varchar (10),
    data datetime,
    primary key (cadastro),
	foreign key (cpf) references Usuario (cpf),
	foreign key (id) references Jogo (id)
);

CREATE TABLE Endereco (
	id int auto_increment,
	rua varchar(30),
	numero varchar(10),
	bairro varchar(30),
	cep varchar(7),
	cpf varchar(13),
    primary key (id),
	foreign key (cpf) references Usuario (CPF)
);
