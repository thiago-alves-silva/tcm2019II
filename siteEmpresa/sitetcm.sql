-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: 25-Nov-2019 às 03:09
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitetcm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 NOT NULL,
  `turma` varchar(20) CHARACTER SET utf8 NOT NULL,
  `txt` varchar(250) CHARACTER SET utf8 NOT NULL,
  `horario` varchar(5) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`cod`, `nome`, `turma`, `txt`, `horario`) VALUES
(1, 'gil da esfiha', '1ÂºA MÃ©dio', 'vou pegar o galerito!', '17:58'),
(2, 'galerito', '2ÂºB MÃ©dio', 'vem me pegar, Gil!!!', '19:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_atividade`
--

DROP TABLE IF EXISTS `tbl_atividade`;
CREATE TABLE IF NOT EXISTS `tbl_atividade` (
  `cd_atividade` int(11) NOT NULL AUTO_INCREMENT,
  `nm_tarefa` varchar(80) NOT NULL,
  `cd_Consultor` int(11) NOT NULL,
  `ds_atividade` varchar(255) NOT NULL,
  `dt_inicio` date DEFAULT NULL,
  `dt_Final` date DEFAULT NULL,
  `ds_Status` enum('A','I') DEFAULT NULL,
  `ds_Obs` varchar(255) NOT NULL,
  `ds_prioridade` enum('A','M','B') DEFAULT NULL,
  `cd_Contrato` int(11) NOT NULL,
  PRIMARY KEY (`cd_atividade`),
  KEY `cd_Consultor` (`cd_Consultor`),
  KEY `cd_Contrato` (`cd_Contrato`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_atividade`
--

INSERT INTO `tbl_atividade` (`cd_atividade`, `nm_tarefa`, `cd_Consultor`, `ds_atividade`, `dt_inicio`, `dt_Final`, `ds_Status`, `ds_Obs`, `ds_prioridade`, `cd_Contrato`) VALUES
(2, 'Carregar cabos', 10, '', '2019-11-25', '2019-12-02', 'A', '', 'M', 1),
(3, 'Ajudar o Samuel a carregar cabos', 7, '', '2019-11-25', '2019-12-02', 'A', '', 'M', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cargo`
--

DROP TABLE IF EXISTS `tbl_cargo`;
CREATE TABLE IF NOT EXISTS `tbl_cargo` (
  `cd_Cargo` int(11) NOT NULL AUTO_INCREMENT,
  `nm_Cargo` varchar(80) NOT NULL,
  PRIMARY KEY (`cd_Cargo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_cargo`
--

INSERT INTO `tbl_cargo` (`cd_Cargo`, `nm_Cargo`) VALUES
(1, 'Analista de Banco de Dados'),
(2, 'Analista de Sistemas'),
(3, 'Desenvolvedor Back-end'),
(4, 'Desenvolvedor Front-end'),
(5, 'Desenvolvedor Mobile'),
(6, 'Infraestrutura');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_consultor`
--

DROP TABLE IF EXISTS `tbl_consultor`;
CREATE TABLE IF NOT EXISTS `tbl_consultor` (
  `cd_Consultor` int(11) NOT NULL AUTO_INCREMENT,
  `nm_Consultor` varchar(80) NOT NULL,
  `no_Telefone` varchar(15) NOT NULL,
  `ds_Email` varchar(80) NOT NULL,
  `nm_Usuario` varchar(20) NOT NULL,
  `ds_Senha` varchar(8) NOT NULL,
  `nm_cargo` varchar(50) NOT NULL,
  `cd_Cargo` int(11) NOT NULL,
  PRIMARY KEY (`cd_Consultor`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_consultor`
--

INSERT INTO `tbl_consultor` (`cd_Consultor`, `nm_Consultor`, `no_Telefone`, `ds_Email`, `nm_Usuario`, `ds_Senha`, `nm_cargo`, `cd_Cargo`) VALUES
(7, 'Julio Duvique', '(11) 97018-6861', 'julio.duvique@hotmail.com', 'julio', '123', 'Anal.Banco de Dados', 1),
(10, 'Samuel', '(11) 95380-9255', 'samuel@hotmail.com', 'samuel', '123', 'Desenvolvedor Mobile', 5),
(11, 'Thiago', '(11) 95760-4835', 'thiago@hotmail.com', 'thiago', '123', 'Desenvolvedor Back-end', 3),
(12, 'Giovanna', '(11) 96865-6989', 'giovanna@gmail.com', 'giovanna', '123', 'Analista de Sistemas', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_contrato`
--

DROP TABLE IF EXISTS `tbl_contrato`;
CREATE TABLE IF NOT EXISTS `tbl_contrato` (
  `cd_Contrato` int(11) NOT NULL AUTO_INCREMENT,
  `nm_Contato` varchar(80) NOT NULL,
  `no_Telefone` varchar(15) DEFAULT NULL,
  `ds_Email` varchar(80) NOT NULL,
  `ds_logradouro` varchar(60) NOT NULL,
  `no_Logradouro` varchar(5) NOT NULL,
  `ds_Complemento` varchar(60) DEFAULT NULL,
  `ds_Bairro` varchar(60) NOT NULL,
  `no_Cep` char(9) NOT NULL,
  `ds_Cidade` varchar(60) NOT NULL,
  `sg_UF` char(2) NOT NULL,
  `nm_Projeto` varchar(80) NOT NULL,
  `ds_TempoProj` varchar(10) DEFAULT NULL,
  `ds_Projeto` varchar(100) DEFAULT NULL,
  `sg_status` bit(1) NOT NULL,
  PRIMARY KEY (`cd_Contrato`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_contrato`
--

INSERT INTO `tbl_contrato` (`cd_Contrato`, `nm_Contato`, `no_Telefone`, `ds_Email`, `ds_logradouro`, `no_Logradouro`, `ds_Complemento`, `ds_Bairro`, `no_Cep`, `ds_Cidade`, `sg_UF`, `nm_Projeto`, `ds_TempoProj`, `ds_Projeto`, `sg_status`) VALUES
(1, 'Dagoberto', '(11) 95764-8353', 'dagoberto@hotmail.com', 'Rua GuaipÃ¡', '30', ' ', 'Vila Leopoldina', '05020-000', 'SÃ£o Paulo', 'SP', 'CAT6', '1 mÃªs', 'Instalar rede CAT6 na ETEC Professor Basilides de Godoy', b'0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` longblob,
  PRIMARY KEY (`id`,`login`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`, `email`, `foto`) VALUES
(1, 'Thiago', 'thiago', '202cb962ac59075b964b07152d234b70', 'thiago@hotmail.com', NULL),
(4, 'Julio Duvique', 'julio', '202cb962ac59075b964b07152d234b70', 'julio.duvique@hotmail.com', NULL),
(10, 'Giovanna', 'giovanna', '202cb962ac59075b964b07152d234b70', 'giovanna@gmail.com', NULL),
(9, 'Samuel', 'samuel', '202cb962ac59075b964b07152d234b70', 'samuel@hotmail.com', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_atividade`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_atividade`;
CREATE TABLE IF NOT EXISTS `vw_atividade` (
`cd_Contrato` int(11)
,`nm_projeto` varchar(80)
,`cd_consultor` int(11)
,`nm_consultor` varchar(80)
,`nm_cargo` varchar(80)
,`cd_atividade` int(11)
,`nm_tarefa` varchar(80)
,`dt_inicio` date
,`dt_final` date
,`ds_status` enum('A','I')
,`ds_prioridade` enum('A','M','B')
,`ds_atividade` varchar(255)
,`ds_obs` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_atividade`
--
DROP TABLE IF EXISTS `vw_atividade`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_atividade`  AS  select `tbl_contrato`.`cd_Contrato` AS `cd_Contrato`,`tbl_contrato`.`nm_Projeto` AS `nm_projeto`,`tbl_consultor`.`cd_Consultor` AS `cd_consultor`,`tbl_consultor`.`nm_Consultor` AS `nm_consultor`,`tbl_cargo`.`nm_Cargo` AS `nm_cargo`,`tbl_atividade`.`cd_atividade` AS `cd_atividade`,`tbl_atividade`.`nm_tarefa` AS `nm_tarefa`,`tbl_atividade`.`dt_inicio` AS `dt_inicio`,`tbl_atividade`.`dt_Final` AS `dt_final`,`tbl_atividade`.`ds_Status` AS `ds_status`,`tbl_atividade`.`ds_prioridade` AS `ds_prioridade`,`tbl_atividade`.`ds_atividade` AS `ds_atividade`,`tbl_atividade`.`ds_Obs` AS `ds_obs` from (((`tbl_atividade` join `tbl_contrato` on((`tbl_contrato`.`cd_Contrato` = `tbl_atividade`.`cd_Contrato`))) join `tbl_consultor` on((`tbl_consultor`.`cd_Consultor` = `tbl_atividade`.`cd_Consultor`))) join `tbl_cargo` on((`tbl_cargo`.`cd_Cargo` = `tbl_consultor`.`cd_Cargo`))) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
