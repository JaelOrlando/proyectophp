--Borra la base de datos
drop database prueba;
--Crea la base de datos
create database prueba;
--Usar la base de datos
use prueba;

--Tabla de Ciego
create table armas(
    arma_id int not null auto_increment primary key,
    nombre_arma varchar(64) not null,
    daño int not null,
    color varchar(64),
    peso float not null,
    imagen varchar(64) not null
);

insert into armas (nombre_arma, daño, color, peso, imagen) VALUES ('M4', 25, 'Roja', 10.4, 'm4.jpg');
insert into armas (nombre_arma, daño, color, peso, imagen) VALUES ('SCAR', 20, 'Bronce', 10.4, 'scar.jpg');
insert into armas (nombre_arma, daño, color, peso, imagen) VALUES ('M762', 23, 'Gris', 10.4, 'm762.jpg');
insert into armas (nombre_arma, daño, color, peso, imagen) VALUES ('Mosin', 70, 'Cafe', 10.4, 'mosin.jpg');
insert into armas (nombre_arma, daño, color, peso, imagen) VALUES ('KAR-98', 75, 'Cafe', 10.4, 'kar.jpg');

--Tabla de NULL uwu:3
create table libros(
    libro_id int not null auto_increment primary key,
    titulo varchar(32) not null,
    autor varchar(32) not null,
    genero varchar(32),
    fecha varchar(32),
    precio float not null,
    imagen varchar(64) not null
);

insert into libros (titulo,autor,genero,fecha,precio,imagen) VALUES
('El guardian entre el centeno','J. D. Salinger','Novela Realista','1951-07-23',150.35,'portada-egeec'),
('La fortaleza digital','Dawn Brown','Misterio','1998-07-23',289.99,'portada-lfd'),
('Snootgirl','Bryan OMalley','Novela grafica','2020-07-23',239.75,'portada-sg');

--Tabla DMWoodpecker
create table vehiculos(
    vehiculo_id int not null auto_increment primary key,
    nombre_vehiculo varchar(64) not null,
    marca varchar(64) not null,
    hp int not null,
    imagen varchar(64) not null
);

insert into vehiculos (nombre_vehiculo, marca, hp, imagen) VALUES ('El Aplasta Mancos', 'Jeep', 750,'APLM.jpg');
insert into vehiculos (nombre_vehiculo, marca, hp, imagen) VALUES ('El Todas Mias', 'Tsuru', 2000,'NENE69V.jpg');
insert into vehiculos (nombre_vehiculo, marca, hp, imagen) VALUES ('La Mamalona', 'Dodge', 500,'CartelNG.jpg');



--Tabla de Gauss
create table componentes(
    componentes_id int not null auto_increment primary key,
    nombre varchar(64) null,
    precio int not null,
    marca varchar(64) not null,
    imagen varchar(64) not null
);

insert into componentes (nombre, precio, marca, imagen) VALUES ('Procesador', 5000 , 'INTEL' , 'intel.jpg');
insert into componentes (nombre, precio, marca, imagen) VALUES ('Memoria RAM', 2000 , 'HYPER X' , 'hyperx.jpg');
insert into componentes (nombre, precio, marca, imagen) VALUES ('Tarjeta Madre', 7000 , 'ASUS' , 'asusmother.jpg');
insert into componentes (nombre, precio, marca, imagen) VALUES ('Tarjeta de video', 25000 , 'NVIDIA' , 'nvidia.jpg');
insert into componentes (nombre, precio, marca, imagen) VALUES ('Disco duro solido', 4000 , 'ADATA' , 'adatassd.jpg');




--Tabla Duende69
create table alumnos(
    matricula_id int not null auto_increment primary key,
    nombre varchar(64) null,
    apellido_paterno varchar(64) null,
    apellido_materno varchar(64) null,
    ciudad varchar(64) null,
    imagen varchar(64) not null
);

insert into alumnos(matricula_id, nombre, apellido_paterno,apellido_materno, ciudad,imagen)VALUES ('201618334','Ciego', 'Pubg', 'Conquistador', 'Teziu', 'gaus.png');