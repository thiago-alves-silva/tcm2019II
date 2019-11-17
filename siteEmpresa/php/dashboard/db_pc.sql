-- criação do banco de dados db_pc atendendo as normas da lingua portuguesa
create database db_pc
default character set utf8
default collate utf8_general_ci;


-- acessando banco de dados chamado db_pc
use db_pc;

-- criação da tabela cargo
create table tbl_Cargo(
	cd_Cargo  int primary key auto_increment,
    nm_Cargo varchar(80) not null
)default charset utf8;

/* criação da tabela Consultor com chave estrangeira cd_cargo */
create table tbl_Consultor(
	cd_Consultor int primary key auto_increment,
    nm_Consultor varchar(80) not null,
    no_Telefone varchar(14) not null,
    ds_Email varchar(80) not null,
    nm_Usuario varchar(20),
    ds_Senha varchar(8),
    cd_Cargo int not null,
    constraint foreign key(cd_cargo) references tbl_Cargo(cd_cargo)
)default charset utf8;

/* criação da tabela Contrato */
create table tbl_Contrato(
	cd_Contrato int primary key auto_increment,
    nm_Contato varchar(80) not null,
    no_Telefone varchar(14),
    ds_Email varchar(80) not null,
    ds_logradouro varchar(60) not null,
    no_Logradouro varchar(5) not null,
    ds_Complemento varchar(60),
	ds_Bairro varchar(60) not null,
    no_Cep char(9) not null,
    ds_Cidade varchar(60) not null,   
    sg_UF char(2) not null,
    nm_Projeto varchar(80) not null,
    ds_TempoProj varchar(10),
    ds_Projeto varchar(255),
    sg_status bit not null
)default charset utf8;

create table tbl_Atividade(
	cd_atividade int primary key auto_increment,
    nm_tarefa varchar(80) not null,
    cd_Consultor int not null,
    ds_atividade varchar(255) not null,
    dt_inicio date,
    dt_Final date,
    ds_Status enum('A','I'), 
    ds_Obs varchar(255) not null,
    ds_prioridade enum('A','M','B'),
    cd_Contrato int not null,
	constraint foreign key(cd_Consultor) references tbl_Consultor(cd_Consultor),
    constraint foreign key(cd_Contrato) references tbl_Contrato(cd_Contrato)
)default charset utf8;

insert into tbl_Atividade(nm_tarefa,cd_Consultor,ds_atividade,dt_inicio,dt_Final,ds_Status,ds_Obs,ds_prioridade,cd_Contrato)
values('Criação de crud para professores','2','crud para professores','2019-11-10','2019-11-13','A','Professores poderão alterar seus dados no BD','A','1');

    -- inserindo registro para teste tbl_cargo
insert into tbl_Cargo 
	values(default,'Gerente de Projetos');

/*  inserindo registro para teste tbl_consultor */ 
insert into tbl_Consultor 
	values(default,'Yulia Volkova','(11)98585-4596','yuliavolkova@pc.com','admin','1234','1');   
    
    

-- selecionando os dados da tabela consultor
select * from tbl_Consultor;

-- selecionando os dados da tabela cargo
select * from tbl_Cargo;

-- selecionando os dados da tabela consultor
select * from tbl_Contrato;

-- selecionando os dados da tabela consultor
select nm_Contato, sg_status from tbl_Contrato;

-- selecionando os dados da tabela consultor
select * from tbl_Atividade;


create view vw_atividade
as select 
	tbl_Contrato.cd_Contrato,
	tbl_Contrato.nm_projeto,
    tbl_Consultor.cd_consultor,
    tbl_Consultor.nm_consultor,
    tbl_cargo.nm_cargo,
    tbl_atividade.cd_atividade,
    tbl_atividade.nm_tarefa,
    tbl_atividade.dt_inicio,
    tbl_atividade.dt_final,
    tbl_atividade.ds_status,
    tbl_atividade.ds_prioridade,
    tbl_atividade.ds_atividade,
    tbl_atividade.ds_obs
from tbl_atividade inner join tbl_contrato
on tbl_contrato.cd_contrato = tbl_atividade.cd_contrato
inner join tbl_Consultor 
on tbl_Consultor.cd_consultor = tbl_atividade.cd_consultor
inner join tbl_Cargo
on tbl_Cargo.cd_cargo = tbl_consultor.cd_cargo;


select * from vw_atividade;




CREATE USER 'programadorpc'@'localhost' IDENTIFIED WITH mysql_native_password BY '123456';
GRANT ALL PRIVILEGES ON db_pc.* TO 'programadorpc'@'localhost' WITH GRANT OPTION;


