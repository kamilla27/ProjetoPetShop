create database if not exists controleAcesso;
use controleAcesso;
create table if not exists acesso(
    loggin varchar(30) not null,
    pass varchar(30) not null,
    primary key(loggin)
);
create table if not exists usuario(
    id int(11),
    cpf BIGINT NOT NULL,
    nome varchar(50) not null,
    sobreNome varchar(50) not null,
    dataNascimento date not null,
    email VARCHAR(100) not NULL,
    fk_loggin VARCHAR(30) NOT NULL,
    primary key(id),
    foreign key (fk_loggin)references acesso(loggin)
);

create table if not exists animal(
    id int(11),
    nome varchar(50) not null,
    idade int(5) not null,
    fk_id int(11) not null,
    especie varchar(60) not null,
    raca varchar(60) not null,
    primary key(id),
    foreign key (fk_id)references usuario(id)
);

create table if not exists passeio(
    id int(11),
    fk_usuario int(11),
    fk_animal int(11),
    dia date not null,
    horario time not null,
    duracao int(8) not null,
    primary key(id),
    foreign key (fk_usuario)references usuario(id),
    foreign key (fk_animal)references animal(id)
);