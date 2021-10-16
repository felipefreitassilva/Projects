show tables;

drop database vovoneteste;

create database vovoneteste;
use vovoneteste;
create table clientes(
	idcliente int not null auto_increment
    ,nomecliente varchar(40) not null
    ,telefone varchar(20) not null default '(00) 0000-00009'
    ,mensagem text
    ,primary key(idcliente)
) default charset utf8;

create table pedidos(
	idcliente int
    ,foreign key (idcliente) references clientes(idcliente)
    ,idpedido int not null auto_increment
    ,datapedido date
    ,valortotal decimal(5,2)
    ,formapgto enum('cartao','dinheiro','dinheiro')
) default charset utf8;

create table itens(
	idpedido int
    ,foreign key (idpedido) references pedidos(idpedido)
    ,idproduto int
    ,iditem int
    ,qtd integer
    ,desc tinytext
) default charset utf8;

create table produtos(
	idproduto int
    ,foreign key (idproduto) references itens(idproduto)
    ,composicao tinytext
    ,nomeproduto varchar(60)
    ,indativo enum('D','I')
) default charset utf8;

create table precos(
	idproduto int
    ,foreign key (idproduto) references itens(idproduto)
    ,preco decimal(5,2)
) default charset utf8;

desc clientes;
desc pedidos;
desc itens;
desc produtos;
desc precos;

SELECT * FROM
	clientes c
	inner join pedidos o on o.idcliente = c.idcliente
	join produtos pr on pr.idproduto = o.idproduto
group by c.nome
;