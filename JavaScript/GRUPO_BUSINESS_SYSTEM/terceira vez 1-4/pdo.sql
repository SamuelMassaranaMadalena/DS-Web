-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/04/2025 às 19:42
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pdo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `observacao` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `observacao`) VALUES
(1, 'Samuel', 'samasda@gmail.com', ''),
(2, 'Noreu', 'noreu@gmail', NULL),
(3, 'Samuel', 'samasda@gmail.com', NULL),
(4, 'Noreu', 'noreu@gmail.com', NULL),
(10, 'seila', 'seila@gmail.com', 'asdfghjklç'),
(11, 'seila', 'seila@gmail.com', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `codigo` int(9) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `estoque` int(9) DEFAULT NULL,
  `preco` float(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `codigo`, `nome`, `estoque`, `preco`) VALUES
(2, 1, '13123123', 13123, 100000.00),
(3, 123131, 'MEU', 2147483647, 10000.00),
(4, 1, 'weq', 1, 1000.00),
(5, 91212, '1212', 1212, 100.00),
(6, 8, '12', 12, 10.00),
(7, 12, '129', 2147483647, 1.00),
(8, 12, '12121', 121, 0.10),
(9, 12345, 'viado do 2ano', 1, 1000.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtosvendidos`
--

CREATE TABLE `produtosvendidos` (
  `id` int(11) NOT NULL,
  `idVenda` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `preco` float(9,2) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtosvendidos`
--

INSERT INTO `produtosvendidos` (`id`, `idVenda`, `idProduto`, `preco`, `quantidade`) VALUES
(1, 1, 2, 100000.00, 1),
(2, 2, 3, 10000.00, 1),
(3, 3, 3, 10000.00, 1),
(4, 4, 3, 10000.00, 1),
(5, 4, 5, 100.00, 1),
(6, 5, 2, 100000.00, 2),
(7, 5, 3, 10000.00, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `dataVenda` timestamp NOT NULL DEFAULT current_timestamp(),
  `idCliente` int(11) NOT NULL,
  `idAdiministrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vendas`
--

INSERT INTO `vendas` (`id`, `dataVenda`, `idCliente`, `idAdiministrador`) VALUES
(1, '2025-04-01 15:31:45', 1, 0),
(2, '2025-04-08 14:44:24', 2, 0),
(3, '2025-04-08 14:44:26', 2, 0),
(4, '2025-04-08 14:44:30', 1, 0),
(5, '2025-04-08 15:12:51', 2, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtosvendidos`
--
ALTER TABLE `produtosvendidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkVendas` (`idVenda`),
  ADD KEY `idProdutos` (`idProduto`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCliente` (`idCliente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produtosvendidos`
--
ALTER TABLE `produtosvendidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `produtosvendidos`
--
ALTER TABLE `produtosvendidos`
  ADD CONSTRAINT `fkVendas` FOREIGN KEY (`idVenda`) REFERENCES `vendas` (`id`),
  ADD CONSTRAINT `idProdutos` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`id`);

--
-- Restrições para tabelas `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `idCliente` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
