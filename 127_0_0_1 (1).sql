-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Abr-2026 às 22:18
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
-- Database: `biblioteca`
--
DROP DATABASE IF EXISTS `biblioteca`;
CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `cod_emp` int(11) NOT NULL,
  `cod_usu` int(11) NOT NULL,
  `data_hora` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`cod_emp`, `cod_usu`, `data_hora`) VALUES
(1, 1, '2026-04-08 14:16:00'),
(2, 2, '2026-04-01 08:59:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `cod_it` int(11) NOT NULL,
  `cod_emp` int(11) NOT NULL,
  `cod_liv` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`cod_it`, `cod_emp`, `cod_liv`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `cod_liv` int(11) NOT NULL,
  `autor` varchar(40) DEFAULT NULL,
  `titulo` varchar(60) DEFAULT NULL,
  `editora` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`cod_liv`, `autor`, `titulo`, `editora`, `cidade`, `ano`) VALUES
(1, 'Genésio de Paula', 'Minhas memórias', 'Ática', 'São Paulo', 1999),
(2, 'Larissa Keller', ' A Perfeita', 'Som Livre', 'Ponta Grossa', 2004),
(3, 'Larissa Keller', 'Roubou meu marido', 'Senac', 'Ponta Grossa', 2026);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usu` int(11) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(35) DEFAULT NULL,
  `telefone` bigint(20) DEFAULT NULL,
  `data_nac` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usu`, `nome`, `endereco`, `bairro`, `cidade`, `telefone`, `data_nac`) VALUES
(1, 'Gabriel França', 'Rua Londrina', 'Nova Rússia', 'Ponta Grossa', 42988774455, '1985-01-17'),
(2, 'Maysa Vaz Sukoski', 'Rua Bom Jesus', 'Pinheirinhos', 'Ponta Grossa', 42988341705, '2001-11-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`cod_emp`),
  ADD KEY `cod_usu` (`cod_usu`);

--
-- Indexes for table `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`cod_it`),
  ADD KEY `cod_emp` (`cod_emp`),
  ADD KEY `cod_liv` (`cod_liv`);

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`cod_liv`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usu`);
--
-- Database: `empresa`
--
DROP DATABASE IF EXISTS `empresa`;
CREATE DATABASE IF NOT EXISTS `empresa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `empresa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `cod_fun` int(11) NOT NULL,
  `primeironome` varchar(20) DEFAULT NULL,
  `segundonome` varchar(20) DEFAULT NULL,
  `ultimonome` varchar(20) DEFAULT NULL,
  `cpf` bigint(20) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `fone` bigint(20) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cod_dep` int(11) NOT NULL,
  `funcao` varchar(20) DEFAULT NULL,
  `salario` decimal(8,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`cod_fun`),
  ADD KEY `cod_dep` (`cod_dep`);
--
-- Database: `escola`
--
DROP DATABASE IF EXISTS `escola`;
CREATE DATABASE IF NOT EXISTS `escola` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `escola`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `telefone` bigint(20) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `cod_tur` int(11) NOT NULL,
  `cod_cur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`matricula`, `nome`, `endereco`, `telefone`, `cidade`, `nascimento`, `cod_tur`, `cod_cur`) VALUES
(1, 'Genésio Dagoberto', 'Rua XV, 99', 42999784545, 'Ponta Grossa', '1991-03-17', 1, 2),
(2, 'Gervásia Silva', 'Av. Borato, 1423', 42999856363, 'Castro', '2005-05-05', 1, 2),
(4, 'Clodoaldo Ribeiro', 'Av. Paulo Silva, 323', 4232241656, 'Ponta Grossa', '2010-07-08', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `cod_cur` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `duracao` int(11) DEFAULT NULL,
  `turno` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`cod_cur`, `nome`, `duracao`, `turno`) VALUES
(1, 'Programador de Sistemas', 200, 'M'),
(2, 'Tecnico em Enfermagem', 1000, 'M');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `cod_tur` int(11) NOT NULL,
  `cod_cur` int(11) NOT NULL,
  `sala` int(11) DEFAULT NULL,
  `periodo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`cod_tur`, `cod_cur`, `sala`, `periodo`) VALUES
(1, 2, 33, 1),
(2, 1, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `cod_tur` (`cod_tur`),
  ADD KEY `cod_cur` (`cod_cur`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`cod_cur`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`cod_tur`),
  ADD KEY `cod_cur` (`cod_cur`);
--
-- Database: `estoque`
--
DROP DATABASE IF EXISTS `estoque`;
CREATE DATABASE IF NOT EXISTS `estoque` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `estoque`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricante`
--

CREATE TABLE `fabricante` (
  `cod_fab` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `endereco` varchar(70) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `fone` bigint(20) DEFAULT NULL,
  `cnpj` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fabricante`
--

INSERT INTO `fabricante` (`cod_fab`, `nome`, `endereco`, `cidade`, `fone`, `cnpj`) VALUES
(1, 'Babe-Cola', 'Av. Paulista nº 1300', 'São Paulo', 1132281978, 12345678),
(2, 'Sabia', 'Rua Desembargador Nóbrega, 987', 'Curitiba', 41999775656, 5678945),
(3, 'Coldate', 'Rua Enzo Silva, nº 656', 'Ponta Grossa', 4230254848, 56564578);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cod_pro` int(11) NOT NULL,
  `cod_fab` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `descricao` text,
  `valor` decimal(6,2) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `data_fab` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod_pro`, `cod_fab`, `nome`, `descricao`, `valor`, `quantidade`, `data_fab`) VALUES
(1, 2, 'Linguiça defumada', 'Linguiça Defumada \r\n Sabia de carne suína, 500g', '16.00', 25, '2026-03-30'),
(2, 1, 'Fanca Laranja', 'Refrigerante gaseificado\r\n  sabor artificial laranja, com 30% maçã, 1 litro', '7.50', 30, '2026-03-15'),
(3, 3, 'Enxaguante Bucal', 'Enxaguante Bucal sabor menta\r\n   300ml, antibacteriano, com fluor', '23.50', 10, '2026-02-18'),
(4, 1, 'Babe-Cola', 'Babe-Cola 2 Litros sabor original,\r\n    refrigerante com gás', '12.00', 45, '2026-03-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fabricante`
--
ALTER TABLE `fabricante`
  ADD PRIMARY KEY (`cod_fab`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod_pro`),
  ADD KEY `cod_fab` (`cod_fab`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
