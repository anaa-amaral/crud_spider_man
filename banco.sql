CREATE DATABASE login_db;
USE login_db;

CREATE TABLE usuarios (
	pk INT AUTO_INCREMENT PRIMARY KEY,
    usarname VARCHAR(120) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO usuarios ( usarname, senha ) VALUES ('admin', '123');
