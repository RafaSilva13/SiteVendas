-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2022 às 04:44
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_carrinho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(2) NOT NULL,
  `nome_completo` text NOT NULL,
  `email` varchar(15) NOT NULL,
  `telefone` varchar(8) NOT NULL,
  `username` varchar(10) NOT NULL,
  `senha` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_completo`, `email`, `telefone`, `username`, `senha`) VALUES
(1, 'José da silva', 'jose@mail.com', '1111-111', 'jose', '1234'),
(2, 'Pedro da silva', 'pedro@mail.com', '2222-222', 'pedro', '4321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_pedidos`
--

CREATE TABLE `itens_pedidos` (
  `id_itens_pedidos` int(5) NOT NULL,
  `id_pedido` int(5) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens_pedidos`
--

INSERT INTO `itens_pedidos` (`id_itens_pedidos`, `id_pedido`, `id_produto`, `quantidade`) VALUES
(1, 50, 215, '2'),
(2, 50, 200, '2'),
(3, 60, 200, '4'),
(4, 65, 220, '1'),
(5, 66, 200, '1'),
(6, 66, 215, '2'),
(7, 67, 220, '2'),
(8, 68, 200, '1'),
(9, 68, 215, '2'),
(10, 69, 220, '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(5) NOT NULL,
  `id_cliente` int(5) NOT NULL,
  `date_time_pedido` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_cliente`, `date_time_pedido`) VALUES
(50, 1, '2022-11-02 16:10:23'),
(60, 1, '2022-11-10 16:18:23'),
(65, 2, '2022-11-18 16:00:23'),
(66, 1, '2022-11-27 23:55:12'),
(67, 1, '2022-11-27 23:56:05'),
(68, 2, '2022-11-27 23:57:58'),
(69, 2, '2022-11-27 23:58:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` varchar(5) NOT NULL,
  `descricao` text NOT NULL,
  `quantidade` varchar(15) NOT NULL,
  `preco` varchar(100) NOT NULL,
  `url_imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `descricao`, `quantidade`, `preco`, `url_imagem`) VALUES
('200', 'Teclado', '10', '50', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQeQtFwBk8tRj6pkv-PLkKiC_y7f8Jb2vbs8MX3QZvN1oiwiG6oynFCqdTvSOKgR9g4h-roOiHtvzNbhYEbd6b9g7SKNrPYG30qpo_uTHyRB4JVKf67eIIl'),
('215', 'Mouse', '20', '20', 'https://a-static.mlcdn.com.br/800x560/mouse-gamer-redragon-predator-rgb-m612-rgb-preto/bunkertech/m612rgb/bc9bfb87de6b169b7458316ac8d1c5fc.jpeg'),
('220', 'Impressora', '5', '500', 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRsO9YfVyReGHVtu8_w1Mmehdpvs4_VOmvjGlO96pim3wzt_Vnh5WjyZxATGvIdf9atherV2PGLHrFswrGMGEvuSs0ZCyi4EjFpm0D41PlLQO8jVW6Fl3nr8Q&usqp=CAE');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `itens_pedidos`
--
ALTER TABLE `itens_pedidos`
  ADD PRIMARY KEY (`id_itens_pedidos`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `itens_pedidos`
--
ALTER TABLE `itens_pedidos`
  MODIFY `id_itens_pedidos` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
