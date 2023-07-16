-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Ago 01, 2017 as 11:34 PM
-- Versão do Servidor: 5.1.54
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `dados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `descri`
--

CREATE TABLE IF NOT EXISTS `descri` (
  `id_dono` text NOT NULL,
  `valor` text NOT NULL,
  `servi` text NOT NULL,
  `data` text NOT NULL,
  `data_c` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `descri`
--

INSERT INTO `descri` (`id_dono`, `valor`, `servi`, `data`, `data_c`) VALUES
('10', '30.00', 'troca de oleo', '03/06/2017 - 13:25', '20170603132538'),
('7', '80.00', 'bateria', '03/06/2017', '20170603103100'),
('3', '1230,25', 'aaa', '03/06/2017 - 12:42', '20170603124252'),
('3', '50,55', 'troca de oleo', '03/06/2017 - 12:43', '20170603124342'),
('3', '150.55', 'bateria', '03/06/2017 - 12:44', '20170603124420'),
('7', '500.55', 'troca de oleo', '03/06/2017 - 12:50', '20170603125010');

-- --------------------------------------------------------

--
-- Estrutura da tabela `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `test`
--

INSERT INTO `test` (`test`) VALUES
(21354);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(1) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `placa` text NOT NULL,
  `nome` text NOT NULL,
  `km` text NOT NULL,
  `data` text NOT NULL,
  `data_c` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `placa`, `nome`, `km`, `data`, `data_c`) VALUES
(2, 'MGX-1994', 'Diego1', '777777xzc', '28/01/2017', '20170128150530'),
(3, 'JPG-0918', 'Marcos', '1982', '22/05/2017', '20170522150530'),
(10, 'gxr-7584', 'Breno', '100000', '03/06/2017 - 13:24', '20170603132447'),
(7, 'GXZ-9854', 'Renan', '62000', '01/06/2017 - 17:18', '20170601171843');
