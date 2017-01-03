-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 03 Janvier 2017 à 13:12
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `m3104_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `intervenant`
--

CREATE TABLE `intervenant` (
  `idIntervenant` int(11) NOT NULL PRIMARY KEY,
  `aidemenage` tinyint(1) NOT NULL,
  `aiderepas` tinyint(1) NOT NULL,
  `damecompagnie` tinyint(1) NOT NULL,
  `aidepersonne` tinyint(1) NOT NULL,
  `idUtilisateur` int(11) NOT NULL REFERENCES Utilisateur(`idUtilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `intervenant`
--

INSERT INTO `intervenant` (`idIntervenant`, `aidemenage`, `aiderepas`, `damecompagnie`, `aidepersonne`, `idUtilisateur`) VALUES
(1001, 1, 1, 1, 1, 1),
(1002, 1, 1, 0, 0, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `intervenant`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
