create database genera;

create table productos(
    idproducto int primary key auto_increment,
    nombre_producto varchar(30), not null
    precio int not null,
    stock_producto int not null);

insert into productos(idproducto,nombre_producto,precio,stock_producto)
values(1,Ordenador, 1500,45),
(2, 'Tablet', 450, 14);