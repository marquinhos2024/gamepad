CREATE DATABASE usuarios_db;

USE usuarios_db;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (email, senha) 
VALUES ('usuario@exemplo.com', 'senha123');
