-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 11:08 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homo-photo`
--

-- --------------------------------------------------------

--
-- Table structure for table `poze`
--

DROP TABLE IF EXISTS `poze`;
CREATE TABLE `poze` (
  `id` int(11) NOT NULL,
  `poza` mediumblob,
  `r11` varchar(45) DEFAULT NULL,
  `r12` varchar(45) DEFAULT NULL,
  `r13` varchar(45) DEFAULT NULL,
  `r14` varchar(45) DEFAULT NULL,
  `r21` varchar(45) DEFAULT NULL,
  `r22` varchar(45) DEFAULT NULL,
  `r23` varchar(45) DEFAULT NULL,
  `r24` varchar(45) DEFAULT NULL,
  `intrebare` varchar(200) DEFAULT NULL,
  `titlu` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `poze`:
--

-- --------------------------------------------------------

--
-- Table structure for table `raspunsuri`
--

DROP TABLE IF EXISTS `raspunsuri`;
CREATE TABLE `raspunsuri` (
  `user_id` int(11) NOT NULL,
  `poza_id` int(11) NOT NULL,
  `r11` varchar(200) DEFAULT NULL,
  `r12` varchar(200) DEFAULT NULL,
  `r13` varchar(45) DEFAULT NULL,
  `r14` varchar(45) DEFAULT NULL,
  `r21` varchar(45) DEFAULT NULL,
  `r22` varchar(45) DEFAULT NULL,
  `r23` varchar(45) DEFAULT NULL,
  `r24` varchar(45) DEFAULT NULL,
  `r3` varchar(200) DEFAULT NULL,
  `r4` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `raspunsuri`:
--

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

DROP TABLE IF EXISTS `utilizatori`;
CREATE TABLE `utilizatori` (
  `id` int(11) NOT NULL,
  `Nume` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Parola` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Email` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Admin` int(11) DEFAULT NULL,
  `Prof` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Clasa` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Judet` varchar(45) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- RELATIONSHIPS FOR TABLE `utilizatori`:
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poze`
--
ALTER TABLE `poze`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raspunsuri`
--
ALTER TABLE `raspunsuri`
  ADD PRIMARY KEY (`poza_id`,`user_id`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poze`
--
ALTER TABLE `poze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
