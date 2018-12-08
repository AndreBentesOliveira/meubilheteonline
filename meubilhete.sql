-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22-Nov-2018 às 02:49
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meubilhete`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartao`
--

CREATE TABLE IF NOT EXISTS `cartao` (
  `idcartao` int(10) NOT NULL AUTO_INCREMENT,
  `codcartao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unidades` int(10) NOT NULL,
  `saldo` float NOT NULL,
  `data-validade` date NOT NULL,
  `data-recarga` datetime NOT NULL,
  PRIMARY KEY (`idcartao`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `cartao`
--

INSERT INTO `cartao` (`idcartao`, `codcartao`, `unidades`, `saldo`, `data-validade`, `data-recarga`) VALUES
(1, '221698745', 10, 10, '2019-12-31', '2018-10-29 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(10) NOT NULL AUTO_INCREMENT,
  `nomecategoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor-passagem` float NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nomecategoria`, `valor-passagem`) VALUES
(1, 'ESTUDANTE', 1),
(2, 'PADRÃO', 3.8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(10) NOT NULL AUTO_INCREMENT,
  `nomecompleto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data-nascimento` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logadouro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codcartao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipocartao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fotouser` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nomecompleto`, `cpf`, `data-nascimento`, `email`, `password`, `logadouro`, `numero`, `bairro`, `cep`, `codcartao`, `tipocartao`, `fotouser`) VALUES
(1, 'MARCELO DOS SANTOS SARAIVA JUNIOR', '037.977.382-18', '1998-10-20', 'marcelo-1950@live.com', '', 'Rua 06 de agosto', '990', '06 de agosto', '69905684', '1', '', ''),
(9, 'Mauricio', '97835692287', '1988-05-25', 'paulo.sampaio88@gmail.com', '1988sampaio', 'Rua Pinheiros', '50', 'Universitário', '699917688', '1', 'ESTUDANTE', 'users/user-id9.jpg'),
(10, 'Marcelo dos Santos Saraiva Junior ', '03797738218', '1998-10-20', 'marcelo-1950@live.com', '99889062', 'rua 06 de agosto', '990', '06 de agosto', '69905684', '123456789', 'ESTUDANTE', ''),
(20, '1', '1', '0001-01-01', '1', '123', '1', '1', '1', '11', '1', '', ''),
(21, 'ANDRE', '1', '1111-11-01', 'ANDRE@', '123', '1', '1', '11', '1', '1', '', ''),
(25, '1', '1', '0001-01-01', '11', 'c4ca4238a0b923820dcc509a6f75849b', '1', '11', '1', '1', '1', '', ''),
(26, '3', '3', '3333-03-03', '33', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '3', '3', '33', '3', '3', '', ''),
(27, '4', '4', '0004-04-04', '4', 'a87ff679a2f3e71d9181a67b7542122c', '44', '44', '4', '4', '44', '', ''),
(28, '8', '8', '0008-08-08', '88', 'c9f0f895fb98ab9159f51fd0297e236d', '8', '8', '8', '8', '88', '', ''),
(29, 'nayele', '00000000', '1995-03-23', 'malluzinha.nascimento@gmail.com', 'a1d34eb2299ccb62256f19c070ed7ef8', 'manuelito', '314', 'vila nova', '00', '1', '', ''),
(31, '4', '4', '0044-04-04', '4', 'a87ff679a2f3e71d9181a67b7542122c', '4', '44', '4', '4', '4', '', ''),
(40, '4', '4', '0004-04-04', '4', 'a87ff679a2f3e71d9181a67b7542122c', '44', '4', '4', '4', '4', '', ''),
(41, 'felipe', '0000000', '8888-10-20', 'j', '202cb962ac59075b964b07152d234b70', '1', '1', '1', '1', '1', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
