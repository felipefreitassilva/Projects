use vovoneteste;
create table formpedido(
	nome varchar(40)
    ,telefone varchar(20)
    ,mensagem text
) default charset=utf8;
create table tabelapedido(
	produto tinytext
    ,quantidade real
    ,preco real
) default charset=utf8;
show tables;

desc formpedido;
alter table formpedido
modify nome varchar(40) not null;
alter table formpedido
modify telefone varchar(20) not null default '(00) 0000-00009';

desc pedido;
drop table pedido;

desc tabelapedido;
alter table tabelapedido
modify produto tinytext not null
,modify quantidade smallint not null default 1
,modify preco decimal(5,2);



alter table formpedido
rename to cliente;

alter table tabelapedido
rename to produto;



desc cliente;
drop table cliente;

create table cliente(
	idcliente int not null auto_increment
	,nome varchar(40) not null
    ,telefone varchar(20) not null default '(00) 0000-00009'
    ,mensagem text
    ,primary key (idcliente)
) default charset=utf8;

desc produto;
drop table produto;

create table produto(
	idproduto int not null auto_increment
	,produto tinytext not null
    ,quantidade smallint not null default 1
    ,preco decimal(5,2)
    ,primary key (idproduto)
) default charset=utf8;



use vovoneteste;

create table pedido(
	idpedido int not null auto_increment
    ,data datetime
    ,idcliente int
    ,idproduto int
    ,primary key (idpedido)
    ,foreign key (idcliente) references cliente(idcliente)
    ,foreign key (idproduto) references produto(idproduto)
) default charset=utf8;

desc cliente;
desc pedido;
desc produto;

alter table pedido
modify data datetime;

insert into cliente values
(default,'Cláudio',default,'')
,(default,'Felipe','(51) 9819-68251','Sem cebola')
,(default,'Rogerio','(51) 9819-8250','Tem biscoito com chocolate?')
,(default,'Cristina','(51) 9911-41098','Tudo ótimo')
,(default,'Rodrigo',default,'Quanto tu me paga para fazer esse pedido?');
select * from cliente;

insert into produto values
(default,'Quiche Lorraine','1','100')
,(default,'Caponata','2','60')
,(default,'Spekulatius (500g)','6','300')
,(default,'Patê com geléia de pimenta (14cm)','3','210')
,(default,'Goulash','1','55');
select * from produto;produtoproduto

insert into pedido values
(default,'2021-02-12 07:03:10','1','1')
,(default,'2021-01-02 07:03:10','2','2')
,(default,'2020-12-12 07:03:10','3','3')
,(default,'2021-02-11 07:03:10','4','4')
,(default,'2021-01-03 07:03:10','5','5');
select * from pedido;



select p.produto, p.quantidade, c.mensagem, pedido.idcliente from cliente c
join pedido
on c.idcliente = pedido.idcliente
join produto p
on p.idproduto = pedido.idpedido
order by pedido.data;


select count(*) from pedido
where data > '2020-12-31';

select p.produto, p.quantidade, c.observacao, pedido.idcliente from cliente c
join pedido
on c.idcliente = pedido.idcliente
join produto p
on p.idproduto = pedido.idpedido
where data > '2020-12-31'
order by pedido.data;

select telefone from cliente where idcliente = 5;

desc cliente;

alter table cliente
change mensagem observacao text;


----------------------------------------------------;
select c.nome, pr.produto, pr.quantidade, c.observacao, pr.preco from 
cliente c, pedido p,produto pr
where c.idcliente = p.idcliente 
and p.idproduto=pr.idproduto;

SELECT 
    c.nome, sum(pr.quantidade),  sum(preco), data
FROM
    cliente c
   inner join pedido p on p.idcliente = c.idcliente
   inner join produto pr on pr.idproduto=p.idproduto
group by c.nome
order by data
;

select * from produto;
delete from produto where idproduto = 2;

update produto
set preco = 80
where data > '2021-12-02';

select * from pedido;
alter table pedido
add column indiativo enum('V','F');