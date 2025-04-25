-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/04/2025 às 22:47
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
-- Banco de dados: `bdescolar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbaluno`
--

CREATE TABLE `tbaluno` (
  `ra` int(11) NOT NULL,
  `nomeAluno` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbaluno`
--

INSERT INTO `tbaluno` (`ra`, `nomeAluno`) VALUES
(1, 'Huginho'),
(2, 'Zezinho'),
(3, 'Luizinho'),
(4, 'Margarida'),
(5, 'Arielly');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbdisciplinas`
--

CREATE TABLE `tbdisciplinas` (
  `idDisciplina` int(11) NOT NULL,
  `nomeDisci` varchar(50) DEFAULT NULL,
  `cargaHoraria` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbdisciplinas`
--

INSERT INTO `tbdisciplinas` (`idDisciplina`, `nomeDisci`, `cargaHoraria`) VALUES
(1, 'Programação Web II', '50'),
(2, 'Banco de Dados II', '100');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbnotas`
--

CREATE TABLE `tbnotas` (
  `idnota` int(11) NOT NULL,
  `ra` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `idDisciplina` int(11) NOT NULL,
  `nota` varchar(2) NOT NULL,
  `faltas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbnotas`
--

INSERT INTO `tbnotas` (`idnota`, `ra`, `id_professor`, `idDisciplina`, `nota`, `faltas`) VALUES
(1, 5, 5, 2, 'MB', 0),
(7, 1, 2, 1, 'MB', 8),
(9, 3, 2, 2, 'I', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbprofessor`
--

CREATE TABLE `tbprofessor` (
  `id_professor` int(11) NOT NULL,
  `nomeProfessor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbprofessor`
--

INSERT INTO `tbprofessor` (`id_professor`, `nomeProfessor`) VALUES
(1, 'Tio Patinhas'),
(2, 'Pato Donald'),
(3, 'Maga Patalógica'),
(4, 'Minnie'),
(5, 'Mateus');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbaluno`
--
ALTER TABLE `tbaluno`
  ADD PRIMARY KEY (`ra`);

--
-- Índices de tabela `tbdisciplinas`
--
ALTER TABLE `tbdisciplinas`
  ADD PRIMARY KEY (`idDisciplina`);

--
-- Índices de tabela `tbnotas`
--
ALTER TABLE `tbnotas`
  ADD PRIMARY KEY (`idnota`),
  ADD KEY `fkAlunoNotas` (`ra`),
  ADD KEY `fkProfessorNotas` (`id_professor`),
  ADD KEY `fkDisciplinaNotas` (`idDisciplina`);

--
-- Índices de tabela `tbprofessor`
--
ALTER TABLE `tbprofessor`
  ADD PRIMARY KEY (`id_professor`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbaluno`
--
ALTER TABLE `tbaluno`
  MODIFY `ra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbdisciplinas`
--
ALTER TABLE `tbdisciplinas`
  MODIFY `idDisciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbnotas`
--
ALTER TABLE `tbnotas`
  MODIFY `idnota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbprofessor`
--
ALTER TABLE `tbprofessor`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbnotas`
--
ALTER TABLE `tbnotas`
  ADD CONSTRAINT `fkAlunoNotas` FOREIGN KEY (`ra`) REFERENCES `tbaluno` (`ra`),
  ADD CONSTRAINT `fkDisciplinaNotas` FOREIGN KEY (`idDisciplina`) REFERENCES `tbdisciplinas` (`idDisciplina`),
  ADD CONSTRAINT `fkProfessorNotas` FOREIGN KEY (`id_professor`) REFERENCES `tbprofessor` (`id_professor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
