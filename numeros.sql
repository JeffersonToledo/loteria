-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Nov-2021 às 23:51
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
  `id` int(4) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `number1` int(2) DEFAULT NULL,
  `number2` int(2) DEFAULT NULL,
  `number3` int(2) DEFAULT NULL,
  `number4` int(2) DEFAULT NULL,
  `number5` int(2) DEFAULT NULL,
  `number6` int(2) DEFAULT NULL,
  `number7` int(2) DEFAULT NULL,
  `number8` int(2) DEFAULT NULL,
  `number9` int(2) DEFAULT NULL,
  `number10` int(2) DEFAULT NULL,
  `number11` int(2) DEFAULT NULL,
  `number12` int(2) DEFAULT NULL,
  `number13` int(2) DEFAULT NULL,
  `number14` int(2) DEFAULT NULL,
  `number15` int(2) DEFAULT NULL,
  `number16` int(2) DEFAULT NULL,
  `number17` int(2) DEFAULT NULL,
  `number18` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
