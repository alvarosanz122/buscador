CREATE DATABASE buscador;

USE buscador;



CREATE TABLE registros(
id_registro INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(50),
email VARCHAR(50),
genero ENUM('femenino', 'masculino', 'otros')  DEFAULT 'otros'

);


