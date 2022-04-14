-- create database pipeline;
-- use pipeline;

create table usuarios (
	id int(9) primary key not null auto_increment,
	email varchar(255) not null,
    senha varchar(255) not null
);

create table negocio (
	id int(9) primary key not null auto_increment,
    idUsuario int(9) not null,
    emailCliente varchar(255) not null,
    nomeCliente varchar(255) not null,
    nomeProjeto varchar(255) not null,
    valor varchar(255) not null,
    telefone varchar(255) not null,
    dataNegocio varchar(255) not null,
    tipo varchar(255) not null
);

ALTER TABLE `negocio` ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY ( `idUsuario` ) REFERENCES `usuarios` ( `id` );

insert into usuarios (email, senha) values ('email@contato.com', '123');

-- select * from negocio where idUsuario = 1;
-- update negocio set tipo = 'Contatado' where id = 1;