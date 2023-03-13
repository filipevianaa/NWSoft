create database nwsoft;

use nwsoft;

create table vendas (
    numero_nota bigint not null primary key,
    tipo_pagamento varchar(20) not null,
    data varchar(10) not null,
    observacao varchar(100)
);

create table produtos_vendidos (
    id int not null auto_increment primary key,
    nome varchar(25) not null,
    quantidade int not null,
    preco_unitario decimal(10,2) not null,
    numero_nota bigint not null
);

## comandos para inserrir dados na tabela de vendas:
insert into vendas (numero_nota, tipo_pagamento, data, observacao) VALUES
(123456, 'À vista','24/03/1997','compra de cursos'),
(987654, 'À vista','04/05/1994','compra de moveis'),
(378762, 'Parcelado','14/09/1997','compra de roupas'),
(741258, 'À vista','01/02/2020','compra de material escolar'),
(963258, 'Parcelado','05/11/2018','compra de comida'),
(201450, 'À vista','25/03/2021','compra de material de construção'),
(202185, 'Parcelado','13/12/2009',''),
(357195, 'À vista','02/06/2022','compra de eletrônicos');

## comandos para inserrir dados na tabela de produtos vendidos:
insert into produtos_vendidos (nome, quantidade, preco_unitario, numero_nota) values
('curso de java',5,100,123456),
('curso de php',10,150,123456),
('cama',2,400,987654),
('sofá',2,150,987654),
('blusa',40,50,378762),
('calça',30,80,378762),
('caderno',10,20,741258),
('lapis',100,2.50,741258),
('arroz',10,8.50,963258),
('feijão',10,10.50,963258),
('cimento',10,120.50,201450),
('tijolo',500,10.50,201450),
('cerâmica',200,20.50,201450),
('colher',20,20.50,202185),
('garfo',20,20.50,202185),
('faca',20,20.50,202185),
('celular',1,2500,357195),
('computador',3,4500,357195);