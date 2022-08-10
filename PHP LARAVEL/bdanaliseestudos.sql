create database bdanaliseestudos;
use bdanaliseestudos;

CREATE TABLE usuarios(
    id int AUTO_INCREMENT,
    nome varchar(50) NOT NULL,
    data_nascimento varchar(10) NOT NULL,
    senha varchar(50) NOT NULL,
    email varchar(255) NOT NULL,
    arquivo varchar(255) NOT NULL,
    PRIMARY KEY (id)
);