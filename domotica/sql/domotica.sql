CREATE DATABASE domotica;

use domotica;

CREATE TABLE usuarios(
    id_usuario int primary key auto_increment,
    nombre varchar(30) not null,
    pass varchar(100) not null,
    rol varchar(10) not null
);

CREATE TABLE arduino(
    id_arduino int primary key auto_increment,
    nombre varchar(30),
    clase varchar(30)
);

CREATE TABLE accede(
    id int primary key auto_increment,
    id_arduino int,
    id_usuario int,
    CONSTRAINT FOREIGN KEY fk_arduino_accede (id_arduino) REFERENCES arduino(id_arduino),
    CONSTRAINT FOREIGN KEY fk_usuario_accede (id_usuario) REFERENCES usuarios(id_usuario)
);

INSERT INTO usuarios VALUES (null, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'ADM');
INSERT INTO usuarios VALUES (null, 'user1', '0a041b9462caa4a31bac3567e0b6e6fd9100787db2ab433d96f6d178cabfce90', 'USR');
INSERT INTO usuarios VALUES (null, 'user2', '530044660947a58cbf6036c0aa2922d9882734e51f7ec22a2640ee9f542ebc82', 'USR');
INSERT INTO usuarios VALUES (null, 'user3', 'b4e8183bc3773e785982918eefcab56eb390b2582a06812739d97d944830293f', 'USR');
INSERT INTO usuarios VALUES (null, 'user4', 'a8d372305113b3e05aee426958f363b2a2d32bd57501b6e295e633cca34ec154', 'USR');

INSERT INTO arduino VALUES (null, 'arduino1','DAM');
INSERT INTO arduino VALUES (null, 'arduino2','DAW');
INSERT INTO arduino VALUES (null, 'arduino3','ASIR');
INSERT INTO arduino VALUES (null, 'arduino4','SMR');