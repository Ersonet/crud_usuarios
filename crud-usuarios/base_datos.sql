-- base_datos.sql
CREATE DATABASE crud_php;
USE crud_php;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  correo VARCHAR(100),
  telefono VARCHAR(20)
);
