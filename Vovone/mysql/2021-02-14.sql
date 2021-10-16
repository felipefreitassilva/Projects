use Felipe_Teste

select * from clientes


begin tran
drop table clientes

create table clientes(
	idcliente int not null identity
    ,nomecliente varchar(40) not null
    ,telefone varchar(20) not null
    ,mensagem text
    ,primary key(telefone)
)


begin tran
truncate table clientes

alter table clientes
add	idcliente int not null identity
    ,nomecliente varchar(40) not null
    ,telefone varchar(20) not null
    ,mensagem text
    ,primary key(telefone)