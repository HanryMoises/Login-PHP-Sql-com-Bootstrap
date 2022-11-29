create database ex_login;
use ex_login;
create table usuarios(
	id int not null auto_increment primary key,
    nome varchar(50) not null,
    email varchar(50) not null,
    senha varchar (10) not null
);
insert into usuarios (nome,email,senha) values('hanry','hanry@gmail.com','123');
insert into usuarios (nome,email,senha) values('gabriel','gabriel@gmail.com','123')