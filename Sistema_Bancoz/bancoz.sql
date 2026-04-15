-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Abr-2026 às 20:42
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bancoz`
--
DROP DATABASE IF EXISTS `bancoz`;
CREATE DATABASE IF NOT EXISTS `bancoz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bancoz`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `login` varchar(70) DEFAULT NULL,
  `Nivel` int(11) DEFAULT NULL,
  `senha` varchar(70) DEFAULT NULL,
  `cod_adm` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`login`, `Nivel`, `senha`, `cod_adm`) VALUES
('admin', 1, '$2y$10$gGOVtjvg1mrZsdf0DYmF7.sjXnmImLsli7ap0ca2enR/jla00HMra', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricante`
--

CREATE TABLE `fabricante` (
  `telefone` varchar(14) DEFAULT NULL,
  `Cidade` varchar(30) DEFAULT NULL,
  `Nome` varchar(30) DEFAULT NULL,
  `cod_fab` varchar(30) NOT NULL,
  `Endereco` varchar(70) DEFAULT NULL,
  `cod_adm` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `descricao` text,
  `valor` decimal(6,2) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `cod_pro` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `foto` blob,
  `cod_fab` varchar(30) DEFAULT NULL,
  `cod_adm` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`cod_adm`);

--
-- Indexes for table `fabricante`
--
ALTER TABLE `fabricante`
  ADD PRIMARY KEY (`cod_fab`),
  ADD KEY `cod_adm` (`cod_adm`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod_pro`),
  ADD KEY `cod_fab` (`cod_fab`),
  ADD KEY `cod_adm` (`cod_adm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
