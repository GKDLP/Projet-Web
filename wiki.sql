-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 fév. 2024 à 13:25
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wiki`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

DROP TABLE IF EXISTS `appartenir`;
CREATE TABLE IF NOT EXISTS `appartenir` (
  `idProjet` int NOT NULL,
  `idCategorie` int NOT NULL,
  PRIMARY KEY (`idProjet`,`idCategorie`),
  KEY `idCategorie` (`idCategorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `appartenir`
--

INSERT INTO `appartenir` (`idProjet`, `idCategorie`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(5, 3),
(6, 3);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int NOT NULL AUTO_INCREMENT,
  `descriptionCategorie` varchar(500) DEFAULT NULL,
  `label` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `descriptionCategorie`, `label`) VALUES
(1, 'Projet de début d\'année sur une semaine.', 'Workshop'),
(2, 'Projet transversal sur deux années.', 'OpenInnovation'),
(3, 'Autre catégorie', 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

DROP TABLE IF EXISTS `coach`;
CREATE TABLE IF NOT EXISTS `coach` (
  `idCoach` int NOT NULL,
  `nomCoach` varchar(50) DEFAULT NULL,
  `prenomCoach` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCoach`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `consulter`
--

DROP TABLE IF EXISTS `consulter`;
CREATE TABLE IF NOT EXISTS `consulter` (
  `idUser` int NOT NULL,
  `idProjet` int NOT NULL,
  PRIMARY KEY (`idUser`,`idProjet`),
  KEY `idProjet` (`idProjet`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `emprunter`
--

DROP TABLE IF EXISTS `emprunter`;
CREATE TABLE IF NOT EXISTS `emprunter` (
  `idMatos` int NOT NULL,
  `dateEmprunt` date DEFAULT NULL,
  `idUser` int NOT NULL,
  PRIMARY KEY (`idMatos`),
  KEY `idUser` (`idUser`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `idMatos` int NOT NULL,
  `nomMatos` varchar(50) DEFAULT NULL,
  `statut` tinyint(1) NOT NULL,
  `idCoach` int NOT NULL,
  PRIMARY KEY (`idMatos`),
  KEY `idCoach` (`idCoach`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `idMsg` int NOT NULL,
  `objet` varchar(50) DEFAULT NULL,
  `contenu` varchar(1000) DEFAULT NULL,
  `idUser` int NOT NULL,
  `idCoach` int NOT NULL,
  PRIMARY KEY (`idMsg`),
  KEY `idUser` (`idUser`),
  KEY `idCoach` (`idCoach`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `idProjet` int NOT NULL AUTO_INCREMENT,
  `nomProjet` varchar(50) DEFAULT NULL,
  `dateCreation` date DEFAULT NULL,
  `illustration` varchar(100) DEFAULT NULL,
  `descriptionProjet` varchar(500) DEFAULT NULL,
  `valider` tinyint(1) NOT NULL,
  PRIMARY KEY (`idProjet`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`idProjet`, `nomProjet`, `dateCreation`, `illustration`, `descriptionProjet`, `valider`) VALUES
(1, 'Wally', NULL, 'Illustrations_Projets\\wally.jpg', NULL, 0),
(2, 'Casque VR', NULL, 'Illustrations_Projets\\casque_vr.jpg', NULL, 0),
(3, 'Cybernéo', NULL, 'Illustrations_Projets\\cybernéo.png', NULL, 0),
(4, 'BORNE D\'ARCADE', NULL, 'Illustrations_Projets\\borne-d\'arcade.webp', NULL, 0),
(5, 'Wiki', NULL, 'Illustrations_Projets\\wiki.jpg', NULL, 0),
(6, 'Nouveau bâtiment', NULL, 'Illustrations_Projets\\nouveau_bâtiment.png', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

DROP TABLE IF EXISTS `proprietaire`;
CREATE TABLE IF NOT EXISTS `proprietaire` (
  `idUser` int NOT NULL,
  `idProjet` int NOT NULL,
  PRIMARY KEY (`idUser`,`idProjet`),
  KEY `idProjet` (`idProjet`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int NOT NULL,
  `nomUser` varchar(50) NOT NULL,
  `prenomUser` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dateInscription` date DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `nomUser`, `prenomUser`, `description`, `email`, `dateInscription`) VALUES
(1, 'LUANG-VIJA', 'Yohan', NULL, 'yohan.luang-vija@outlook.com', NULL),
(2, 'DE MAREZ', 'Coralie', NULL, 'coralie.demarez@ecoles-epsi.net', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
