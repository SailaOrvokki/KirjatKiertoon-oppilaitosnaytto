-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 09:48 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kirjakirpputori`
--

-- --------------------------------------------------------

--
-- Table structure for table `ammattiala`
--

CREATE TABLE `ammattiala` (
  `ammattialaid` int(11) NOT NULL,
  `kirjailmoitus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kirjailmoitus`
--

CREATE TABLE `kirjailmoitus` (
  `kirjailmoitusid` int(11) NOT NULL,
  `käyttäjäid` int(11) NOT NULL,
  `nimi` varchar(30) COLLATE utf8_swedish_ci DEFAULT NULL,
  `kuvaus` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `kuva` tinyint(1) NOT NULL,
  `myyntihinta` decimal(10,0) DEFAULT NULL,
  `maksutapa` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `myyntiaika` datetime NOT NULL,
  `viesti` varchar(500) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `käyttäjä`
--

CREATE TABLE `käyttäjä` (
  `käyttäjäid` int(11) NOT NULL,
  `etunimi` varchar(32) COLLATE utf8_swedish_ci DEFAULT NULL,
  `sukunimi` varchar(64) COLLATE utf8_swedish_ci NOT NULL,
  `puhnro` varchar(20) COLLATE utf8_swedish_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  `salasana` varchar(20) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `toimipiste`
--

CREATE TABLE `toimipiste` (
  `toimipisteid` int(11) NOT NULL,
  `kirjailmoitusid` int(11) NOT NULL,
  `nimi` varchar(64) COLLATE utf8_swedish_ci NOT NULL,
  `osoite` varchar(64) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ammattiala`
--
ALTER TABLE `ammattiala`
  ADD PRIMARY KEY (`ammattialaid`),
  ADD KEY `kirjailmoitus` (`kirjailmoitus`);

--
-- Indexes for table `kirjailmoitus`
--
ALTER TABLE `kirjailmoitus`
  ADD PRIMARY KEY (`kirjailmoitusid`),
  ADD KEY `käyttäjäid` (`käyttäjäid`);

--
-- Indexes for table `käyttäjä`
--
ALTER TABLE `käyttäjä`
  ADD PRIMARY KEY (`käyttäjäid`),
  ADD UNIQUE KEY `salasana` (`salasana`);

--
-- Indexes for table `toimipiste`
--
ALTER TABLE `toimipiste`
  ADD PRIMARY KEY (`toimipisteid`),
  ADD KEY `kirjailmoitusid` (`kirjailmoitusid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ammattiala`
--
ALTER TABLE `ammattiala`
  MODIFY `ammattialaid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kirjailmoitus`
--
ALTER TABLE `kirjailmoitus`
  MODIFY `kirjailmoitusid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `käyttäjä`
--
ALTER TABLE `käyttäjä`
  MODIFY `käyttäjäid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `toimipiste`
--
ALTER TABLE `toimipiste`
  MODIFY `toimipisteid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ammattiala`
--
ALTER TABLE `ammattiala`
  ADD CONSTRAINT `ammattiala_ibfk_1` FOREIGN KEY (`kirjailmoitus`) REFERENCES `kirjailmoitus` (`kirjailmoitusid`);

--
-- Constraints for table `kirjailmoitus`
--
ALTER TABLE `kirjailmoitus`
  ADD CONSTRAINT `kirjailmoitus_ibfk_1` FOREIGN KEY (`käyttäjäid`) REFERENCES `käyttäjä` (`käyttäjäid`);

--
-- Constraints for table `toimipiste`
--
ALTER TABLE `toimipiste`
  ADD CONSTRAINT `toimipiste_ibfk_1` FOREIGN KEY (`kirjailmoitusid`) REFERENCES `kirjailmoitus` (`kirjailmoitusid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
