-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jul-2017 às 13:37
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pvfind`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `verb` varchar(250) NOT NULL,
  `meaning` text NOT NULL,
  `example` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `list`
--

INSERT INTO `list` (`id`, `verb`, `meaning`, `example`) VALUES
(1, 'Abide by', 'Accept or follow a decision or rule.', 'We have to ABIDE BY what the court says.'),
(2, 'Account for', 'To explain.', 'They had to ACCOUNT FOR all the money that had gone missing.'),
(3, 'Ache for', 'Want something or someone a lot.', 'My partner\'s been away for a fortnight- I am ACHING FOR her.'),
(4, 'Act on', 'To take action because of something like information received.', 'The police were ACTING ON a tip from an informer and caught the gang redhanded.'),
(5, 'Act on', 'Affect.', 'The medicine only ACTS ON infected tissue.'),
(6, 'Act out', 'Perform something with actions and gestures.', 'They ACTED OUT the story on stage.'),
(7, 'Act out', 'Express an emotion in your behaviour.', 'Their anger is ACTED OUT in their antisocial behaviour. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
