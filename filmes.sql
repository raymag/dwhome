-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 17-Abr-2018 às 09:35
-- Versão do servidor: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(60) DEFAULT NULL,
  `duracao` int(11) DEFAULT NULL,
  `nota` decimal(3,2) DEFAULT NULL,
  `ano` year(4) DEFAULT NULL,
  `diretor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `duracao`, `nota`, `ano`, `diretor`) VALUES
(1, 'Psicose', 109, '8.60', 1960, 'Alfred Hitchcock'),
(2, 'O Satânico Dr. No', 110, '7.30', 1962, 'Terence Young'),
(3, 'A Pantera Cor-de-Rosa', 115, '7.10', 1963, 'Blake Edwards'),
(4, 'O Desprezo', 103, '7.60', 1963, 'Jean-Luc Godard'),
(5, 'Dr. Fantástico', 95, '8.50', 1964, 'Stanley Kubrick'),
(6, 'Julieta dos Espíritos', 137, '7.40', 1965, 'Federico Fellini'),
(7, 'Por uns Dólares a Mais', 132, '8.30', 1965, 'Sergio Leone'),
(8, 'Repulsa ao Sexo', 105, '7.80', 1965, 'Roman Polanski'),
(9, 'Blow-Up - Depois Daquele Beijo', 111, '7.60', 1966, 'Michelangelo Antonioni'),
(10, 'Quando Duas Mulheres Pecam', 85, '8.10', 1966, 'Ingmar Bergman'),
(11, 'Três Homens em Conflito', 161, '9.00', 1966, 'Sergio Leone'),
(12, 'O Samurai', 105, '8.10', 1967, 'Jean-Pierre Melville'),
(13, 'A Bela da Tarde', 101, '7.70', 1967, 'Luis Bunuel'),
(14, 'A Primeira Noite de um Homem', 106, '8.10', 1967, 'Mike Nichols'),
(15, 'À Queima-Roupa', 92, '7.40', 1967, 'John Boorman'),
(16, 'Não Faça Onda', 97, '5.90', 1967, 'Alexander Mackendrick'),
(17, 'A Sangue Frio', 134, '8.00', 1967, 'Richard Brooks'),
(18, 'A Dança dos Vampiros', 108, '7.10', 1967, 'Roman Polanski'),
(19, 'A Noite dos Mortos-Vivos', 96, '7.90', 1968, 'George A. Romero'),
(20, 'O Bebê de Rosemary', 136, '8.00', 1968, 'Roman Polanski'),
(21, '2001 - Uma Odisséia no Espaço', 160, '8.30', 1968, 'Stanley Kubrick'),
(22, 'Era uma Vez no Oeste', 175, '8.70', 1968, 'Sergio Leone'),
(23, 'Se...', 111, '7.60', 1968, 'Lindsay Anderson'),
(24, 'Sem Destino', 95, '7.30', 1969, 'Dennis Hopper'),
(25, 'A Besta Deve Morrer', 110, '7.70', 1969, 'Claude Chabrol'),
(26, '007 - A Serviço Secreto de Sua Majestade', 142, '6.80', 1969, 'Peter Hunt'),
(27, 'Meu Ódio Será Sua Herança', 145, '8.00', 1969, 'Sam Peckinpah'),
(28, 'Cega Obsessão', 86, '7.10', 1969, 'Yasuzô Masumura'),
(29, 'Perdidos na Noite', 113, '7.90', 1969, 'John Schlesinger'),
(30, 'Zabriskie Point', 110, '6.90', 1970, 'Michelangelo Antonioni'),
(31, 'Corrida Sem Fim', 102, '7.20', 1971, 'Monte Hellman'),
(32, 'A Clockwork Orange', 136, '8.40', 1971, 'Stanley Kubrick'),
(33, 'Sob o Domínio do Medo', 118, '7.60', 1971, 'Sam Peckinpah'),
(34, 'Amargo Pesadelo', 110, '7.80', 1972, 'John Boorman'),
(35, 'Solaris', 167, '8.00', 1972, 'Andrei Tarkovsky'),
(36, 'A Comilança', 130, '7.10', 1973, 'Marco Ferreri'),
(37, 'O Dorminhoco', 89, '7.20', 1973, 'Woody Allen'),
(38, 'Pat Garrett & Billy the Kid', 122, '7.30', 1973, 'Sam Peckinpah'),
(39, 'Louca Paixão', 108, '7.10', 1973, 'Paul Verhoeven'),
(40, 'O Massacre da Serra Elétrica', 83, '7.50', 1974, 'Tobe Hooper'),
(41, 'O Poderoso Chefão II', 200, '9.00', 1974, 'Francis Ford Coppola'),
(42, 'Prelúdio Para Matar', 126, '7.60', 1975, 'Dario Argento'),
(43, 'Tubarão', 124, '8.10', 1975, 'Steven Spielberg'),
(44, 'Taxi Driver', 113, '8.40', 1976, 'Martin Scorsese'),
(45, 'O Inquilino', 126, '7.70', 1976, 'Roman Polanski'),
(46, 'Fuga no Século 23', 119, '6.80', 1976, 'Michael Anderson'),
(47, 'O Homem Que Caiu na Terra', 139, '6.60', 1976, 'Nicolas Roeg'),
(48, 'Assassinato por Morte', 94, '7.30', 1976, 'Robert Moore'),
(49, '007 - O Espião Que Me Amava', 125, '7.00', 1977, 'Lewis Gilbert'),
(50, 'Suspiria', 98, '7.40', 1977, 'Dario Argento'),
(51, 'Geração Proteus', 94, '6.30', 1977, 'Donald Cammell'),
(52, 'Guerra nas Estrelas', 121, '8.70', 1977, 'George Lucas'),
(53, 'Zombie - O Despertar dos Mortos', 127, '8.00', 1978, 'George A. Romero'),
(54, 'Stalker', 163, '8.00', 1979, 'Andrei Tarkovsky'),
(55, 'I... comme Icare', 120, '7.80', 1979, 'Henri Verneuil'),
(56, 'Apocalypse Now', 153, '8.50', 1979, 'Francis Ford Coppola'),
(57, 'A Vida de Brian', 94, '8.10', 1979, 'Terry Jones'),
(58, 'O Iluminado', 144, '8.50', 1980, 'Stanley Kubrick'),
(59, 'Star Wars: Episódio V - O Império Contra-Ataca', 124, '8.80', 1980, 'Irvin Kershner'),
(60, 'The Ninth Configuration', 118, '7.10', 1980, 'William Peter Blatty'),
(61, 'Lobos', 115, '6.20', 1981, 'Michael Wadleigh'),
(62, 'Excalibur', 140, '7.30', 1981, 'John Boorman'),
(63, 'Mad Max 2: A Caçada Continua', 95, '7.60', 1981, 'George Miller'),
(64, 'Os Fantasmas do Chapeleiro', 120, '7.00', 1982, 'Claude Chabrol'),
(65, 'Blade Runner -  o Caçador de Andróides', 117, '8.20', 1982, 'Ridley Scott'),
(66, 'Koyaanisqatsi - Uma Vida Fora de Equilíbrio', 86, '8.10', 1982, 'Godfrey Reggio'),
(67, 'Fome de Viver', 97, '6.40', 1983, 'Tony Scott'),
(68, 'Nausicaa - A Princesa do Vale dos Ventos', 117, '8.00', 1984, 'Hayao Miyazaki'),
(69, 'O Exterminador do Futuro', 107, '8.10', 1984, 'James Cameron'),
(70, 'A Companhia dos Lobos', 95, '6.60', 1984, 'Neil Jordan'),
(71, 'A Lenda', 94, '6.20', 1985, 'Ridley Scott'),
(72, 'Brazil: O Filme', 132, '7.90', 1985, 'Terry Gilliam'),
(73, 'Retrato de um Assassino', 83, '7.00', 1986, 'John McNaughton'),
(74, 'Coração Satânico', 113, '7.30', 1987, 'Alan Parker'),
(75, 'Tras el cristal', 110, '6.80', 1987, 'Agustín Villaronga'),
(76, 'Arizona Nunca Mais', 94, '7.40', 1987, 'Joel Coen'),
(77, 'Duro de Matar', 131, '8.30', 1988, 'John McTiernan'),
(78, 'The Killer - O Matador', 111, '7.90', 1989, 'John Woo'),
(79, 'Santa sangre', 123, '7.50', 1989, 'Alejandro Jodorowsky'),
(80, 'Alucinações do Passado', 113, '7.50', 1990, 'Adrian Lyne'),
(81, 'Bala na Cabeça', 136, '7.50', 1990, 'John Woo'),
(82, 'Delicatessen', 99, '7.70', 1991, 'Marc Caro'),
(83, 'Barton Fink - Delírios de Hollywood', 116, '7.70', 1991, 'Joel Coen'),
(84, 'Cães de Aluguel', 99, '8.40', 1992, 'Quentin Tarantino'),
(85, 'Amor à Queima Roupa', 120, '7.90', 1993, 'Tony Scott'),
(86, 'O Estranho Mundo de Jack', 76, '8.00', 1993, 'Henry Selick'),
(87, 'Pulp Fiction: Tempo de Violência', 154, '9.00', 1994, 'Quentin Tarantino'),
(88, 'Assassinos por Natureza', 118, '7.20', 1994, 'Oliver Stone'),
(89, 'Nightwatch - Perigo na Noite', 107, '7.30', 1994, 'Ole Bornedal'),
(90, 'Na Roda da Fortuna', 111, '7.30', 1994, 'Joel Coen'),
(91, 'Os 12 Macacos', 129, '8.10', 1995, 'Terry Gilliam'),
(92, 'O Combate - Lágrimas do Guerreiro', 102, '6.30', 1995, 'Christophe Gans'),
(93, 'Tokyo Fist', 87, '7.10', 1995, 'Shin\'ya Tsukamoto'),
(94, 'Homem Morto', 121, '7.60', 1995, 'Jim Jarmusch'),
(95, 'Morte ao Vivo', 125, '7.40', 1996, 'Alejandro Amenábar'),
(96, 'Jackie Brown', 154, '7.50', 1997, 'Quentin Tarantino'),
(97, 'O Sexto Sentido', 107, '8.20', 1999, 'M. Night Shyamalan'),
(98, 'Quero Ser John Malkovich', 112, '7.80', 1999, 'Spike Jonze');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
