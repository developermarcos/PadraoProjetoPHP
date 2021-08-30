-- Cria Database para o arquivo
create database crud_db;
use crud_db;

create table usuarios(
	ID INT,
    UserIdentify VARCHAR(255),
    UserName VARCHAR(255),
    UserPassword VARCHAR(255)
);

alter table usuarios 
add PRIMARY KEY (ID);