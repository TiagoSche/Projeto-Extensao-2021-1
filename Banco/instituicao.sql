-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Abr-2021 às 03:34
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `comida_casa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `id_ong` int(11) NOT NULL,
  `instituicao_ong` varchar(100) NOT NULL,
  `email_ong` varchar(100) NOT NULL,
  `registro_ong` int(30) NOT NULL,
  `cnpj_ong` int(15) NOT NULL,
  `senha_ong` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`id_ong`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `id_ong` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
