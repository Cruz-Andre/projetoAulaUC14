create database projetoAulaUC15;
use projetoAulaUC15;

create table faleConosco (
	idFaleConosco int primary key auto_increment,
    nomeCompletoFC varchar(100) not null,
    estadoFC varchar(19) not null,
    cidadeFC varchar(50) not null,
    emailFC varchar(100) not null,
    celularFC bigint(11) not null,
    modalidadeFC varchar(20) not null,
    assuntoFC varchar(15) not null,
    mensagemFC varchar(500) not null,
    cpfFC varchar(11) unique not null
);

alter table faleConosco modify column assuntoFC varchar(20);

create table meuSenac (
	idMeuSenac int primary key auto_increment,
    nomeCompletoMS varchar(100) not null,
    celularMS bigint(11) not null,
    estadoMS varchar(19) not null,
    cidadeMS varchar(50) not null,
    emailMS varchar(100) not null,
    senhaMS varchar(64) not null,
    cpfMS varchar(11) unique not null,
    autorizaMS boolean
);

select * from faleConosco;
select * from meuSenac;
