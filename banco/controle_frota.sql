-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 23/03/2022 às 23:21
-- Versão do servidor: 8.0.24
-- Versão do PHP: 7.2.24-0ubuntu0.18.04.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controle_frota`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `motorista`
--

CREATE TABLE `motorista` (
  `id_motorista` int NOT NULL,
  `nome_motorista` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_veiculo`
--

CREATE TABLE `tipo_veiculo` (
  `idtipo_veiculo` int NOT NULL,
  `tipo_veiculo` varchar(45) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Fazendo dump de dados para tabela `tipo_veiculo`
--

INSERT INTO `tipo_veiculo` (`idtipo_veiculo`, `tipo_veiculo`) VALUES
(1, 'gol'),
(2, 'saveiro'),
(3, 'L300'),
(4, 'moto');

-- --------------------------------------------------------

--
-- Estrutura para tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `id_veiculo` int NOT NULL,
  `placa_veiculo` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `tipo_veiculo_idtipo_veiculo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Fazendo dump de dados para tabela `veiculo`
--

INSERT INTO `veiculo` (`id_veiculo`, `placa_veiculo`, `tipo_veiculo_idtipo_veiculo`) VALUES
(5, 'GMJ6080', 4),
(1, 'HPL5260', 1),
(2, 'JQE7537', 2),
(3, 'KFX7334', 1),
(6, 'MSR7223', 2),
(4, 'MYY3709', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `viagem`
--

CREATE TABLE `viagem` (
  `id_viagem` int NOT NULL,
  `data_saida` date DEFAULT NULL,
  `data_chegada` date DEFAULT NULL,
  `hora_saida` timestamp NULL DEFAULT NULL,
  `hora_chegada` timestamp NULL DEFAULT NULL,
  `km_saida` decimal(10,0) DEFAULT NULL,
  `km_chegada` decimal(10,0) DEFAULT NULL,
  `destino` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `motorista` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `veiculo_id_veiculo` int NOT NULL,
  `tipo_veiculo_idtipo_veiculo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Fazendo dump de dados para tabela `viagem`
--

INSERT INTO `viagem` (`id_viagem`, `data_saida`, `data_chegada`, `hora_saida`, `hora_chegada`, `km_saida`, `km_chegada`, `destino`, `motorista`, `veiculo_id_veiculo`, `tipo_veiculo_idtipo_veiculo`) VALUES
(41, '2022-03-22', '2022-03-22', '2022-03-22 17:00:00', '2022-03-22 18:00:00', '22500', '22560', 'cliente', 'Fábio', 2, 2),
(42, '2022-03-22', '2022-03-22', '2022-03-22 19:00:00', '2022-03-22 20:00:00', '22560', '22570', 'cliente', 'fulano02', 1, 1),
(43, '2022-03-22', '2022-03-22', '2022-03-22 13:00:00', '2022-03-22 14:00:00', '22562', '22572', 'cliente', 'fulano03', 4, 4),
(44, '2022-03-22', '2022-03-22', '2022-03-23 10:00:00', '2022-03-23 11:00:00', '22565', '22575', 'cliente', 'fulano04', 5, 4),
(45, '2022-03-23', '2022-03-23', '2022-03-23 12:00:00', '2022-03-23 15:00:00', '22500', '22560', 'cliente', 'fulando 05', 6, 4);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`id_motorista`);

--
-- Índices de tabela `tipo_veiculo`
--
ALTER TABLE `tipo_veiculo`
  ADD PRIMARY KEY (`idtipo_veiculo`);

--
-- Índices de tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id_veiculo`,`tipo_veiculo_idtipo_veiculo`),
  ADD UNIQUE KEY `placa_veiculo_UNIQUE` (`placa_veiculo`),
  ADD KEY `fk_veiculo_tipo_veiculo1_idx` (`tipo_veiculo_idtipo_veiculo`);

--
-- Índices de tabela `viagem`
--
ALTER TABLE `viagem`
  ADD PRIMARY KEY (`id_viagem`,`veiculo_id_veiculo`,`tipo_veiculo_idtipo_veiculo`),
  ADD KEY `fk_viagem_veiculo_idx` (`veiculo_id_veiculo`),
  ADD KEY `fk_viagem_tipo_veiculo1_idx` (`tipo_veiculo_idtipo_veiculo`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `motorista`
--
ALTER TABLE `motorista`
  MODIFY `id_motorista` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `tipo_veiculo`
--
ALTER TABLE `tipo_veiculo`
  MODIFY `idtipo_veiculo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `id_veiculo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `viagem`
--
ALTER TABLE `viagem`
  MODIFY `id_viagem` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `fk_veiculo_tipo_veiculo1` FOREIGN KEY (`tipo_veiculo_idtipo_veiculo`) REFERENCES `tipo_veiculo` (`idtipo_veiculo`);

--
-- Restrições para tabelas `viagem`
--
ALTER TABLE `viagem`
  ADD CONSTRAINT `fk_viagem_tipo_veiculo1` FOREIGN KEY (`tipo_veiculo_idtipo_veiculo`) REFERENCES `tipo_veiculo` (`idtipo_veiculo`),
  ADD CONSTRAINT `fk_viagem_veiculo` FOREIGN KEY (`veiculo_id_veiculo`) REFERENCES `veiculo` (`id_veiculo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
