-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Nov-2021 às 23:34
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loteria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `numeros`
--

DROP TABLE IF EXISTS `numeros`;
CREATE TABLE IF NOT EXISTS `numeros` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) DEFAULT NULL,
  `number1` int(2) DEFAULT NULL,
  `number2` int(2) DEFAULT NULL,
  `number3` int(2) DEFAULT NULL,
  `number4` int(2) DEFAULT NULL,
  `number5` int(2) DEFAULT NULL,
  `number6` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `numeros`
--

INSERT INTO `numeros` (`id`, `nome`, `number1`, `number2`, `number3`, `number4`, `number5`, `number6`) VALUES
(1, 'Helena', 33, 55, 44, 22, 12, 5),
(2, 'Jefferson', 33, 50, 44, 20, 15, 6),
(3, 'Thales', 33, 55, 44, 66, 12, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
