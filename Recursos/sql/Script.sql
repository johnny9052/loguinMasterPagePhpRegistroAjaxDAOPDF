Create table Usuario(
usuario varchar(15) primary key,
nombre varchar(50),
password varchar
);


Create table Estudiante(
id SERIAL,
codigo varchar,
nombre varchar(30),
apellido varchar(50),
cedula varchar,
edad integer,
semestre integer,
PRIMARY KEY (id)
);