-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 08-Nov-2019 às 19:33
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`cod`, `nome`, `turma`, `txt`, `horario`) VALUES
(1, 'gil da esfiha', '1ÂºA MÃ©dio', 'vou pegar o galerito!', '17:58'),
(2, 'galerito', '2ÂºB MÃ©dio', 'vem me pegar, Gil!!!', '19:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_consultor`
--

DROP TABLE IF EXISTS `tbl_consultor`;
CREATE TABLE IF NOT EXISTS `tbl_consultor` (
  `cd_Consultor` int(11) NOT NULL AUTO_INCREMENT,
  `nm_Consultor` varchar(80) NOT NULL,
  `no_Telefone` varchar(14) NOT NULL,
  `ds_Email` varchar(80) NOT NULL,
  `nm_Usuario` varchar(20) NOT NULL,
  `ds_Senha` varchar(8) NOT NULL,
  `nm_cargo` varchar(50) NOT NULL,
  PRIMARY KEY (`cd_Consultor`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_consultor`
--

INSERT INTO `tbl_consultor` (`cd_Consultor`, `nm_Consultor`, `no_Telefone`, `ds_Email`, `nm_Usuario`, `ds_Senha`, `nm_cargo`) VALUES
(1, 'administrador', '(11)98585-4596', 'admin@gmail.com', 'admin', '1234', ''),
(2, 'teste', '123', 'hthth', 'th', '12123', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_contrato`
--

DROP TABLE IF EXISTS `tbl_contrato`;
CREATE TABLE IF NOT EXISTS `tbl_contrato` (
  `cd_Contrato` int(11) NOT NULL AUTO_INCREMENT,
  `nm_Contato` varchar(80) NOT NULL,
  `no_Telefone` varchar(14) DEFAULT NULL,
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
  `ds_Projeto` varchar(20) DEFAULT NULL,
  `sg_status` bit(1) NOT NULL,
  PRIMARY KEY (`cd_Contrato`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(15) NOT NULL,
  `sobrenome` varchar(35) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` longblob,
  PRIMARY KEY (`id`,`login`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `login`, `senha`, `email`, `foto`) VALUES
(1, 'Thiago', 'Alves da Silva', 'thiago', '202cb962ac59075b964b07152d234b70', 'thiago@hotmail.com', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
