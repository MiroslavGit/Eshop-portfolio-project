CREATE DATABASE my_eshop;

CREATE TABLE users(
    usersID int(11) PRIMARY KEY AUTO_INCREMENT not null,
    usersName varchar(255) NOT NULL,
    usersEmail varchar(255) NOT NULL,
    usersUid varchar(255) NOT NULL,
    usersPwd varchar(255) NOT NULL
);