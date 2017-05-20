-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 10 Mai 2017 à 13:40
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dohome`
--

-- --------------------------------------------------------

--
-- Structure de la table `actionneur`
--

CREATE TABLE `actionneur` (
  `Id_Actionneur` int(11) NOT NULL,
  `Etat_Actionneur` tinyint(1) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `capteurs`
--

CREATE TABLE `capteurs` (
  `ID_Capteurs` int(11) NOT NULL,
  `Type` text NOT NULL,
  `Valeur` float NOT NULL,
  `Date_Installation` text NOT NULL,
  `Etat_Batterie` int(11) NOT NULL,
  `ID_piece` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client_secondaire`
--

CREATE TABLE `client_secondaire` (
  `ID_Secondaire` int(11) NOT NULL,
  `mail` text NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `historique capteurs`
--

CREATE TABLE `historique capteurs` (
  `Id_Capteurs` int(11) NOT NULL,
  `Date_Mesure` text NOT NULL,
  `Valeur_Mesure` float NOT NULL,
  `unite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `Id` int(11) NOT NULL,
  `Nombre de Pièces` int(11) NOT NULL,
  `ID_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `ID_Message` int(11) NOT NULL DEFAULT '0',
  `Titre` text NOT NULL,
  `Contenu` text NOT NULL,
  `ID_Expéditeur` int(11) NOT NULL,
  `ID_Destinataire` int(11) NOT NULL,
  `Time_Stamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ownership_actio_scen`
--

CREATE TABLE `ownership_actio_scen` (
  `Id_Actionneur` int(11) NOT NULL,
  `ID_Scénarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ownership_capt_scen`
--

CREATE TABLE `ownership_capt_scen` (
  `ID_Capteurs` int(11) NOT NULL,
  `ID_Scénarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ownership_pièces_scen`
--

CREATE TABLE `ownership_pièces_scen` (
  `ID_pièces` int(11) NOT NULL,
  `ID_Scénarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pieces`
--

CREATE TABLE `pieces` (
  `ID_pièces` int(11) NOT NULL,
  `ID_Capteurs` int(11) NOT NULL,
  `Nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `scénarios`
--

CREATE TABLE `scénarios` (
  `ID_Scénarios` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Nom_Scénarios` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Mail` text NOT NULL,
  `Prenom` text NOT NULL,
  `Nom` text NOT NULL,
  `telephone` text NOT NULL,
  `mot_de_passe` text NOT NULL,
  `Adresse` text NOT NULL,
  `Is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `Mail`, `Prenom`, `Nom`, `telephone`, `mot_de_passe`, `Adresse`, `Is_admin`) VALUES
(1, 'mabite@gmail.xxx', 'Nicolas', 'Kiris', '064206969', 'azerty', 'no', 0),
(2, 'test@test.Com', 'Nicolas', 'lelelelel', '064206969', 'azerty', 'no', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actionneur`
--
ALTER TABLE `actionneur`
  ADD PRIMARY KEY (`Id_Actionneur`);

--
-- Index pour la table `capteurs`
--
ALTER TABLE `capteurs`
  ADD PRIMARY KEY (`ID_Capteurs`),
  ADD KEY `capteurs_pieces_ID_pièces_fk` (`ID_piece`);

--
-- Index pour la table `client_secondaire`
--
ALTER TABLE `client_secondaire`
  ADD PRIMARY KEY (`ID_Secondaire`),
  ADD KEY `client_secondaire_user_id_fk` (`ID_USER`);

--
-- Index pour la table `historique capteurs`
--
ALTER TABLE `historique capteurs`
  ADD PRIMARY KEY (`Id_Capteurs`);

--
-- Index pour la table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `maison_user__id_fk` (`ID_user`);

--
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`ID_Message`),
  ADD KEY `messagerie_user_id_fk` (`ID_Destinataire`);

--
-- Index pour la table `ownership_actio_scen`
--
ALTER TABLE `ownership_actio_scen`
  ADD PRIMARY KEY (`Id_Actionneur`,`ID_Scénarios`);

--
-- Index pour la table `ownership_capt_scen`
--
ALTER TABLE `ownership_capt_scen`
  ADD PRIMARY KEY (`ID_Capteurs`,`ID_Scénarios`);

--
-- Index pour la table `ownership_pièces_scen`
--
ALTER TABLE `ownership_pièces_scen`
  ADD PRIMARY KEY (`ID_pièces`,`ID_Scénarios`);

--
-- Index pour la table `pieces`
--
ALTER TABLE `pieces`
  ADD PRIMARY KEY (`ID_pièces`);

--
-- Index pour la table `scénarios`
--
ALTER TABLE `scénarios`
  ADD PRIMARY KEY (`ID_Scénarios`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client_secondaire`
--
ALTER TABLE `client_secondaire`
  MODIFY `ID_Secondaire` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `capteurs`
--
ALTER TABLE `capteurs`
  ADD CONSTRAINT `capteurs_pieces_ID_pièces_fk` FOREIGN KEY (`ID_piece`) REFERENCES `pieces` (`ID_pièces`);

--
-- Contraintes pour la table `client_secondaire`
--
ALTER TABLE `client_secondaire`
  ADD CONSTRAINT `client_secondaire_user_id_fk` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `maison`
--
ALTER TABLE `maison`
  ADD CONSTRAINT `maison_user__id_fk` FOREIGN KEY (`ID_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD CONSTRAINT `messagerie_user_id_fk` FOREIGN KEY (`ID_Destinataire`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
