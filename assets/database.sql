create database pipeline;
use pipeline;

create table usuarios (
	id int(9) primary key not null auto_increment,
	email varchar(255) not null,
    senha varchar(255) not null
);

insert into usuarios (email, senha) values ('email@contato.com', '123');