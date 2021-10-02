CREATE DATABASE IF NOT EXISTS pagina;

USE pagina;

CREATE TABLE IF NOT EXISTS laco(
    codigo int not null auto_increment primary key,
    tempo_producao VARCHAR(10),
    valor DECIMAL(7,2),
    nome VARCHAR(300)
);

CREATE TABLE IF NOT EXISTS usuario(
    id int not null auto_increment primary key,
    usuario varchar(50) not null,
    senha char(20) not null
);

insert into usuario (usuario, senha) values ("duda", "1234");