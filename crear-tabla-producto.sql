create database if not exists tp1;
use tp1;

create table if not exists productos (
    id int auto_increment primary key,
    nombre varchar(100) not null,
    precio decimal(10,2) not null,
    stock int default 0,
    codigo int default 0
);

insert into productos (nombre,precio, stock, codigo) values 
('Levite de pomelo',2000,20,1495),
('Jugo tang de naranja',1000,200,1999),
('Coca Cola 2,25ml',5500,50,1888);
