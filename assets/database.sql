create database pipeline;
use pipeline;

create table usuarios (
	id int(9) primary key not null auto_increment,
    nome varchar(255) not null,
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

create table proposta
(
	id_proposta int(9) primary key not null auto_increment,
    id_usuario int(9) not null,
    nomeProjeto varchar(255) not null,
    nome_cliente varchar(255) not null,
    email_cliente varchar(255) not null,
    nome_usuario varchar(255) not null,
    email_usuario varchar(255) not null,
    codigo longtext,
    DMY datetime,
    status_proposta varchar(255)
); 

create table pagina(
	id int(9) auto_increment primary key not null,
    nome varchar(255) not null,
    idUsuario int(9) not null,
    codigo LONGTEXT not null,
    tipo varchar(255),
    FOREIGN KEY (idUsuario) REFERENCES usuarios(id)
);

ALTER TABLE `negocio` ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY ( `idUsuario` ) REFERENCES `usuarios` ( `id` );
ALTER TABLE `proposta` ADD CONSTRAINT `fk_id_usuarioProposta` FOREIGN KEY ( `id_usuario` ) REFERENCES `usuarios` ( `id` );

insert into usuarios (email, senha, nome) values ('email@contato.com', '123', "Nome de usuario");
update usuarios set email = 'email@contato.com' where id = '1';

select * from proposta;
-- update negocio set tipo = 'Contatado' where id = 1;