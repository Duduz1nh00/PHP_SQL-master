-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Tempo de geração: 02/05/2023 às 18:59
-- Versão do servidor: 8.0.33
-- Versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `decoracao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Funcionarios`
--

CREATE TABLE `Funcionarios` (
  `ID_Func` int NOT NULL,
  `Nome` varchar(10) DEFAULT NULL,
  `Sexo` varchar(1) DEFAULT NULL,
  `Data_Nascimento` date DEFAULT NULL,
  `Endereco` varchar(50) DEFAULT NULL,
  `Data_Contratacao` date DEFAULT NULL,
  `Data_Demissao` date DEFAULT NULL,
  `Salario` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Funcionarios`
--
ALTER TABLE `Funcionarios`
  ADD PRIMARY KEY (`ID_Func`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Funcionarios`
--
ALTER TABLE `Funcionarios`
  MODIFY `ID_Func` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
