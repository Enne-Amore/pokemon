-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 19/11/2023 às 20:19
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pokemon`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pokemon_geral`
--

CREATE TABLE `pokemon_geral` (
  `id_pokemon` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `est_evolutivo` int(1) NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `vida` int(3) NOT NULL,
  `ataque` int(3) NOT NULL,
  `defesa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pokemon_geral`
--

INSERT INTO `pokemon_geral` (`id_pokemon`, `nome`, `est_evolutivo`, `peso`, `altura`, `vida`, `ataque`, `defesa`) VALUES
(1, 'bulbasaur', 1, 6.9, 0.7, 45, 49, 49),
(2, 'ivysaur', 2, 13, 1, 60, 63, 62),
(3, 'venusaur', 3, 100, 2, 80, 82, 83),
(4, 'charmander', 1, 8.5, 0.6, 39, 52, 43),
(5, 'charmeleon', 2, 19, 1.1, 58, 64, 58),
(6, 'charizard', 3, 90.5, 1.7, 78, 84, 78),
(7, 'squirtle', 1, 9, 0.5, 44, 48, 65),
(8, 'wartortle', 2, 22.5, 1, 59, 63, 80),
(9, 'blastoise', 3, 85.5, 1.6, 79, 83, 100);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pokemon_tipagem`
--

CREATE TABLE `pokemon_tipagem` (
  `id_tipo` int(11) NOT NULL,
  `id_pokemon` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pokemon_tipagem`
--

INSERT INTO `pokemon_tipagem` (`id_tipo`, `id_pokemon`, `nome`, `tipo`) VALUES
(1, 1, 'bulbasaur', 'grama'),
(2, 1, 'bulbasaur', 'veneno'),
(3, 2, 'ivysaur', 'grama'),
(4, 2, 'ivysaur', 'veneno'),
(5, 3, 'venusaur', 'grama'),
(6, 3, 'venusaur', 'veneno'),
(7, 4, 'charmander', 'fogo'),
(8, 5, 'charmeleon', 'fogo'),
(9, 6, 'charizard', 'fogo'),
(10, 6, 'charizard', 'voador'),
(11, 7, 'squirtle', 'agua'),
(12, 8, 'wartortle', 'agua'),
(13, 9, 'blastoise', 'agua');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pokemon_geral`
--
ALTER TABLE `pokemon_geral`
  ADD PRIMARY KEY (`id_pokemon`);

--
-- Índices de tabela `pokemon_tipagem`
--
ALTER TABLE `pokemon_tipagem`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pokemon_geral`
--
ALTER TABLE `pokemon_geral`
  MODIFY `id_pokemon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `pokemon_tipagem`
--
ALTER TABLE `pokemon_tipagem`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
