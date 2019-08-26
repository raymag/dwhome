-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Out-2018 às 03:48
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magno_phpbd`
--
CREATE DATABASE IF NOT EXISTS `magno_phpbd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `magno_phpbd`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `cod_adm` int(11) NOT NULL AUTO_INCREMENT,
  `nome_adm` varchar(60) DEFAULT NULL,
  `cpf_adm` varchar(20) DEFAULT NULL,
  `senha_adm` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`cod_adm`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`cod_adm`, `nome_adm`, `cpf_adm`, `senha_adm`) VALUES
(2, 'MagnoADM', '321', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(5, 'Admin', '123', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `matricula` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `cpf` bigint(20) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`matricula`, `nome`, `senha`, `cpf`, `endereco`) VALUES
(1, 'Rito Gomes', '202cb962ac59075b964b07152d234b70', 1, 'slacara'),
(2, 'Vitor', '202cb962ac59075b964b07152d234b70', 2, 'slacara'),
(3, 'Guilherme Alves', 'c00425797de3c98e7b32e814b54a6ec5', 3, 'gui@com'),
(4, 'Carlito', '202cb962ac59075b964b07152d234b70', 4, 'quebrada'),
(5, 'Magno', '741f63d12d767bb3fd2b0251ed839499', 123, 'mag'),
(6, 'Mag', '202cb962ac59075b964b07152d234b70', 5, 'La puta q pariu'),
(7, 'José', '1ff1de774005f8da13f42943881c655f', 6, '24'),
(8, 'José Victório 951', '1c1d4df596d01da60385f0bb17a4a9e0', 7, '951'),
(9, 'Vitória', '202cb962ac59075b964b07152d234b70', 9, 'Lago Ness'),
(10, 'Bruna Marquezine', '202cb962ac59075b964b07152d234b70', 10, 'Rio de Janeiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE IF NOT EXISTS `disciplinas` (
  `cod_disc` varchar(50) NOT NULL,
  `nome_disc` varchar(50) DEFAULT NULL,
  `carga_hor` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_disc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`cod_disc`, `nome_disc`, `carga_hor`) VALUES
('BIO', 'Biologia', 2),
('DWII', 'Desenvolvimento Web II', 4),
('ESP', 'Espanhol', 1),
('ING', 'Inglês', 2),
('MAT', 'Matemática', 4),
('port', 'Português', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula_aluno`
--

CREATE TABLE IF NOT EXISTS `matricula_aluno` (
  `cod_matricula` int(11) NOT NULL AUTO_INCREMENT,
  `cod_aluno` int(11) NOT NULL,
  `cod_disciplina` varchar(50) NOT NULL,
  `data_matricula` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cod_matricula`),
  KEY `cod_aluno` (`cod_aluno`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `matricula_aluno`
--

INSERT INTO `matricula_aluno` (`cod_matricula`, `cod_aluno`, `cod_disciplina`, `data_matricula`) VALUES
(1, 8, 'BIO', '2018-09-06 16:42:23'),
(2, 6, 'MAT', '2018-09-25 09:30:46'),
(3, 8, 'MAT', '2018-09-25 16:06:47'),
(4, 3, 'BIO', '2018-09-25 16:18:05'),
(5, 5, 'ING', '2018-09-27 13:39:23'),
(6, 5, 'PORT', '2018-09-27 13:39:29'),
(7, 6, 'BIO', '2018-09-27 13:39:37'),
(8, 5, 'DWII', '2018-09-27 13:39:45'),
(10, 6, 'DWII', '2018-09-27 13:41:05'),
(12, 6, 'ING', '2018-09-27 13:41:30'),
(13, 6, 'port', '2018-09-27 13:41:36'),
(14, 4, 'BIO', '2018-10-01 21:27:38'),
(15, 10, 'DWII', '2018-10-01 22:23:55'),
(17, 10, 'ESP', '2018-10-01 22:36:41'),
(18, 9, 'esp', '2018-10-01 22:37:01'),
(19, 2, 'esp', '2018-10-01 22:37:44'),
(20, 10, 'ing', '2018-10-01 22:37:53'),
(21, 4, 'port', '2018-10-01 22:38:36'),
(22, 10, 'port', '2018-10-01 22:38:51'),
(23, 4, 'mat', '2018-10-01 22:39:36');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `matricula_aluno`
--
ALTER TABLE `matricula_aluno`
  ADD CONSTRAINT `matricula_aluno_ibfk_1` FOREIGN KEY (`cod_aluno`) REFERENCES `alunos` (`matricula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
