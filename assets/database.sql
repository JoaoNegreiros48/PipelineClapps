-- create database pipeline;
use pipeline;	

create table usuarios (
	id int(9) primary key not null auto_increment,
    nome varchar(255) not null,
	email varchar(255) not null,
    senha varchar(255) not null,
    pipeline_menu_1 varchar(255) DEFAULT "Qualificado",
    pipeline_menu_2 varchar(255) DEFAULT "Contatado",
    pipeline_menu_3 varchar(255) DEFAULT "Apresentado",
    pipeline_menu_4 varchar(255) DEFAULT "Proposta feita",
    pipeline_menu_5 varchar(255) DEFAULT "Sob contrato",
    pipeline_menu_6 varchar(255) DEFAULT "Proposta rejeitada",
    agenda varchar(1000)
);

create table subconta (
	id int(9) primary key not null auto_increment,
    id_usuario int(9),
    nome varchar(255) not null,
	email varchar(255) not null,
    senha varchar(255) not null,
    funcao varchar(255),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
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
    tipo varchar(255) not null,
    statusNegocio varchar(255) not null
);

create table projetos(
	id int(9) auto_increment primary key not null,
    nome varchar(255) not null,
    nomeCliente varchar(255) not null,
    emailCliente varchar(255) not null,
    telefone varchar(255) not null,
    prazo varchar(255) not null,
    valor varchar(255) not null,
    responsavel varchar(255) not null,
    descricao varchar(255) not null,
    idUsuario int(9) not null,
    status varchar(255) not null,
    FOREIGN KEY (idUsuario) REFERENCES usuarios(id)
);

create table observacao (
	id int(9) primary key not null auto_increment,
    id_negocio int(9) not null,
    observacao varchar(255),
    criacao date,
	FOREIGN KEY (id_negocio) REFERENCES negocio(id)
);

create table atividade (
	id int(9) primary key not null auto_increment,
    id_negocio int(9) not null,
    descricao varchar(255),
    dataAtividade date,
    responsavel varchar(255),
    status varchar(255),
	FOREIGN KEY (id_negocio) REFERENCES negocio(id)
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

update usuarios set agenda = '' where id = '1';

select * from negocio; 
select * from usuarios;