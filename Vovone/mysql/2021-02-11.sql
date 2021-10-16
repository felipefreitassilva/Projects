use vovoneteste;

select * from pedido;
desc pedido;

create table pedido(
	produto tinytext,
    quantidade real,
    mensagem text,
    nome varchar(40),
    preco real,
    telefone varchar(20)
);

alter table pedido
modify column mensagem text default ('-'),
modify column telefone varchar(20) default ('00 0000-00009');

insert into pedido values
('Caponata','1','Msg1','Felipe','30','51 9819-68251'),
('Spatzle (500g)','7','Msg2','Rogerio','350','51 9819-68250'),
('Crepes de pêra com gorgonzola (6un)','3','Msg3','Cristina','150','51 9911-41098'),
('Rocambole de laranjas','5','Msg4','Rodrigo','400',default);