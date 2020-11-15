-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Nov-2020 às 20:39
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_tdd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_filme`
--

CREATE TABLE `categoria_filme` (
  `id` int(11) NOT NULL,
  `id_filme` int(11) NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria_filme`
--

INSERT INTO `categoria_filme` (`id`, `id_filme`, `categoria`) VALUES
(32, 8, 4),
(33, 8, 9),
(34, 9, 3),
(35, 9, 4),
(36, 10, 4),
(37, 11, 2),
(38, 11, 3),
(39, 11, 4),
(40, 11, 6),
(41, 11, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `ano_lancamento` date NOT NULL,
  `duracao` varchar(50) NOT NULL,
  `sinopse` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`id`, `titulo`, `ano_lancamento`, `duracao`, `sinopse`) VALUES
(8, 'A Escolha Perfeita', '2013-05-08', '1h52', 'Obrigada a ir para a faculdade contra a vontade, a rebelde Beca não se interessa em participar de atividades extracurriculares, até surgir a oportunidade de ingressar no grupo musical Barden Bella e competir no Campeonato Regional de Música.'),
(9, 'Jumanji: O Nivel Seguinte', '2019-12-05', '2h03', 'Spencer volta ao mundo fantástico de Jumanji. Os amigos Martha, Fridge e Bethany entram no jogo e tentam trazê-lo para casa. Mas eles logo descobrem mais obstáculos e perigos a serem superados.'),
(10, 'Minha Mãe é um peça 3', '2019-12-26', '1h51', 'Dona Hermínia precisa se redescobrir e se reinventar porque seus filhos estão formando novas famílias. Marcelina está grávida e Juliano vai casar. Dona Hermínia está mais ansiosa do que nunca. Para completar as confusões, Carlos Alberto, seu ex-marido, que esteve sempre por perto, agora resolve se mudar para o apartamento ao lado.'),
(11, 'Frozen 2', '2020-01-02', '1h44', 'De volta à infância de Elsa e Anna, as duas garotas descobrem uma história do pai, quando ainda era príncipe de Arendelle. Ele conta às meninas a história de uma visita à floresta dos elementos, onde um acontecimento inesperado teria provocado a separação dos habitantes da cidade com os quatro elementos fundamentais: ar, fogo, terra e água. Esta revelação ajuda Elsa a compreender a origem de seus poderes.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plataforma_filme`
--

CREATE TABLE `plataforma_filme` (
  `id` int(11) NOT NULL,
  `id_filme` int(11) NOT NULL,
  `plataforma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `plataforma_filme`
--

INSERT INTO `plataforma_filme` (`id`, `id_filme`, `plataforma`) VALUES
(18, 8, 1),
(19, 8, 2),
(20, 8, 3),
(21, 8, 4),
(22, 8, 5),
(23, 8, 6),
(24, 8, 7),
(25, 8, 8),
(26, 8, 9),
(27, 8, 10),
(28, 8, 11),
(29, 8, 12),
(30, 9, 3),
(31, 9, 5),
(32, 9, 6),
(33, 9, 8),
(34, 9, 9),
(35, 9, 11),
(36, 9, 12),
(37, 10, 5),
(38, 10, 6),
(39, 10, 8),
(40, 10, 11),
(41, 10, 12),
(42, 11, 2),
(43, 11, 3),
(44, 11, 5),
(45, 11, 7),
(46, 11, 9),
(47, 11, 11),
(48, 11, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria_filme`
--
ALTER TABLE `categoria_filme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plataforma_filme`
--
ALTER TABLE `plataforma_filme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria_filme`
--
ALTER TABLE `categoria_filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `plataforma_filme`
--
ALTER TABLE `plataforma_filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
