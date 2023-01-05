create database expo_desenhos;
use expo_desenhos;
CREATE TABLE `autores` (
    `id_autor` INT NOT NULL AUTO_INCREMENT primary key,
    `nome` VARCHAR(70) NOT NULL);
CREATE TABLE `obras` (
    `id_obra` INT NOT NULL AUTO_INCREMENT primary key,
    `titulo` VARCHAR(255) NOT NULL,
    `descr` text null,
    `id_autor` int not null);
ALTER TABLE `obras` ADD CONSTRAINT `fk_autor` FOREIGN KEY ( `id_autor` ) REFERENCES `autores` ( `id_autor` ) ;