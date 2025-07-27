-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 08:37 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdi1300098`
--

-- --------------------------------------------------------

--
-- Table structure for table `direct`
--

CREATE DATABASE sdi1300098;

CREATE TABLE `direct` (
  `ama` char(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `start` char(10) NOT NULL,
  `end` char(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `afm` char(9) NOT NULL,
  `amka` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `direct`
--

INSERT INTO `direct` (`ama`, `name`, `surname`, `start`, `end`, `type`, `afm`, `amka`) VALUES
('200152535', 'NIKOLAOS', 'PAPPAS', '01/01/2017', '01/03/2018', 'Iatrofarmakeftiki kai nosokomeiaki perithalpsi', '200420044', '19701970197'),
('200140282', 'MIXAHL', 'ANAGNOSTOY', '01/01/2017', '01/03/2018', 'Iatrofarmakeftiki kai nosokomeiaki perithalpsi', '201820171', '19561956195');

-- --------------------------------------------------------

--
-- Table structure for table `indirect`
--

CREATE TABLE `indirect` (
  `ama` char(9) NOT NULL,
  `direct` char(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `start` char(10) NOT NULL,
  `end` char(10) NOT NULL,
  `amka` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `indirect`
--

INSERT INTO `indirect` (`ama`, `direct`, `name`, `surname`, `relationship`, `start`, `end`, `amka`) VALUES
('200123698', '200152535', 'ELENI', 'PAPPA', 'SIZIGOS', '01/01/2017', '01/03/2018', '32156487912'),
('200123699', '200152535', 'MARIA', 'PAPPA', 'tekno', '01/01/2017', '01/03/2018', '23569878541');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fathername` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mothername` varchar(255) CHARACTER SET utf8 NOT NULL,
  `birthdate` date NOT NULL,
  `amka` char(11) CHARACTER SET latin1 NOT NULL,
  `afm` char(9) CHARACTER SET latin1 NOT NULL,
  `phone` char(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `name`, `surname`, `fathername`, `mothername`, `birthdate`, `amka`, `afm`, `phone`) VALUES
('pappas@gmail.com', 'f92db53203b23fc6dfda918b49273b36', 'ÎÎ™ÎšÎŸÎ›Î‘ÎŸÎ£', 'Î Î‘Î Î Î‘Î£', 'Î™Î©Î‘ÎÎÎ—Î£', 'ÎœÎ‘Î¡Î™Î‘', '2018-01-24', '19701970197', '200420044', '6983565478'),
('anagnostou@gmail.com', 'f92db53203b23fc6dfda918b49273b36', 'ÎœÎ™Î§Î‘Î—Î›', 'Î‘ÎÎ‘Î“ÎÎ©Î£Î¤ÎŸÎ¥', 'Î’Î‘Î£Î™Î›Î•Î™ÎŸÎ£', 'Î‘ÎÎÎ‘', '2018-01-20', '19561956195', '201820171', '2105845697');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `direct`
--
ALTER TABLE `direct`
  ADD PRIMARY KEY (`afm`);

--
-- Indexes for table `indirect`
--
ALTER TABLE `indirect`
  ADD PRIMARY KEY (`ama`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`afm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
