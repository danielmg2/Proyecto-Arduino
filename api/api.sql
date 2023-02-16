CREATE DATABASE api;

use api;

CREATE TABLE arduino(
    id_arduino int primary key auto_increment,
    nombre varchar(30),
    clase varchar(30)
);

CREATE TABLE sensor(
    id_sensor int primary key auto_increment,
    id_arduino int not null,
    personas int not null,
    fecha datetime not null,
    temperatura float(5,2) not null,
    luminosidad int not null,
    humedad float(5,2) not null,
    CONSTRAINT FOREIGN KEY fk_sensor_arduino (id_arduino) REFERENCES arduino(id_arduino)
);


CREATE TABLE actuador(
    id_actuador int primary key auto_increment,
    id_arduino int not null,
    actuador varchar(30) not null,
    mensaje varchar(100)  not null,
    fecha datetime not null,
CONSTRAINT FOREIGN KEY fk_actuador_arduino (id_arduino) REFERENCES arduino(id_arduino)
);



INSERT INTO arduino VALUES (null, 'arduino1','DAM');
INSERT INTO arduino VALUES (null, 'arduino2','DAW');
INSERT INTO arduino VALUES (null, 'arduino3','ASIR');
INSERT INTO arduino VALUES (null, 'arduino4','SMR');