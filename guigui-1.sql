-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2017 at 08:41 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guigui`
--

-- --------------------------------------------------------

--
-- Table structure for table `actionneur`
--

CREATE TABLE IF NOT EXISTS `actionneur` (
  `Id_Actionneur` int(11) NOT NULL,
  `Etat_Actionneur` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID_Admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `capteurs`
--

CREATE TABLE IF NOT EXISTS `capteurs` (
  `ID_Capteurs` int(11) NOT NULL,
  `Type` text NOT NULL,
  `Valeur` float NOT NULL,
  `Date_Installation` text NOT NULL,
  `Etat_Batterie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `ID_Clients` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client secondaire`
--

CREATE TABLE IF NOT EXISTS `client secondaire` (
  `ID_Secondaire` int(11) NOT NULL,
  `mail` text NOT NULL,
  `Pass` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `historique capteurs`
--

CREATE TABLE IF NOT EXISTS `historique capteurs` (
  `Id_Capteurs` int(11) NOT NULL,
  `Date_Mesure` text NOT NULL,
  `Valeur_Mesure` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maison`
--

CREATE TABLE IF NOT EXISTS `maison` (
  `Id` int(11) NOT NULL,
  `Nombre de Pièces` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messagerie`
--

CREATE TABLE IF NOT EXISTS `messagerie` (
  `ID_Message` int(11) NOT NULL DEFAULT '0',
  `Titre` text NOT NULL,
  `Contenu` text NOT NULL,
  `ID_Expéditeur` int(11) NOT NULL,
  `ID_Destinataire` int(11) NOT NULL,
  `Time_Stamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ownership_actio_scen`
--

CREATE TABLE IF NOT EXISTS `ownership_actio_scen` (
  `Id_Actionneur` int(11) NOT NULL,
  `ID_Scénarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ownership_capt_scen`
--

CREATE TABLE IF NOT EXISTS `ownership_capt_scen` (
  `ID_Capteurs` int(11) NOT NULL,
  `ID_Scénarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ownership_pièces_scen`
--

CREATE TABLE IF NOT EXISTS `ownership_pièces_scen` (
  `ID_pièces` int(11) NOT NULL,
  `ID_Scénarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pièces`
--

CREATE TABLE IF NOT EXISTS `pièces` (
  `ID_pièces` int(11) NOT NULL,
  `ID_Capteurs` int(11) NOT NULL,
  `Nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scénarios`
--

CREATE TABLE IF NOT EXISTS `scénarios` (
  `ID_Scénarios` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Nom_Scénarios` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `Mail` text NOT NULL,
  `Prénom` text NOT NULL,
  `Nom` text NOT NULL,
  `Téléphone` text NOT NULL,
  `Mot de Passe` text NOT NULL,
  `Adresse` text NOT NULL,
  `Is_Boolean` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actionneur`
--
ALTER TABLE `actionneur`
  ADD PRIMARY KEY (`Id_Actionneur`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indexes for table `capteurs`
--
ALTER TABLE `capteurs`
  ADD PRIMARY KEY (`ID_Capteurs`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ID_Clients`);

--
-- Indexes for table `client secondaire`
--
ALTER TABLE `client secondaire`
  ADD PRIMARY KEY (`ID_Secondaire`),
  ADD UNIQUE KEY `Pass` (`Pass`);

--
-- Indexes for table `historique capteurs`
--
ALTER TABLE `historique capteurs`
  ADD PRIMARY KEY (`Id_Capteurs`);

--
-- Indexes for table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`ID_Message`);

--
-- Indexes for table `ownership_actio_scen`
--
ALTER TABLE `ownership_actio_scen`
  ADD PRIMARY KEY (`Id_Actionneur`,`ID_Scénarios`);

--
-- Indexes for table `ownership_capt_scen`
--
ALTER TABLE `ownership_capt_scen`
  ADD PRIMARY KEY (`ID_Capteurs`,`ID_Scénarios`);

--
-- Indexes for table `ownership_pièces_scen`
--
ALTER TABLE `ownership_pièces_scen`
  ADD PRIMARY KEY (`ID_pièces`,`ID_Scénarios`);

--
-- Indexes for table `pièces`
--
ALTER TABLE `pièces`
  ADD PRIMARY KEY (`ID_pièces`);

--
-- Indexes for table `scénarios`
--
ALTER TABLE `scénarios`
  ADD PRIMARY KEY (`ID_Scénarios`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actionneur`
--
ALTER TABLE `actionneur`
  ADD CONSTRAINT `ID2` FOREIGN KEY (`Id_Actionneur`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `ID6` FOREIGN KEY (`Id_Actionneur`) REFERENCES `pièces` (`ID_pièces`),
  ADD CONSTRAINT `ID7` FOREIGN KEY (`Id_Actionneur`) REFERENCES `scénarios` (`ID_Scénarios`);

--
-- Constraints for table `capteurs`
--
ALTER TABLE `capteurs`
  ADD CONSTRAINT `ID4` FOREIGN KEY (`ID_Capteurs`) REFERENCES `pièces` (`ID_pièces`);

--
-- Constraints for table `historique capteurs`
--
ALTER TABLE `historique capteurs`
  ADD CONSTRAINT `ID5` FOREIGN KEY (`Id_Capteurs`) REFERENCES `capteurs` (`ID_Capteurs`);

--
-- Constraints for table `maison`
--
ALTER TABLE `maison`
  ADD CONSTRAINT `ID1` FOREIGN KEY (`Id`) REFERENCES `user` (`id`);

--
-- Constraints for table `messagerie`
--
ALTER TABLE `messagerie`
  ADD CONSTRAINT `ID` FOREIGN KEY (`ID_Message`) REFERENCES `user` (`id`);

--
-- Constraints for table `pièces`
--
ALTER TABLE `pièces`
  ADD CONSTRAINT `ID3` FOREIGN KEY (`ID_pièces`) REFERENCES `maison` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
