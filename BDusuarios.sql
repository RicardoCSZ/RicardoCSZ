-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jul-2021 às 01:04
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `usuarios`
--
DROP DATABASE IF EXISTS `usuarios`;
CREATE DATABASE IF NOT EXISTS `usuarios` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `usuarios`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--
-- Criação: 24-Jul-2021 às 20:21
-- Última actualização: 26-Jul-2021 às 22:42
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `login` varchar(150) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONAMENTOS PARA TABELAS `usuarios`:
--

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'teste', 'teste 123', 'asdasdsdsadas'),
(2, 'teste 22', 'hjgjhghj', 'hjgjhgjh'),
(3, 'joão', 'adsasd', 'asddsadsaasd');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata para tabela usuarios
--

--
-- Metadata para o banco de dados usuarios
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
