use Felipe_Teste

select * from clientes


begin tran
drop table pedidos
drop table clientes

create table clientes
( 
	idcliente int not null  identity
    ,nomecliente varchar(40) not null
    ,telefone varchar(20) not null
    ,mensagem text,
	 CONSTRAINT [PK_cliente] PRIMARY KEY NONCLUSTERED 
		(
			[idcliente] ASC,
			[telefone] ASC
		)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
  

create table pedidos(
	idpedido int not null identity
	,idcliente int
	,datapedido datetime
	,valortotal decimal(5,2)
	,formapgto varchar(20)
	,CodTabela int
	,primary key (idpedido))

commit

--teste1
select * from pedidos
truncate table pedidos

insert into pedidos (idcliente, datapedido, valortotal, formapgto, CodTabela) values 
	(1, getdate(), 200, 'cartao', 1)
	,(2, 2021-02-11, 45, 'dinheiro', 1)
	
insert into pedidos (idcliente, datapedido, valortotal, formapgto, CodTabela) values 
	(1, getdate(), 50, 'Cartão', 2)
--fimteste1

select * from clientes
select * from pedidos
select * from itens
select * from produtos
select * from tabelaprecoprodutos
select * from tabelaspreco

truncate table itens
truncate table pedidos


insert into pedidos (idcliente, datapedido, valortotal, formapgto, CodTabela) values
	(1, getdate(), 200, 'Cartão', 1)

insert into itens (idpedido, idproduto, iditem, qtd, descricao) values
	(1, 3, 1, 4, 'PateLaranjaM')
	,(1, 2, 2, 3, 'PateLaranjaP')


	--Cliente 2, fazendo outro pedido
insert into pedidos (idcliente, datapedido, valortotal, formapgto, CodTabela) values
	(2, getdate(), 50, 'Dinheiro', 2)

insert into itens (idpedido, idproduto, iditem, qtd, descricao) values
	(2, 6, 399, 1, 'CrepesPera')
	,(2, 7, 0, 9, 'Croquetes')

	--Se o cliente 1 volta para fazer mais um pedido
insert into pedidos (idcliente, datapedido, valortotal, formapgto, CodTabela) values
	(1, getdate(), 75, 'Boleto', 1)

insert into itens (idpedido,  iditem, idproduto, qtd, descricao) values
	(3, 456,7, 6, 'NãoCroquetes')
	,(3, 457,3, 6, 'QuicheAP')

select * from itens
drop table itens
create table itens
( 
	idpedido int not null 
    ,iditem int not null
	,idproduto int
	,qtd int
	,descricao varchar(500)
	,CONSTRAINT [PK_itens] PRIMARY KEY NONCLUSTERED 
		(
			[idpedido] ASC,
			[iditem] ASC
		)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]



select * from clientes where ltrim(rtrim(municipio)) <> ltrim(rtrim('   .   ' ))
 
 SELECT NAME FROM KLIMB2B_CORE..CITY WHERE CODE IN (
 3943,
 1035,
 178)

 truncate table produtos



select 
p.idpedido,  sum(i.qtd*tp.preco) as Total 
from
pedidos p,itens I,tabelaprecoprodutos TP where
p.idpedido =i.idpedido and
p.codtabela = tp.codtabela and
i.idproduto = tp.idproduto --and
--Código da tabela (Padrão/Natal)
--tp.codtabela=1
--------------------
group by p.idpedido



select * from tabelaprecoprodutos
order by codtabela, idproduto

insert into tabelaprecoprodutos (idproduto, preco, codtabela) values
	(13, 260, 1), (13, 312, 2),
	(14, 280, 1), (14, 336, 2), 
	(15, 300, 1), (15, 360, 2) 


	alter table clientes
	alter column cep char(9)

insert into pedidos (idcliente, datapedido, valortotal, formapgto, codtabela) values
	(2, getdate(), (select 
	sum(i.qtd*tp.preco) as Total 
	from
	pedidos p,itens I,tabelaprecoprodutos TP where
	p.idpedido =i.idpedido and
	p.codtabela = tp.codtabela and
	i.idproduto = tp.idproduto and p.idpedido = 1
	group by p.idpedido), 'Cartão', 1)

select * from pedidos