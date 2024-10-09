-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Out-2024 às 17:15
-- Versão do servidor: 8.0.26
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `infoview`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorioinfo3`
--

CREATE TABLE `relatorioinfo3` (
  `idRelatorio` int NOT NULL,
  `bancoDeDados` varchar(300) NOT NULL,
  `filosofia1` varchar(300) NOT NULL,
  `geografia1` varchar(300) NOT NULL,
  `gestaoDeWebSites` varchar(300) NOT NULL,
  `historia1` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `linguaEspanhola1` varchar(300) NOT NULL,
  `linguaPortuguesa3` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `matematica3` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `progWeb1` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sociologia1` varchar(300) NOT NULL,
  `curso` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ano` varchar(50) NOT NULL,
  `semana` int NOT NULL,
  `mes` varchar(122) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `relatorioinfo3`
--

INSERT INTO `relatorioinfo3` (`idRelatorio`, `bancoDeDados`, `filosofia1`, `geografia1`, `gestaoDeWebSites`, `historia1`, `linguaEspanhola1`, `linguaPortuguesa3`, `matematica3`, `progWeb1`, `sociologia1`, `curso`, `ano`, `semana`, `mes`, `dia`) VALUES
(1, 'dsfdsa', 'asdfsad', 'sdafasd', '', 'dsafasd', '', '', '', 'sdfasd', 'dsafasd', '', '0000-00-00', 0, '', ''),
(2, 'dsfdsa', 'asdfsad', 'sdafasd', '', 'dsafasd', '', '', '', 'sdfasd', 'dsafasd', '', '0000-00-00', 0, '', ''),
(3, 'dsfdsa', 'asdfsad', 'sdafasd', '', 'dsafasd', '', '', '', 'sdfasd', 'dsafasd', '', '0000-00-00', 0, '', ''),
(4, 'dsfdsa', 'asdfsad', 'sdafasd', 'sdafasdf', 'dsafasd', '', '', '', 'sdfasd', 'dsafasd', '', '0000-00-00', 0, '', ''),
(5, 'dsfdsa', 'asdfsad', 'sdafasd', 'sdafasdf', 'dsafasd', '', '', '', 'sdfasd', 'dsafasd', '', '0000-00-00', 0, '', ''),
(6, 'dsfdsagf', 'asdfdasf', 'safas', 'fsafasf', 'asdgf', '', '', '', 'asdfe', 'asffsa', '', '0000-00-00', 0, '', ''),
(7, 'dsfdsagf', 'asdfdasf', 'safas', 'fsafasf', 'asdgf', 'fasdf', 'asdfas', 'fsa', 'asdfe', 'asffsa', '', '0000-00-00', 0, '', ''),
(8, 'ererer', 'rerere', 'erere', 'err', 'rererer', 'rrere', 'rerer', 'erer', 'rerer', 'erer', 'Informática para Internet', '3', 4, 'Outubro', ''),
(9, 'saf', 'af', 'sa', 'saf', 'asdfd', 'fds', 'sa', 'fss', 'fadf', 'sdf', 'Informática para Internet', '3', 2, 'Fevereiro', ''),
(10, 'gsdfbg', 'sdfg', 'sgsd', 'ddsg', 'fbfb', 'sdg', 'dsgf', 'dsg', 'sdfgs', 'dsfgsd', 'Informática para Internet', '3', 2, 'Janeiro', 'segunda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int NOT NULL,
  `fotoUsuario` varchar(200) NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `senhaUsuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `fotoUsuario`, `nomeUsuario`, `emailUsuario`, `senhaUsuario`) VALUES
(1, 'img/logo.png', 'lorena', 'lorena@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(2, 'img/logo.png', 'lorena', 'lorena@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(3, 'img/logo.png', 'lorena', 'lorena@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(4, 'img/cf1c73e42a48cc8b9ad7c606745ff265.jpg', 'fulano', 'fulana@gmail', '202cb962ac59075b964b07152d234b70'),
(5, 'img/cf1c73e42a48cc8b9ad7c606745ff265.jpg', 'root', 'joaozinhoo.pedroo@gmail.com', '63a9f0ea7bb98050796b649e85481845'),
(6, 'img/cf1c73e42a48cc8b9ad7c606745ff265.jpg', 'root', 'joaozinhoo.pedroo@gmail.com', '63a9f0ea7bb98050796b649e85481845'),
(7, '', '', 'joaozinhoo.pedroo@gmail.com', '63a9f0ea7bb98050796b649e85481845'),
(8, '', '', 'joaozinhoo.pedroo@gmail.com', '63a9f0ea7bb98050796b649e85481845'),
(9, 'img/cf1c73e42a48cc8b9ad7c606745ff265.jpg', 'root', 'joaozinhoo.pedroo@gmail.com', '63a9f0ea7bb98050796b649e85481845'),
(10, '', '', 'joaozinhoo.pedroo@gmail.com', '63a9f0ea7bb98050796b649e85481845'),
(11, '', '', 'joaozinhoo.pedroo@gmail.com', '63a9f0ea7bb98050796b649e85481845'),
(12, 'img/', '', 'joaozinhoo.pedroo@gmail.com', '63a9f0ea7bb98050796b649e85481845');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `relatorioinfo3`
--
ALTER TABLE `relatorioinfo3`
  ADD PRIMARY KEY (`idRelatorio`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `relatorioinfo3`
--
ALTER TABLE `relatorioinfo3`
  MODIFY `idRelatorio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
