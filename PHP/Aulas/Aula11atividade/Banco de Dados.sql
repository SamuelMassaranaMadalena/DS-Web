CREATE DATABASE floricultura;
USE floricultura;
CREATE TABLE usuarios(id int PRIMARY KEY NOT NULL AUTO_INCREMENT, nomeuser varchar(45), email varchar(100), senha, varchar(20));
TABLE produtos(id int PRIMARY KEY NOT NULL AUTO_INCREMENT, nmprodut varchar(30), preco float(4,2), descricao varchar(500));	
INSERT INTO usuarios(nomeuser, email, senha) VALUES ('Administrador', 'Admin@net.com', '@dm1nistr0');