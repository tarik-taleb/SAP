-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 21 déc. 2018 à 08:29
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sap`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE IF NOT EXISTS `candidat` (
  `id_candidat` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `cv` varchar(50) NOT NULL DEFAULT 'cv',
  `motdepasse` varchar(250) NOT NULL COMMENT 'mot de passe',
  PRIMARY KEY (`id_candidat`),
  UNIQUE KEY `adresse` (`adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`id_candidat`, `nom`, `prenom`, `numero`, `adresse`, `cv`, `motdepasse`) VALUES
(65, 'tarki', 'tarik', '4545', 'tar@tar', '', '$2y$10$Va1TlX3IMxAbxok5p6zxrORQePWudZMbVZuJxT2nQiCtyFLH69NYS'),
(66, 'sdhg', 'h,gjh', '393939', 'nvv@vhhj', 'LesCv/LM_OthmaneR.pdf', '$2y$10$v7vYFTdqYk/mG.3iLrp9C.5CpFUh3HqvVB3yRUpkIQQ2TMpYjzXJC');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `id_entreprise` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `secteur` varchar(50) NOT NULL,
  `localisation` char(1) NOT NULL,
  `nb_salarie` int(11) NOT NULL,
  `id_offre` int(11) NOT NULL,
  PRIMARY KEY (`id_entreprise`),
  KEY `Entreprise_Offre_FK` (`id_offre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `id_offre` int(11) NOT NULL AUTO_INCREMENT,
  `nom_offre` varchar(50) NOT NULL,
  `type_offre` varchar(50) NOT NULL,
  `debut_offre` date NOT NULL,
  `explication` text NOT NULL,
  PRIMARY KEY (`id_offre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `postuler`
--

DROP TABLE IF EXISTS `postuler`;
CREATE TABLE IF NOT EXISTS `postuler` (
  `id_offre` int(11) NOT NULL,
  `id_candidat` int(11) NOT NULL,
  PRIMARY KEY (`id_offre`,`id_candidat`),
  KEY `postuler_Candidat0_FK` (`id_candidat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `Entreprise_Offre_FK` FOREIGN KEY (`id_offre`) REFERENCES `offre` (`id_offre`);

--
-- Contraintes pour la table `postuler`
--
ALTER TABLE `postuler`
  ADD CONSTRAINT `postuler_Candidat0_FK` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id_candidat`),
  ADD CONSTRAINT `postuler_Offre_FK` FOREIGN KEY (`id_offre`) REFERENCES `offre` (`id_offre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
