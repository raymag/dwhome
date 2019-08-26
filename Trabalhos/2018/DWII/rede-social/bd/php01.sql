-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 13-Set-2018 às 08:40
-- Versão do servidor: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php01`
--
CREATE DATABASE IF NOT EXISTS `php01` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `php01`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE IF NOT EXISTS `postagem` (
  `id_postagem` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `texto_postagem` varchar(140) NOT NULL,
  `data_inclusao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_postagem`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id_postagem`, `id_usuario`, `texto_postagem`, `data_inclusao`) VALUES
(1, 2, 'Ola', '2018-08-09 16:10:42'),
(2, 2, 'teste bem sucedido', '2018-08-09 16:12:03'),
(3, 2, 'teste bem sucedido', '2018-08-09 16:28:57'),
(4, 6, 'testando\r\n', '2018-08-09 17:16:01'),
(5, 6, 'qua\r\n', '2018-08-09 17:16:12'),
(6, 6, 'qua\r\n', '2018-08-09 17:16:18'),
(7, 6, 'kkk', '2018-08-09 17:16:25'),
(8, 6, 'kkk', '2018-08-10 14:15:12'),
(9, 6, 'gf', '2018-08-10 14:17:33'),
(10, 6, 'teste07\r\n', '2018-08-10 14:23:41'),
(11, 10, 'kkkkkkkkkkkkkkkkkkkkkkkk', '2018-08-31 15:08:49'),
(12, 10, 'kkkkkkk\r\n', '2018-09-04 16:41:08'),
(15, 10, 'KKKKKKKKKKKK, FOI!', '2018-09-11 17:31:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `usuario`, `email`, `senha`) VALUES
(2, 'Kenleuedumb', 'root@root', '63a9f0ea7bb98050796b649e85481845'),
(6, 'Cuca Beludo', 'sla@sla', 'e3e48b96d966dee1b5cccdbc9d6f6d43'),
(7, 'Paula Tejant', 'paula@paula', '1b207465eac83b5d4b12e335faa0b53a'),
(8, 'carlito', 'cah@com', '122a2a1adf096fe4f93287f9da18f664'),
(9, 'Marta', 'marta@marta', 'a763a66f984948ca463b081bf0f0e6d0'),
(10, 'Carlos Magno', 'm@g', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_seguidores`
--

CREATE TABLE IF NOT EXISTS `usuarios_seguidores` (
  `id_usuario_seguidor` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `seguindo_id_usuario` int(11) NOT NULL,
  `data_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario_seguidor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios_seguidores`
--

INSERT INTO `usuarios_seguidores` (`id_usuario_seguidor`, `id_usuario`, `seguindo_id_usuario`, `data_registro`) VALUES
(3, 10, 10, '2018-09-11 17:17:05'),
(4, 10, 2, '2018-09-12 14:22:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
