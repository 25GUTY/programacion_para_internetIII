CREATE DATABASE soporte_tickets;
USE soporte_tickets;

/*Tabla usuarios*/

CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol ENUM('usuario','tecnico') NOT NULL
);

/*Tabla tikets*/

CREATE TABLE tickets(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,

    titulo VARCHAR(150) NOT NULL,
    descripcion TEXT NOT NULL,
    departamento VARCHAR(100) NOT NULL,

    prioridad ENUM('Baja','Media','Alta') NOT NULL,

    estado ENUM('Pendiente','En Proceso','Resuelto')
    DEFAULT 'Pendiente',

    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY(id_usuario)
    REFERENCES usuarios(id)
);

/*usuarios de pruebas*/

INSERT INTO usuarios(nombre,email,password,rol)
VALUES
(
'admin',
'admin@ucenm.com',
MD5('123456'),
'tecnico'
),

(
'Joel',
'joel@ucenm.com',
MD5('123456'),
'usuario'
);