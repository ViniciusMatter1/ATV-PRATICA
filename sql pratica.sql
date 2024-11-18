CREATE TABLE cliente(
pk_cliente  int primary key not null auto_increment,
nome_cliente varchar(50),
email_cliente varchar(50),
telefone_cliente varchar(11)
);

CREATE TABLE colaborador(
pk_colaborador int primary key not null auto_increment,
nome_colaborador varchar(50),
email_colaborador varchar(50),
telefone_colaborador varchar(11)
);

CREATE TABLE chamado(
pk_chamado int primary key not null auto_increment,
fk_cliente int not null,
FOREIGN KEY (fk_cliente) REFERENCES cliente(pk_cliente),
fk_colaborador int not null,
FOREIGN KEY (fk_colaborador) REFERENCES colaborador(pk_colaborador),
descricao varchar(500),
criticidade varchar(15),
estatus varchar(20),
data_abertura date
);