CREATE DATABASE gamerFriends;

USE gamerFriends;

CREATE TABLE registrar(
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(25),
    senha VARCHAR(25),
    email VARCHAR(25) UNIQUE
);