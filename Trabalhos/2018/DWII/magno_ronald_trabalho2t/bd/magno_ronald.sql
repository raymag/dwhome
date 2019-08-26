-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Ago-2018 às 03:01
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magno_ronald`
--
CREATE DATABASE IF NOT EXISTS `magno_ronald` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `magno_ronald`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE IF NOT EXISTS `mensagem` (
  `id_mensagem` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `texto` text,
  `data_envio` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_mensagem`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id_mensagem`, `email`, `texto`, `data_envio`) VALUES
(1, 'user2@teste.com', 'Testando...', '2018-08-16 19:22:36'),
(3, 'user1@teste.com', 'teste1', '2018-08-16 19:35:35'),
(4, 'user2@teste.com', '\'ola\'', '2018-08-16 19:42:18'),
(6, 'user1@teste.com', 'test1', '2018-08-16 21:05:31'),
(7, 'user2@teste.com', 'test1', '2018-08-16 21:05:44'),
(8, 'user1@teste.com', 'apagarei!', '2018-08-16 21:35:52'),
(10, 'user2@teste.com', 'testando', '2018-08-16 21:45:56'),
(22, 'user1@teste.com', 'Oh.. YEAH!!', '2018-08-16 22:22:28'),
(23, 'user1@teste.com', 'kkkkk', '2018-08-17 20:55:41'),
(26, 'karla@teste.com', 'ola?\'\"\"dk,;', '2018-08-17 21:54:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`) VALUES
(1, 'user1', 'user1@teste.com', '24c9e15e52afc47c225b757e7bee1f9d'),
(2, 'user2', 'user2@teste.com', '7e58d63b60197ceb55a1c487989a3720'),
(3, 'user3', 'user3@teste.com', '92877af70a45fd6a2ed7fe81e1236b78'),
(4, 'user4', 'user4@teste.com', '3f02ebe3d7929b091e3d8ccfde2f3bc6'),
(5, 'user5', 'user5@teste.com', '0a791842f52a0acfbb3a783378c066b8'),
(7, 'ana', 'ana@teste.com', '276b6c4692e78d4799c12ada515bc3e4'),
(8, 'beto', 'beto@teste.com', 'aab722da21be7ad07a3b72eede4a9e9a'),
(9, 'caio', 'caio@teste.com', 'c97e2b57a6c44cb28aa98211dad2811f'),
(10, 'maria', 'maria@teste.com', '263bce650e68ab4e23f28263760b9fa5'),
(11, 'karla', 'karla@teste.com', '5fcd162c2418ef549b7b912976468942');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
